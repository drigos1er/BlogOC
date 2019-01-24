<?php
/**
 * Created by PhpStorm.
 * User: drigo
 * Date: 20/12/2018
 * Time: 16:31
 */

namespace Blog\authentification;


use Blog\controller\IndexController;

class Session extends IndexController
{


    public function __construct()
    {
        session_start();
    }

    public function setFlash($message)
    {
        $_SESSION['flash']=$message;
    }

    public function setUserlog($message)
    {
        $_SESSION['userlog']=$message;
    }

    public function setNotification($message)
    {
        $_SESSION['notice']=$message;
    }

    public function setPost($message)
    {
        $_SESSION['post']=$message;
    }


    public function showFlash()
    {
        if (!empty($_SESSION)) {
            $message=$_SESSION ['flash'];
            return $message;
       }
    }



}