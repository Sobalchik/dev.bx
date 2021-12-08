<?php
namespace Army\Weapon;

use Army\Weapon\Melee\KnifeForge;
use Army\Weapon\Melee\ShieldForge;
use Army\Weapon\Melee\SpearForge;
use Army\Weapon\Melee\SwordForge;
use \Army\Weapon\Range\BowForge;

class Helper
{
	public static function getForge(string $type)
	{
		switch($type)
		{
			case 'bow':
				return new BowForge();
			case 'knife':
				return new KnifeForge();
			case 'sword':
				return new SwordForge();
			case 'shield':
				return new ShieldForge();
			case 'spear':
				return new SpearForge();
		}
	}
}