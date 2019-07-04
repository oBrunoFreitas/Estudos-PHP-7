<?php 

require_once 'config.php';

$cadastro = new Cadastro();

$cadastro->setName("Bruno");
$cadastro->setEmail("bruno@gmail.com");
$cadastro->setPass("supersenha123");

echo $cadastro;