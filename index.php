<?php
require_once("config.php");
require_once("sql.php"); 

/*carrega um usuario
$root = new Usuario();
//$root->loadById(3);

//echo $root;
 carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//$search = Usuario::search("ca");

//echo json_encode($search);
carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("douglas", "12345");
echo $usuario;
carrega um novo usuario

$aluno = new Usuario("gubebegala","40028922");
$aluno->insert();
echo $aluno;
*/
$usuario = new Usuario();
$usuario->loadById(21);
$usuario->update("gugudaocu", "241124");
echo $usuario;






?>