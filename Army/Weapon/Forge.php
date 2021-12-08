<?php

namespace Army\Weapon;


abstract class Forge
{
	abstract public function createWeapon(): Weapon;
}