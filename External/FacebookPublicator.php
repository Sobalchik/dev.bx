<?php

namespace External;

class FacebookPublicator
{
	public function publicate(FacebookAdvertisement $advertisement): FacebookAdvertsimentResult
	{
		//...

		return (new FacebookAdvertsimentResult())->setTargetingName("response");
	}
}