<?php

class Mage extends Personnage
{
public function __construct($name)
{
    $strength = random_int(5,10);
    parent::__construct($name, $strength, 0);
}

    function sleep(Personnage $p1)
    {
        if ($p1->getState() == true)
        {
            print("il dort déjà t'abuses");
        }

        $p1 -> setState(true);
    }

}