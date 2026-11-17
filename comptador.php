<?php
/*
    ACTIVITAT 7 · Sessions i cookies
    comptador.php: el comptador que no funciona.

    PART 1 · El servidor no et recorda
    - Recarrega la pàgina cinc vegades seguides amb F5.
    - Les cinc vegades surt "Has vist aquesta pàgina 1 vegades."

    No és un error del codi: cada vegada que recarrego el servidor executa el fitxer
    sencer des del principi. La variable $visites neix a la primera línia i mor quan
    la pàgina acaba, així que sempre torna a començar per 0.
*/

// cada peticio es nova per al servidor, aixi que aqui sempre val 0
$visites = 0;

// li sumo 1, per tant sempre acaba valent 1
$visites++;

// el punt enganxa el text amb la variable
echo 'Has vist aquesta pàgina ' . $visites . ' vegades.';
