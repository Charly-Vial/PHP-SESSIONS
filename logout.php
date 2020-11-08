<?php
require_once 'inc/head.php';

session_unset();
//sleep(2);
//echo '<h1>Vous êtes déconnecté !<h1/>';
header('Location: login.php');

require_once 'inc/foot.php';


