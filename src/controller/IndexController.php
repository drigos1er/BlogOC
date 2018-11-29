<?php
/**
 * Created by PhpStorm.
 * User: drigo
 * Date: 12/11/2018
 * Time: 18:10
 */
namespace Blog\controller;
use \Twig_Loader_Filesystem;
use \Twig_Environment;
class IndexController
{
    protected $connect;
    protected $conexion;
    protected $twig;

    public function __construct() {


        $loader = new Twig_Loader_Filesystem('src/view');
        $this->twig = new Twig_Environment($loader, array('debug' => false));

    }

}