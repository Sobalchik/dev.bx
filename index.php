<?php

spl_autoload_register(function ($class) {
	include __DIR__ . '/' . str_replace("\\", "/",  $class) . '.php';
});


// $advertisement = (new \Entity\Advertisement())
// 	->setBody("test")
// 	->setTitle("test")
// 	->setDuration(10);
//
// $calculator = new \Service\AdvCalculator($advertisement);
// $calculator->applyCost();
//
// $calculator = new \Decorator\VatCostDecorator($calculator);
// var_dump($calculator->applyCost()->getTotalCost());

$FacebookProvider = new \Service\FacebookProvider(new \Service\Formatting\PlainTextFormatter());

$FacebookProvider->publicate((new \Entity\Advertisement())
	->setBody('test1')
	->setTitle('test2')
	->setDuration(10)
	);