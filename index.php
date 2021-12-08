<?php

use Army\Archer;

spl_autoload_register(function ($class)
{
	include __DIR__ . '/' . str_replace("\\", "/", $class) . '.php';
});
//
//$armyA = [];
//$armyB = [];
//
//for ($i = 0; $i < 100; $i++)
//{
//	$armyA[] = rand(0, 1) > 0 ? new \Army\Archer() : new \Army\Horseman();
//	$armyB[] = rand(0, 1) > 0 ? new \Army\Archer() : new \Army\Horseman();
//}
//
// $calculatePower = function ($sum, $warrior)
// {
// 	$sum += $warrior->power();
// 	return $sum;
// };
//
//$armyPowerA = array_reduce($armyA, $calculatePower);
//$armyPowerB = array_reduce($armyB, $calculatePower);
//
//echo $armyPowerA, PHP_EOL;
//echo $armyPowerB;
//
//$armyA = [];
//$armyB = [];
//
// $forges = [
// 	'archer',
// 	'horseman',
// ];
//
//for ($i = 0; $i < 100; $i++)
//{
//	$armyA[] = \Army\Helper::getForge($forges[rand(0, 1)])->createWarrior();
//	$armyB[] = \Army\Helper::getForge($forges[rand(0, 1)])->createWarrior();
//}
//$armyPowerA = array_reduce($armyA, $calculatePower);
//$armyPowerB = array_reduce($armyB, $calculatePower);
//
//echo $armyPowerA, PHP_EOL;
//echo $armyPowerB;
//
//$romeFactory = new \Army\Rome\RomeArmyForge();
//var_dump($romeFactory->createArcher());
//var_dump($romeFactory->createHorseman());
//
//$barbarianFactory = new \Army\Barbarian\BarbarianArmyForge();
//var_dump($barbarianFactory->createArcher());
//var_dump($barbarianFactory->createHorseman());

$sword = \Army\Weapon\Helper::getForge('sword')->createWeapon();

$archer = new \Army\Builder\ArcherBuilder();
\Army\Builder\Director::build($archer,$sword);
$archer->addLeftHandWeapon($sword);
var_dump($archer);

$horseman = new \Army\Builder\HorsemanBuilder();
var_dump(\Army\Builder\Director::build($horseman));

$infantryman = new \Army\Builder\InfantrymanBuilder();
var_dump(\Army\Builder\Director::build($infantryman));