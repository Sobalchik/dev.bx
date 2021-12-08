<?php

namespace Army\Weapon\Melee;

use Army\Weapon;

class Spear implements Weapon\Weapon
{
	public function getWeaponName(): string
	{
		return 'Spear';
	}
}