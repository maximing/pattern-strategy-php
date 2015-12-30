<?php
namespace Strategy;


class SwordMan extends Warrior
{
    public function __construct()
    {
        $this->weapon = new Sword();
    }

    public function talk()
    {
        return 'Swordman attacks';
    }
}