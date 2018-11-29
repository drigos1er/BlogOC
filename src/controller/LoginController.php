<?php

namespace Blog\controller;

class LoginController extends IndexController
{

    public function login()
    {

        echo $this->twig->render('login.html.twig');


    }




}