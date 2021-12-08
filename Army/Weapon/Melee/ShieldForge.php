<?php

namespace Army\Weapon\Melee;

use Army\Weapon\Forge;
use Army\Weapon\Weapon;

class ShieldForge extends Forge
{
	public function createWeapon(): Weapon
	{
		return new Shield();
	}
}