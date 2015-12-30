<?php
namespace Strategy;


class BowMan extends Warrior
{
    public function __construct()
    {
        $this->weapon = new Bow();
    }

    public function talk()
    {
        return 'Bowman attacks';
    }
}