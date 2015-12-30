<?php
use Strategy\ {
    Spear,
    Sword,
    Bow,
    SwordMan,
    SpearMan,
    BowMan
};

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
/*
Итог:
Мечник атакует
1000
300
1500
*/

$warrior = new BowMan();
echo $warrior->talk();
echo $warrior->attack();
$warrior->setWeapon(new Sword());
echo $warrior->attack();
$warrior->setWeapon(new Spear());
echo $warrior->attack();
/*
Итог:
Лучник атакует
300
1000
1500
*/

$warrior = new SpearMan();
echo $warrior->talk();
echo $warrior->attack();
$warrior->setWeapon(new Sword());
echo $warrior->attack();
$warrior->setWeapon(new Bow());
echo $warrior->attack();
/*
Итог:
Копейщик атакует
1500
1000
300
*/