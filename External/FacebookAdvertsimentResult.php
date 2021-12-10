<?php

namespace External;

class FacebookAdvertsimentResult
{
	public $targetingName;

	/**
	 * @return string
	 */
	public function getTargetingName(): string
	{
		return $this->targetingName;
	}

	/**
	 * @param string $targetingName
	 * @return FacebookAdvertsimentResult
	 */
	public function setTargetingName(string $targetingName): FacebookAdvertsimentResult
	{
		$this->targetingName = $targetingName;
		return $this;
	}

}