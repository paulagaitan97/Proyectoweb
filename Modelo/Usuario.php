<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tipoPersonal
 *
 * @author 
 */
class Usuario {
    //put your code here
    
    private $nickname;
    private $password;
    private $tipo;
   

    function __construct($nickname, $password, $tipo) {
        $this->nickname = $nickname;
        $this->password = $password;
        $this->tipo = $tipo;
    }

    function getNickname() {
        return $this->nickname;
    }

    function getPassword() {
        return $this->password;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setNickname($nickname) {
        $this->nickname = $nickname;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

}
