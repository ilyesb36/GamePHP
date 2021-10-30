<?php

class Guerrier extends Personnage
{
public function __construct($name)
{
    $strength = rand(20,40);
    $defense = rand(10,19);
    parent::__construct($name, $strength, $defense);

}
}