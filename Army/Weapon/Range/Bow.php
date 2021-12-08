<?php

namespace Army\Weapon\Range;

use Army\Weapon\Weapon;
class Bow implements Weapon
{
	public function getWeaponName(): string
	{
		return 'Bow';
	}
}