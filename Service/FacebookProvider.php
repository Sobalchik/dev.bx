<?php

namespace Service;

use Entity\Advertisement;
use Entity\AdvertisementResponse;
use Adapter\FacebookAdvertisementProviderAdapter;

class FacebookProvider extends AbstractAdvertisementProvider
{

	public function publicate(Advertisement $advertsement): AdvertisementResponse
	{
		$advertsement->setBody($this->formatter->format($advertsement->getBody()));
		echo $advertsement->getBody();
		return (new FacebookAdvertisementProviderAdapter())->publicate($advertsement);
	}
}
