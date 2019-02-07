<?php
/**
 * Created by PhpStorm.
 * User: drigo
 * Date: 20/12/2018
 * Time: 16:31
 */

namespace Blog\core;


class Session
{


    public function __construct()
    {

        session_start();
    }

    public function setFlash($message, $color = "white")
    {
        $_SESSION['flash']=[

            "color" =>$color,
            "message"=>$message
        ];
    }






}