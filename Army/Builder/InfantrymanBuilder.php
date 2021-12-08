<?php

namespace Army\Builder;

use Army\Armor\Armor;
use Army\WarriorTemplate;
use Army\Weapon\Helper;
use Army\Weapon\Weapon;

class InfantrymanBuilder implements WarriorBuilder
{

	private $warriorTemplate;
	public function addRightHandWeapon(?Weapon $weapon = null): WarriorBuilder
	{
		$this->warriorTemplate->set('rightHandWeapon', $weapon ?: Helper::getForge('sword')->createWeapon());
		return $this;
	}

	public function addLeftHandWeapon(?Weapon $weapon = null): WarriorBuilder
	{
		$this->warriorTemplate->set('leftHandWeapon', $weapon ?: Helper::getForge('shield')->createWeapon());
		return $this;
	}

	public function addRightHandArmor(?Armor $armor = null): WarriorBuilder
	{
		return $this;
	}

	public function addLeftHandArmor(?Armor $armor = null): WarriorBuilder
	{
		return $this;
	}

	public function addHeadArmor(?Armor $armor = null): WarriorBuilder
	{
		return $this;
	}

	public function createWarriorTemplate(): WarriorBuilder
	{
		$this->warriorTemplate = new WarriorTemplate();
		return $this;
	}

	public function getWarrior(): WarriorTemplate
	{
		return $this->warriorTemplate;
	}
}