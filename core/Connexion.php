<?php
namespace Blog\core;
use \PDO;

class Connexion{


    private $pdo;

    public function __construct($dbname,$username,$pass,$host='localhost') {

        $this->pdo=new PDO("mysql:dbname=$dbname;host=$host",$username,$pass);

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }



    public function query($statement, $params=false){

        if($params){

   $req=$this->pdo->prepare($statement);

     $req->execute($params);

        }else{

   $req=$this->pdo->query($statement);

        }


        return $req;

    }


    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }


}



?>
