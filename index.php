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
nextLine();
echo $warrior->attack();
nextLine();
$warrior->setWeapon(new Bow());
echo $warrior->attack();
nextLine();
$warrior->setWeapon(new Spear());
echo $warrior->attack();
nextLine();
nextLine();

$warrior = new BowMan();
echo $warrior->talk();
nextLine();
echo $warrior->attack();
nextLine();
$warrior->setWeapon(new Sword());
echo $warrior->attack();
nextLine();
$warrior->setWeapon(new Spear());
echo $warrior->attack();
nextLine();
nextLine();

$warrior = new SpearMan();
echo $warrior->talk();
nextLine();
echo $warrior->attack();
nextLine();
$warrior->setWeapon(new Sword());
echo $warrior->attack();
nextLine();
$warrior->setWeapon(new Bow());
echo $warrior->attack();
nextLine();
nextLine();


function nextLine() {
    echo '<br>';
}