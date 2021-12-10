<?php

namespace Service;

use Adapter\VkAdvertisementProviderAdapter;
use Entity\Advertisement;
use Entity\AdvertisementResponse;

class VkProvider extends AbstractAdvertisementProvider
{

	public function publicate(Advertisement $advertsement): AdvertisementResponse
	{
		$advertsement->setBody($this->formatter->format($advertsement->getBody()));
		echo $advertsement->getBody();
		return (new VkAdvertisementProviderAdapter())->publicate($advertsement);
	}
}