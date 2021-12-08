<?php

namespace Army\Weapon\Melee;

use Army\Weapon;

class Shield implements Weapon\Weapon
{
	public function getWeaponName(): string
	{
		return 'Shield';
	}
}