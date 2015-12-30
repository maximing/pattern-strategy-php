<?php
namespace Strategy;


abstract class Warrior
{
    protected $weapon;

    abstract public function talk();

    public function setWeapon(IWeapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function attack()
    {
        return $this->weapon->getDamage();
    }
} 