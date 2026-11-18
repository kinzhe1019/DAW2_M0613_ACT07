<?php
// session_start() a la primera linia, abans fins i tot del require de config.php.
// si la poso despres del require de header.php surt l'avis de headers already sent
session_start();
/*
    ACTIVITAT 7 · Sessions i cookies
    visites.php: el comptador de sessions amb el disseny de la botiga.

    AMPLIACIÓ
    - He copiat config.php, funcions.php, header.php, footer.php i estils.css
      de l'Activitat 6.
    - La pàgina té el require_once de config.php, el títol, el header i el footer.
    - Entremig mostra quantes vegades ha visitat la pàgina l'usuari, amb la sessió.
*/

// la configuracio amb require_once, igual que a l'activitat 6
require_once 'config.php';

// sumo 1 a les visites. el ?? posa 0 la primera vegada que no existeix.
// faig servir un nom diferent que a sessio.php perque compti nomes aquesta pagina
$_SESSION['visitesBotiga'] = ($_SESSION['visitesBotiga'] ?? 0) + 1;

// el titol ABANS del require del header, si no el header no el veu
$titolPagina = 'Les teves visites';
require 'header.php';
?>
    <h2>Les teves visites</h2>
    <!-- el numero surt de la sessio, aixi que puja cada vegada que recarrego -->
    <div class="ok">
        <p>Has visitat aquesta pàgina <?= $_SESSION['visitesBotiga'] ?> vegades.</p>
    </div>
    <!-- tanca.php buida la sessio i el comptador torna a comencar -->
    <a class="tornar" href="tanca.php">Tancar la sessió</a>
<?php
// el peu tanca el main, el body i el html que ha obert el header
require 'footer.php';
