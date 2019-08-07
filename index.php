<?php 

require_once("config.php");

//Carrega um usuário
//$Parker = new Usuario();
//$Parker->loadbyId(2);
//echo $Parker;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("pa");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("Parker", "Ro243618");

echo $usuario;
/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/
/*
//Alterar um usuário
$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;
*/

//$usuario = new Usuario();

//$usuario->loadById(7);

//$usuario->delete();

//echo $usuario;
 ?>