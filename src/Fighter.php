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
    public function isAlive(Object $cible) {
        if ($this->life > $cible->life) {
            echo "💀 ".$cible->getName("👻")." is dead \n";
            echo "🏆 ".$this->getName("👺")." wins (💙".$this->life.")\n";
        } else if($this->life < $cible->life){
            echo "💀 ".$this->getName("👺")." is dead \n";
            echo "🏆 ".$cible->getName("👻")." wins (💙".$cible->life.")\n";
        } else {
            echo "match null"; 
        } 
    }
}