<?php


class User
{

    public $login;
    public $senha;

}

interface daoInterfaceSql {

    public function validacao($login,$senha);
        
}