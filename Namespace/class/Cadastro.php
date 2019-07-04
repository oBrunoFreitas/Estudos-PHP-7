<?php 

class Cadastro
{
    
    private $name;
    private $email;
    private $pass;

    public function getName():string
    {
        return $this->name;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function getPass():string
    {
        return $this->pass;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function __toString()
    {
        return json_encode(array(
            "nome"=>$this->getName(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getPass()
        ));
    }
}