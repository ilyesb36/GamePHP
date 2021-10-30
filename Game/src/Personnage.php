<?php
class Personnage  {
    private $name;
    private $health;
    private $strength;
    private $defense;
    private $state;

    public function __construct($name, $strength, $defense)
    {
        $this->setName($name);
        $this->setHealth(100);
        $this->setStrength($strength);
        $this->setDefense($defense);
        $this->setState(false);
    }

    public function Attaque(Personnage $p1){
        if ($this -> state == true)
        {
            print('tu dors gros...');
        }
        else
        {
            $damage = $this->getStrength()-$p1->getDefense();
            if ($damage > 0){
                if($damage>$p1->getHealth()){
                    $p1->setHealth(0);
                }
                else {
                    $p1->setHealth($p1.$this->getHealth()-$damage);
                }
            }
            else {
                print ('Tu fais aucun dégats bg');

            }
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (is_string($name)) {
            $this->name=$name;
        }
        else {
            return false;
        }
    }


    public function getHealth()
    {
            return $this->health;
    }

    public function setHealth($health)
    {
        if (is_int($health)) {
            $this->health=$health;
        }
        else {
            return false;
        }
    }

    public function getStrength()
    {
            return $this->strength;
    }

    public function setStrength($strength)
    {
        if (is_int($strength)) {
            $this->strength=$strength;
        }
        else {
            return false;
        }
    }

    public function getDefense()
    {
            return $this->defense;
    }

    public function setDefense($defense)
    {
        if (is_int($defense)) {
            $this->defense=$defense;
        }
        else {
            return false;
        }
    }

    public function getState()
    {
            return $this->state;
    }

    public function setState($state)
    {
        if (is_bool($state)) {
            $this->state=$state;
        }
        else {
            return false;
        }
    }

}
?>