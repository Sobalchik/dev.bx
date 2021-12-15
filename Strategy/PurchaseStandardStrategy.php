<?php

namespace Strategy;

use Entity\Service;

class PurchaseStandardStrategy implements PurchaseStrategy
{
	public function purchase(): Service
	{
		// take money
		$service = new Service();

		$service->setIsStandard(true);
		$service->setActivatedUntil((new \DateTime())->modify("+ 30 days"));
		$service->setType(Service::TYPES['standard']);
		\Event\EventBus::getInstance()->log((new \DateTime()),$service->getType());
		return $service;
	}
}