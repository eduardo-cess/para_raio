<?php

/**
 * Description of Model
 *
 * @author carlos
 */

include_once '../config/Config.php';

class Dao extends PDO{
    
    protected $sql;
    private $query;
    private $pdo;
    private $stmt;
    private $increment;
    
    public function __construct() {
        try {
            $config = new Config();
            $this->pdo = new PDO($config->getDns(), $config->getDataBaseUser(), $config->getDataBasePassword());
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    public function getDao()
	{
		return $this->pdo;
	}
	
	public function setStmt($stmt)
	{
		$this->stmt = $stmt;	
	}
	
	public function getStmt()
	{
		return $this->stmt;
	}
	
	protected function setParam($dado)
	{
		$this->getStmt()->bindParam(++$this->increment,$dado);
	}
	
	
	/**
	 * @author: Vitor Castro
	 * @desc: Executa query 
	 * @param: $this->sql
	 * @since: 09/04/2009	
	 */
	public function get()
	{		
		return $this->getDao()->query($this->sql);
	}
	
	public function prepare()
	{
		$this->setStmt($this->getDao()->prepare($this->sql));
		$this->increment = 0;
	}
	
	public function executeStmt()
	{
		try
		{
			$result =  $this->getStmt()->execute();	
			$this->getStmt()->closeCursor();
			return $result;
		
		}catch (PDOException $e) {
			echo 'SQL ERROR: ',$e->getMessage();
		}
		
	}
	
	public function execute()
	{
		return $this->getDao()->execute();
	}

	/**
	 * @author Vitor Castro
	 * @desc Retorna UM Objeto apartir da SQL encapsulada 
	 * @param $this->sql
	 * @since 27/07/2009
	 */
	public function fetchStmtObj($class)
	{
		try
		{
			$this->getStmt()->execute();
			
			$result = $this->getStmt()->fetchObject($class);

			$this->getStmt()->closeCursor();
			
			return $result;
		}
		catch (PDOException $e) {
			echo 'SQL ERROR: ',$e->getMessage();
			echo 'ERRNO: ',$e->getCode();		}
	}
	
	/**
	 * @author Vitor Castro <vitor@ufpa.br>
	 * @desc Retorna um vetor de objeto de uma determinada classe
	 * @return
	 * @since 27/11/2009
	 * @uses
	 */
	public function fetchAllStmtObj($class)
	{
		try {
			$this->getStmt()->execute();
			$result = array();
			
			for ($i = 0; $rowset = $this->getStmt()->fetchObject($class); $i++)
				$result[] = $rowset; 

			
			$this->getStmt()->closeCursor();

			return $result;
		}
		catch (PDOException $e) {
			echo 'SQL ERROR: ',$e->getMessage();
			echo 'ERRNO: ',$e->getCode();
		}
	}
	
	public function fetchStmt()
	{
		$this->getStmt()->execute();
		
		$result = $this->getStmt()->fetch();
		
		$this->getStmt()->closeCursor();
				
		return $result;
	}
	
	public function fetchAllStmt()
	{
		try { 
			$this->getStmt()->execute();
			$result = array();
			
			for ($i = 0; $rowset = $this->getStmt()->fetch(); $i++)
				$result[] = $rowset;
	
			$this->getStmt()->closeCursor();
							
			return $result;
		}
		catch (PDOException $e) {
			echo 'SQL ERROR: ',$e->getMessage();
			echo 'ERRNO: ',$e->getCode();		}
	}

	/**
	 * @author Vitor Castro
	 * @desc Retorna a Chave Prim�ria da SQL query
	 * @param $this->sql
	 * @since 09/04/2009
	 */
	public function queryIdStmt()
	{
		$this->executeStmt();
		return $this->getDao()->lastInsertId();
	}
	
	public function __destruct()
	{
		$this->pdo = null;
	}
    
}
