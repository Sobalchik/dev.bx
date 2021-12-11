<?php

namespace Decorator;


use Entity\Advertisement;

class HeaderAndFooterCreation extends AbstractHeaderAndFooterCreation
{
	public function addHeaderAndFooter() : Advertisement
	{
		$this->advertisement->setBody(" <h1>{$this->header}</h1> ".($this->advertisement->getBody()." <h4>{$this->footer}</h4>"));
		return $this->advertisement;
	}
}