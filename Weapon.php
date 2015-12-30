<?php
namespace Strategy;

abstract class Weapon implements IWeapon
{
    const damage = 1;
    public function getDamage()
    {
        return static::damage;
    }
} 