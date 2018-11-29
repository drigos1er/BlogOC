<?php

namespace Blog\controller;

class HomeController extends IndexController
{

  public function home()
    {

        echo $this->twig->render('home.html.twig');


    }




}