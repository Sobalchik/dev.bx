<?php

spl_autoload_register(function ($class) {
	include __DIR__ . '/' . str_replace("\\", "/",  $class) . '.php';
});


 $advertisement = (new \Entity\Advertisement())
 	->setBody("Body")
 	->setTitle("Title")
 	->setDuration(10);

// $calculator = new \Service\AdvCalculator($advertisement);
// $calculator->applyCost();
//
// $calculator = new \Decorator\VatCostDecorator($calculator);
// var_dump($calculator->applyCost()->getTotalCost());

$FacebookProvider = new \Service\FacebookProvider(new \Service\Formatting\PlainTextFormatter());

$FacebookProvider->publicate($advertisement);
echo "\n------------\n";
$decorator = new \Decorator\HeaderAndFooterCreation('Внимание','Ждем вас',$advertisement);;
$FacebookProvider->publicate($decorator->addHeaderAndFooter());


