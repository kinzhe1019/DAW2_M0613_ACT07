<?php
/*
    ACTIVITAT 7 · Sessions i cookies
    esborra.php: esborrar la cookie ultimaVisita.

    PART 2 · Pas 6 · Esborrar una cookie
    - No hi ha cap funció per esborrar una cookie.
    - Es torna a posar amb una data de caducitat que ja ha passat i el navegador la llença.
    - Després a cookie.php torna a sortir "Encara no hi ha cap cookie."
*/

// el mateix nom de la cookie, el valor buit i la caducitat fa una hora (time() - 3600)
setcookie('ultimaVisita', '', time() - 3600);

// l'enllac per tornar a cookie.php i comprovar que ja no hi es
echo 'Cookie esborrada. <a href="cookie.php">Torna al comptador</a>';
