<?php

namespace Adapter;

use Entity\Advertisement;
use Entity\AdvertisementResponse;
use External\FacebookAdvertisement;
use External\FacebookPublicator;

class FacebookAdvertisementProviderAdapter implements \Service\AdvertisementProviderInterface
{

	public function publicate(Advertisement $advertisement): AdvertisementResponse
	{
		$FacebookAdvertisement = new FacebookAdvertisement();

		if (!$advertisement->getTitle())
		{
			$advertisement->setTitle("default");
		}
		$FacebookAdvertisement
			->setTitle($advertisement->getTitle())
			->setMessageBody($advertisement->getBody());

		$result = (new FacebookPublicator())->publicate($FacebookAdvertisement);

		return (new AdvertisementResponse())->setTargeting($result->getTargetingName());
	}
}