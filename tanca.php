<?php
// per poder tancar la sessio primer l'he d'obrir, per aixo session_start() va primer
session_start();
/*
    ACTIVITAT 7 · Sessions i cookies
    tanca.php: tancar la sessió.

    PART 3 · Pas 5 · Tancar la sessió
    - Buido les dades i destrueixo la sessió.
    - Després a sessio.php el comptador torna a 1 i el fitxer sess_ d'abans
      ja no hi és a la carpeta de sessions.
*/

$_SESSION = [];        // buidem les dades
session_destroy();     // destruïm la sessió al servidor

// l'enllac per tornar a sessio.php i comprovar que torna a comencar per 1
echo 'Sessió tancada. <a href="sessio.php">Torna al comptador</a>';
