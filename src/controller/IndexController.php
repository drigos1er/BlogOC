<?php
namespace Blog\controller;


use \Twig_Loader_Filesystem;

use \Twig_Environment;

class IndexController
{
    protected $connect;
    protected $conexion;
    protected $twig;
    protected $flash;

    public function __construct()
    {
        session_start();



        $loader = new Twig_Loader_Filesystem('src/view');
        $this->twig = new Twig_Environment($loader, array('debug' => true));
        $this->twig->addGlobal('session', $_SESSION);
    }



    public function setFlash($message)
    {
        $_SESSION['flash']=$message;
    }


    public function showFlash()
    {
        if (!empty($_SESSION)) {
            $message=$_SESSION ['flash'];
            return $message;
        }
    }
    public function deleteFlash()
    {
        unset($_SESSION['flash']);
    }
}