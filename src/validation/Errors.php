<?php
namespace Blog\validation;

class Errors
{

    private $info;
    private $errors=[];

    public function __construct($info)
    {
        $this->info=$info;
    }


    public function getField($field){

        if(!isset($this->info[$field])){

            return null ;
        }
        return $this->info[$field];
    }

// METTRE DANS UN REPOSITORY

  /*  public function isUniq($errorMsg){


         return $this->errors[]=$errorMsg;

    }*/



    public function isEmail($field,$errorMsg){

        if(!filter_var($this->getField($field),FILTER_VALIDATE_EMAIL)){

            $this->errors[$field]=$errorMsg;
        }


    }


    public function isConfirmed($field,$errorMsg){

        if(empty($this->getField($field))|| $this->getField($field) != $this->getField($field.'_confirm')){

            $this->errors[$field]=$errorMsg;
        }


    }

    public function isValidator(){



          return empty($this->errors);



    }

    public function getErrors(){



        return $this->errors;



    }






}