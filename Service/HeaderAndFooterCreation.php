<?php

namespace Service;


use Entity\Advertisement;

interface HeaderAndFooterCreation
{
	public function addHeaderAndFooter() : Advertisement;
}