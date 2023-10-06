<?php
//we can make trait as well // Trait database in other pages use trait.
class database {
	
    // public $host     = 'localhost';
    // public $user     = 'root';
    // public $database = 'mis_inventory';
    // public $password = '';
    
    public $con;
    public $result;

    public function __construct(){

     try{

        //return $this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database,$this->user, $this->password);
        $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME; //from config file
        return $this->con = new PDO($string,DBUSER,DBPASS);
		

     } catch(PDOException $e){

        echo "Database connection Error: ". $e->getMessage();

     }

    }

    public function Query($qry, $params = []){
      
       if(empty($params)){

        $this->result = $this->con->prepare($qry);
        return $this->result->execute();

       } else {
           $this->result = $this->con->prepare($qry);
           return $this->result->execute($params);
       }

    }

    public function rowCount(){

        return $this->result->rowCount();

    }

    public function fetchall(){

        return $this->result->fetchAll(PDO::FETCH_OBJ);

    }

    public function fetch(){

        return $this->result->fetch(PDO::FETCH_OBJ);

    }



}


?>