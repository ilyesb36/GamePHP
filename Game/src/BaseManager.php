<?php
class BaseManager
{
    protected PDO $bdd;

    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }
}