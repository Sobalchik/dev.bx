<?php

namespace Army\Weapon\Melee;

use Army\Weapon\Forge;
use Army\Weapon\Weapon;

class SpearForge extends Forge
{
	public function createWeapon(): Weapon
	{
		return new Spear();
	}
}