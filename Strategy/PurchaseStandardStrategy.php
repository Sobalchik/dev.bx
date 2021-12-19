<?php

namespace Strategy;

use Entity\Service;
use Event\EventBus;

class PurchaseStandardStrategy implements PurchaseStrategy
{
	public function purchase(): Service
	{
		// take money
		$service = new Service();

		$service->setIsStandard(true);
		$service->setActivatedUntil((new \DateTime())->modify("+ 30 days"));
		$service->setType(Service::TYPES['standard']);
		return $service;
	}
}