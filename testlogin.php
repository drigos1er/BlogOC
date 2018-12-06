<?php

require ('vendor/autoload.php');

require ('config/Config.php');
require ('config/Errors.php');


    if(!empty($_POST)){

        $errors=array();
        $db=Config::getCdb();
        $valid= new Errors($_POST);
        $valid->isUniq('username',$db,'user','Ce Pseudo est dejà utilisé par un autre utilisateur');
        $valid->isEmail('email','Cet email n\'est pas valide');
        $valid->isUniq('email',$db,'user','Cet Email  est dejà utilisé par un autre utilisateur');
        $valid->isConfirmed('passwd','Les mots de passe ne sont pas identiques');
        var_dump($valid);

        die;

    }



