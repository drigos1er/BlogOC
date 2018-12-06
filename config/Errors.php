<?php


class Errors
{

    private $info;
    private $errors;

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



    public function isUniq($field,$db,$table,$errorMsg){

      $rec=$db->query("SELECT id FROM $table where $field= ?",[$this->getField($field)])->fetch();

      if($rec){

          $this->errors[$field]=$errorMsg;
      }


    }



    public function isEmail($field,$errorMsg){

        if(!filter_var([$this->getField($field)],FILTER_VALIDATE_EMAIL)){

            $this->errors[$field]=$errorMsg;
        }


    }


    public function isConfirmed($field,$errorMsg){

        if(empty($this->getField($field))|| $this->getField($field) != $this->getField($field.'_confirm')){

            $this->errors[$field]=$errorMsg;
        }


    }


}