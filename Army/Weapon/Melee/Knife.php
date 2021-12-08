<?php

namespace Army\Weapon\Melee;

use Army\Weapon;

class Knife implements Weapon\Weapon
{
	public function getWeaponName(): string
	{
		return 'Knife';
	}
}