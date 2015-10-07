<?php

class Config{
    
    private $hostServer = 'localhost/para_radio';
    private $hostDataBase = 'localhost';
    private $dataBaseName = 'paraRaio';
    private $dataBaseUser = 'root';
    private $dataBasePassword = '12345678';
    
    public function setHostServer($hostServer) {
        $this->hostServer = $hostServer;
    }

    public function setHostDataBase($hostDataBase) {
        $this->hostDataBase = $hostDataBase;
    }

    public function setDataBaseName($dataBaseName) {
        $this->dataBaseName = $dataBaseName;
    }

    public function setDataBaseUser($dataBaseUser) {
        $this->dataBaseUser = $dataBaseUser;
    }

    public function setDataBasePassword($dataBasePassword) {
        $this->dataBasePassword = $dataBasePassword;
    }

    
    public function getHostServer() {
        return $this->hostServer;
    }

    public function getHostDataBase() {
        return $this->hostDataBase;
    }

    public function getDataBaseName() {
        return $this->dataBaseName;
    }

    public function getDataBaseUser() {
        return $this->dataBaseUser;
    }

    public function getDataBasePassword() {
        return $this->dataBasePassword;
    }

    public function getDns() {
        return "mysql:host=$this->hostDataBase;dbname=$this->dataBaseName";
    }


}
