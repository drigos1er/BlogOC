<?php

class Config
{


    const  DB_NAME='blogocbd';
    const  DB_USER='root';
    const  DB_PASS='';
    const  DB_HOST='localhost';



    private static $connectdb;

    public static function getCdb(){

   if(self::$connectdb===null){


   self::$connectdb= new \Blog\core\Connexion(self::DB_NAME,self::DB_USER,self::DB_PASS,self::DB_HOST);

   }

   return self::$connectdb;


    }

}