<?php 

require_once 'config.php';

use Clientes\Cadastro;

$cadastro = new Cadastro();

$cadastro->setName("Bruno");
$cadastro->setEmail("bruno@gmail.com");
$cadastro->setPass("supersenha123");

$cadastro->registrarVenda();