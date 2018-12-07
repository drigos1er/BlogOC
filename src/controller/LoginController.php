<?php

namespace Blog\controller;
require ('../BlogOC/config/Config.php');

class LoginController extends IndexController
{

    public function login()
    {

        echo $this->twig->render('login.html.twig');


    }


    public function register()
    {

        if(!empty($_POST)){
            $errors=array();
            $db=\Config::getCdb();
            $valid= new \Blog\validation\Errors($_POST);
            $valid->isUniq('username',$db,'users','Ce Pseudo est dejà utilisé par un autre utilisateur');

            $valid->isEmail('email','Cet email n\'est pas valide');
            if($valid->isValidator()){
                $valid->isUniq('email',$db,'users','Cet Email  est dejà utilisé par un autre utilisateur');

            }

            $valid->isConfirmed('passwd','Les mots de passe ne sont pas identiques');


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


        echo $this->twig->render('register.html.twig');


    }

}