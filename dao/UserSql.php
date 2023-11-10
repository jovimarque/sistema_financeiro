<?php
session_start();
require_once('models/user.php');

class UserDAO implements daoInterfaceSql {
    public $conn;
 
    public function __construct(PDO $conn){
        $this->conn = $conn;
    }

    public function validacao($login, $senha){
        $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE usuario = :login AND senha = :senha");
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
    
        $result = $stmt->fetch(); // Obtém o resultado da consulta
    
        if ($result) {

            $_SESSION['logado'] = "SIM";
            $_SESSION['id'] = $result['id'];
            // Se houver um resultado, a validação é bem-sucedida
            return true;
        } else {

            $_SESSION['logado'] = "não";
            // Caso contrário, a validação falhou
            return false;
        }
    }
}
