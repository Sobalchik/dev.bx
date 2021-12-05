<?php

class FinancialTransactionsRuTest extends \PHPUnit\Framework\TestCase
{
	public function getValidateFailSamples(): array
	{
		return [
			'empty' => [
				[],
			],
			'filled but empty' => [
				[
					'Name' => '',
					'PersonalAcc' => '',
					'BankName' => '',
					'BIC' => '',
					'CorrespAcc' => '',
				],
			],
			'filled with too long valuables' => [
				[
					'Name' => 'wgz!qq&9wkxpA5MYfd&gEp%tZC^u4k^Vw@u3S3eqSTNf#g9HdyV%@9gX5mBygAvjA4PK&4yZqmDHjC%cKxe!Cf3oCe%oDxEf$2TjdLNXDMtfnwVho6ewiRi#BFaZb5dJJHYiJ4#FdpXuwGPXSS4BD2%B#iT!mvFi1',
					'PersonalAcc' => 'b^&23guvwB',
					'BankName' => 'Mo@vtwbBRt8xEAud4cWzELYE2PQq5GJEYZmZwfLC@ddwYM',
					'BIC' => 'V^nV%5Rh7Dsm2tvkiktAS',
					'CorrespAcc' => 'V^nV%5Rh7Dsm2tvkiktAS',
				],
			],
			'filled incorrectly' => [
				[
					'Name' => true,
					'PersonalAcc' => true,
					'BankName' => true,
					'BIC' => true,
					'CorrespAcc' => true,
				],
			],
		];
	}

	public function getCorrectValidateFailSamples(): array
	{
		return [
			'valid' => [
				[
					'Name' => 'Name',
					'PersonalAcc' => 'PersonalAccount',
					'BankName' => 'BankName',
					'BIC' => 'BIC',
					'CorrespAcc' => 'CorrespAcc',
				],
			],
		];
	}

	/**
	 * @dataProvider getValidateFailSamples
	 *
	 * @param array $fields
	 */
	public function testValidateFail(array $fields): void
	{
		$dataGenerator = new \App\DataGenerator\FinancialTransactionsRu();

		$dataGenerator->setFields($fields);

		$result = $dataGenerator->validate();

		static::assertFalse($result->isSuccess());
	}

	/**
	 * @dataProvider getCorrectValidateFailSamples
	 *
	 * @param array $fields
	 */
	public function testThatValidateSuccess(array $fields): void
	{
		$dataGenerator = new \App\DataGenerator\FinancialTransactionsRu();

		$dataGenerator->setFields($fields);

		$result = $dataGenerator->validate();

		static::assertTrue($result->isSuccess());
	}

	/**
	 * @dataProvider getCorrectValidateFailSamples
	 *
	 * @param array $fields
	 */
	public function testGetData(array $fields): void
	{
		$dataGenerator = new \App\DataGenerator\FinancialTransactionsRu();

		$dataGenerator->setFields($fields);

		$data = $dataGenerator->getData();

		static::assertEquals('ST00012|Name=Name|PersonalAcc=PersonalAccount|BankName=BankName|BIC=BIC|CorrespAcc=CorrespAcc',
			$data);
	}
}
