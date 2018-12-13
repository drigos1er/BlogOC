<?php

require ('vendor/autoload.php');

$db=Config::getCdb();

    if(!empty($_POST)){
        $errors=array();

        $valid= new \Blog\validation\Errors($_POST);
        $test= new \Blog\repositories\UsersRepository($db);
        $vw= $test->getUserByUsername('username');
        if($vw){
            $valid->isUniq('username','Ce Pseudo est dejà utilisé par un autre utilisateur');
        }


        $valid->isEmail('email','Cet email n\'est pas valide');
        if($valid->isValidator()){
            $valid->isUniq('email',$db,'users','Cet Email  est dejà utilisé par un autre utilisateur');

        }

        $valid->isConfirmed('passwd','Les mots de passe ne sont pas identiques');
       /* var_dump($valid);
        var_dump($valid->isValidator());
        die;*/


       if($valid->isValidator())
        {
            $authentification= new \Blog\authentification\Auth($db);
            $authentification->register($_POST['username'],$_POST['passwd'],$_POST['email']);

        }
       else
        {
            $errors=$valid->getErrors();
            var_dump($errors);
        }

    }


