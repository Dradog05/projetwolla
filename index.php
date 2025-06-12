<?php
session_start();
$_SESSION['login_id']=0;
$_SESSION['login']="?";
header('Location: app/router/router.php?action=');
?>