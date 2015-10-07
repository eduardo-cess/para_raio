<?php

/**
 * Description of Model
 *
 * @author carlos
 */

include_once '../config/Config.php';

class Dao extends PDO{
    
    //protected $sql;
    //protected $query;
    protected $pdo;
    protected $stmt;
   // protected $increment;
    
    public function __construct() {
        try {
            $config = new Config();
            $this->pdo = new PDO($config->getDns(), $config->getDataBaseUser(), $config->getDataBasePassword());
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    
    
}
