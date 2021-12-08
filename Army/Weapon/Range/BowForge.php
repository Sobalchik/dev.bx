<?php

namespace Army\Weapon\Range;

use Army\Weapon\Forge;
use Army\Weapon\Weapon;

class BowForge extends Forge
{
	public function createWeapon(): Weapon
	{
		return new Bow();
	}
}