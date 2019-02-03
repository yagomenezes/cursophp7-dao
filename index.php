<?php

require_once("config.php");

//Carrega um usuário
/*
$root = new Usuario();
$root->loadById(3);

echo $root;
*/

//Carrega uma lista de usuários
/*
$lista = Usuario::getList();

echo json_encode($lista);
*/

//Carrega uma lista de usuários buscando pelo login
/*
$search = Usuario::search("jo");

echo json_encode($search);
*/

//Carrega usuário usando o login e a senha
/*
$usuario = new Usuario();
$usuario->login("root", "12345");;

echo $usuario;
*/

$aluno = new Usuario("aluno2", "@alun0");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;

?>