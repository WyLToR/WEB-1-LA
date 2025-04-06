<?php
//define('DB_HOST', 'localhost');
define('DB_HOST', 'localhost');
define('DB_NAME', 'web-1-la');

define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DSN', 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME);

$ablakcim = array(
    'cim' => 'Nyilvántartás Kft.',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
    'cim' => 'Munkaidő nyílvántartás',
    'motto' => ''
);

$lablec = array(
    'copyright' => 'Copyright ' . date("Y") . '.',
    'ceg' => 'Munkaidő Kft.'
);

$oldalak = array(
    '/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1, 1)),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1, 1)),
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(1, 1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1, 0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0, 1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0, 0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0, 0))
);

$hiba_oldal = array('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>
