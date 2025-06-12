<!-- ----- debut config -->
<?php
global $dsn, $username, $password;
$dsn = 'mysql:dbname=vigneaue;host=localhost;charset=utf8';
$username = 'vigneaue';
$password = 'u9BCMHj0';
// Utile pour le débugage car c'est un interrupteur pour les echos et print_r.
if (!defined('DEBUG')) {
    define('DEBUG', FALSE);
}

// ===============
// Configuration de la base de données sur dev-isi
$dsn = 'mysql:dbname=vigneaue;host=localhost;charset=utf8';
$username = 'vigneaue';
$password = 'u9BCMHj0';

if (!defined('LOCAL')) {
    define('LOCAL', False);
}
if (LOCAL) {
    // Configuration de la base de données sur localhost
    $dsn = 'mysql:dbname=CAVE;host=localhost;charset=utf8';
    $username = 'vigneaue';
    $password = 'u9BCMHj0';
}
 
// chemin absolu vers le répertoire du projet SUR DEV-ISI 
$root = dirname(dirname(__DIR__)) . "/";


if (DEBUG) {
 echo ("<ul>");
 echo (" <li>dsn = $dsn</li>");
 echo (" <li>username = $username</li>");
 echo (" <li>password = $password</li>");
 echo ("<li>---</li>");
 echo (" <li>root = $root</li>");

 echo ("</ul>");
}
?>

<!-- ----- fin config -->