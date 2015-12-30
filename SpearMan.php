<?php
namespace Strategy;


class SpearMan extends Warrior
{
    public function __construct()
    {
        $this->weapon = new Spear();
    }

    public function talk()
    {
        return 'Spearman attacks';
    }
}