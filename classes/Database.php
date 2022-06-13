<?php


/**
 * Dit is de database class
 */

 require '../config/config.php';

 class database
 {
     // Properties
     private $dbHost = DB_HOST;
     private $dbUser = DB_USER;
     private $dbPass = DB_PASS;
     private $dbName = DB_NAME;
     private $pdo;
     private $statement;

     public function __construct()
     {
        $dsn = "mysql:host=$this->dbHost;dbname=$this->dbName;charset=UTF8";
        // echo $dsn;exit();
        try {
          $this->pdo = new PDO($dsn, $this->dbUser, $this->dbPass);
        
          $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          if ($this->pdo) {
            // echo "Connected to the $this->dbName database successfully!";
          }
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
     }

     public function query($sql)
     {
          $this->statement = $this->pdo->prepare($sql);
     }

     public function bind($parameter, $value, $type)
     {
          $this->statement->bindValue($parameter, $value, $type);
     }

     public function execute()
     {
       return $this->statement->execute();
     }

     public function resultSet()
     {
       $this->execute();
       return $this->statement->fetchAll(PDO::FETCH_OBJ);
     }
 }
