<?php
require __DIR__.'/src/Fighter.php';

$adnen = new Fighter("adnen", 20, 6);
$mohamed = new Fighter("mohamed", 11, 13);

$i = 0;
do {
    echo "🕛 round ".$i++."\n\n";
    $adnen->fight($mohamed);
    echo  $adnen->getName("👺")." 🔪 ".$mohamed->getName("👻")." 💙 ".$mohamed->getName("👻").": ".$mohamed->getLife()."\n\n";  
    $mohamed->fight($adnen);
    echo $mohamed->getName("👻")." 🔪 ".$adnen->getName("👺")." 💙 ".$adnen->getName("👺").": ".$adnen->getLife()."\n\n";    
}while(($mohamed->getLife() > 0) && ( $adnen->getLife() > 0 ));
/* resultat du combat */
$adnen->isAlive($mohamed);

?>