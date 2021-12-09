<?php

class Fighter
{ 
    public const MAX_LIFE = 100;
    private $name;
    private $strength;
    private $dexterity;
    private $life;
    public function __construct(string $name=null, int $strength=null, int $dexterity=null)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->life = self::MAX_LIFE;
    }
    public function getName(string $emoji)
    {
        return $emoji." ".$this->name;
    }
    public function getLife()
    {
        return $this->life;
    }
    public function fight(Object $cible) : int
    {
        $pointDegat = rand(1, $this->strength);
        if (($pointDegat - $cible->dexterity) > 0) {
            $cible->life = $cible->life - ($pointDegat - $cible->dexterity);  
            if ($cible->life < 0) {
              $cible->life = 0;
            }    
        } 
        else {
            $cible->life = $cible->life;
        }
        return $cible->life;
    }
    public function isAlive() {
      if ($this->life > 0) {
          return true;
      }else{
          return false;
      }
    }
}