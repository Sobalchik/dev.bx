<?php

namespace Army\Weapon\Melee;

use Army\Weapon;

class Sword implements Weapon\Weapon
{
	public function getWeaponName(): string
	{
		return 'Sword';
	}
}