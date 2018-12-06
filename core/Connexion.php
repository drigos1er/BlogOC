<?php
namespace Blog\core;
use \PDO;
/*class Connexion{

    private $host;
    private $user;
    private $pass;
    private $database;
    private $pdo;

    public function __construct($host='localhost',$user='root',$pass='',$database='blogocbd') {


        $this->host=$host;
        $this->user=$user;
        $this->pass=$pass;
        $this->database=$database;

    }

    public function getPDO(){

        $pdo=new PDO('mysql:dbname=blogocbd;host=localhost','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo=$pdo;
        return $pdo;

    }

    public function query($statement){

        $req= $this->getPDO()->query($statement);
        $datas=$req->fetchAll(PDO::FETCH_OBJ);

        return $datas;

    }




}*/


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




}



?>
