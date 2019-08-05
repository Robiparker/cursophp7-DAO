<?php

require_once("config.php");

$Parker = new Usuario();

$Parker->loadbyId(2);

echo $Parker;

?>