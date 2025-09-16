<?php
require_once("config.php");
require_once("sql.php"); 
$root = new Usuario();
$root->loadById(3);

echo $root;




?>