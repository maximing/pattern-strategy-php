<?php
use Strategy\SwordMan;
use Strategy\BowMan;
use Strategy\SpearMan;
use Strategy\Bow;
use Strategy\Spear;
use Strategy\Sword;
require_once('IWeapon.php');
require_once('Warrior.php');
require_once('Weapon.php');
require_once('Sword.php');
require_once('Spear.php');
require_once('Bow.php');
require_once('SwordMan.php');
require_once('BowMan.php');
require_once('SpearMan.php');

$warrior = new SwordMan();
echo $warrior->talk();
echo $warrior->attack();
$warrior->setWeapon(new Bow());
echo $warrior->attack();
$warrior->setWeapon(new Spear());
echo $warrior->attack();

$warrior = new BowMan();
echo $warrior->talk();
echo $warrior->attack();
$warrior->setWeapon(new Sword());
echo $warrior->attack();
$warrior->setWeapon(new Spear());
echo $warrior->attack();

$warrior = new SpearMan();
echo $warrior->talk();
echo $warrior->attack();
$warrior->setWeapon(new Sword());
echo $warrior->attack();
$warrior->setWeapon(new Bow());
echo $warrior->attack();