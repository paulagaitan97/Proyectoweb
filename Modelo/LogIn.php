<?php
class LogIn {

    private $nick;
    private $password;

    public function __construct($nick, $password) {
        $this->nick = $nick;
        $this->password = $password;
    }

    public function getNick() {
        return $this->nick;
    }

    public function setNick($nick) {
        $this->nick = $nick;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

}

?>