<?php

namespace Helper;

class Subscriber
{
	public static function onUserAdd($data)
	{
		echo $data->getId() . PHP_EOL;
	}

	public static function onUserUpdate($data)
	{
		echo $data->getName() . PHP_EOL;
	}

	public static function onServicePurchase($service)
	{
		$log = $service->getType() . " was bought at " . (new \DateTime())->format('Y-m-d H:i:s') . "\n";
		file_put_contents('log.txt', $log, FILE_APPEND);
	}

}