<?php 

namespace Clientes;

class Cadastro extends \Cadastro
{
    
    public function registrarVenda()
    {
        echo "venda registrada para o cliente, ". $this->getName();
    }
}