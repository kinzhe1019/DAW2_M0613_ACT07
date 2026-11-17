<?php
// Aquesta línia ha de ser la PRIMERA de totes, sempre
session_start();
/*
    ACTIVITAT 7 · Sessions i cookies
    sessio.php: el comptador que sí que funciona, amb sessió.

    PART 3 · Les sessions
    - Les dades es queden al servidor, en un fitxer sess_ seguit de l'ID de sessió.
    - Al navegador només hi va l'ID, dins de la cookie PHPSESSID.
    - El valor de PHPSESSID (F12 > Application > Cookies) és el mateix que l'ID de
      sessió que surt a la pàgina.
    - Dins del fitxer sess_ hi ha una cosa com visites|i:4; (i vol dir enter).
    - En una finestra d'incògnit el comptador torna a 1, perquè no porta cap PHPSESSID
      i el servidor li obre una sessió nova.
*/

// la primera vegada $_SESSION['visites'] no existeix.
// el ?? diu "si no hi es, val 0", aixi li puc sumar 1 sense que php es queixi
$_SESSION['visites'] = ($_SESSION['visites'] ?? 0) + 1;

// el numero de visites, que ara si que puja
echo 'Visites: ' . $_SESSION['visites'] . '<br>';

// session_id() torna el numero de la sessio, el mateix que hi ha a la cookie PHPSESSID
echo 'ID de sessio: ' . session_id() . '<br>';

// session_save_path() diu a quina carpeta del servidor es guarden els fitxers sess_
echo 'Carpeta de sessions: ' . session_save_path();
