<?php
require_once("config.php");
require_once("sql.php"); 
//$root = new Usuario();
//$root->loadById(3);

//echo $root;

//$lista = Usuario::getList();
//echo json_encode($lista);

//$search = Usuario::search("ca");

//echo json_encode($search);

$usuario = new Usuario();
$usuario->login("douglas", "12345");
echo $usuario;



?>