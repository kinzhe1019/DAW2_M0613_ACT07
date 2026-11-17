<?php
/*
    ACTIVITAT 7 · Sessions i cookies
    cookie.php: guardar l'hora de l'última visita en una cookie.

    PART 2 · Les cookies
    - La cookie la guarda el navegador (l'ordinador de l'usuari). El servidor
      només la demana i després la rep de tornada a cada petició.
    - La primera vegada surt "Encara no hi ha cap cookie." i a partir de la segona
      surt l'hora, però l'hora de la vegada anterior, no la d'ara.
    - setcookie() no guarda res al moment: envia una ordre al navegador amb la resposta.
      Per això la cookie no està a $_COOKIE fins a la petició següent.
*/

// Demanem al navegador que es guardi l'hora, durant una hora
// Ara podem utilitzar les variables amb camelCase, més endavant, amb les BBDD, farem servir
// les variables amb guió baix
// time() es l'hora d'ara en segons, +3600 son 60 minuts
setcookie('ultimaVisita', date('H:i:s'), time() + 3600);

// Si existeix la cookie ultimaVisita
// sense l'isset la primera vegada surt l'avis Undefined array key "ultimaVisita"
if (isset($_COOKIE['ultimaVisita'])) {
    echo 'Hi eres a les ' . $_COOKIE['ultimaVisita'];
} else {
    echo 'Encara no hi ha cap cookie.';
}

/*
    PART 2 · Pas 5 · Trenca-ho a posta
    Ho he provat posant echo 'Hola'; just abans del setcookie() (línia 19) i al log surt aquest avís:

    PHP Warning:  Cannot modify header information - headers already sent by
    (output started at C:\wamp64\www\M0613\CLASE\ACT07\cookie.php:19)
    in C:\wamp64\www\M0613\CLASE\ACT07\cookie.php on line 20

    Compte: amb el php.ini que porta el WAMP no surt, perquè té output_buffering = 4096
    i el php s'espera a enviar el text. Posant output_buffering = Off sí que surt.

    Les cookies van a les capçaleres de la resposta, i les capçaleres van abans que el
    contingut. Si ja he escrit alguna cosa a la pàgina és tard per enviar-les.
    Per això setcookie() sempre va abans de qualsevol echo, HTML o espai.
    Ja he tret l'echo de la prova.
*/
