<?php

namespace Decorator;


use Entity\Advertisement;

abstract class AbstractHeaderAndFooterCreation implements \Service\HeaderAndFooterCreation
{
	protected $header;
	protected $footer;
	protected $advertisement;
	/**
	 * @param Advertisement $advertisement
	 */
	public function __construct(string $header, string $footer, Advertisement $advertisement)
	{
		$this->header= $header;
		$this->footer= $footer;
		$this->advertisement = $advertisement;
	}
}