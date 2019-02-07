<?php
/**
 * Created by PhpStorm.
 * User: drigo
 * Date: 03/01/2019
 * Time: 17:24
 */

namespace Blog\controller;
use Blog\authentification\Session;
use Blog\repositories\PostRepository;


class BlogPostController extends IndexController
{


    public function listPost()
    {
        $post = new PostRepository(\Config::getCdb());
        $listpost=$post->getallPost();
        echo $this->twig->render('blogposts.html.twig',array('listpost'=>$listpost));
    }

    public function blogAdmin()
    {
        echo $this->twig->render('blogadmin.html.twig');
    }

    public function addPost()
    {
        if (!empty($_POST)) {
            $db=\Config::getCdb();
            $datecreate=date('Y-m-d H:i:s');
            $insertpost=new PostRepository($db);
            $insertpost->addPost($_POST['title'], $_POST['chapo'], $_POST['content'], $datecreate, $_SESSION['userlog'],$datecreate, $_SESSION['userlog']);
            $flashmessage= new Session();
            $flashmessage->setNotification('Article Ajouté avec succès');
                header("Location:index.php?key=blogadmin");
        }

        echo $this->twig->render('addpost.html.twig');
    }



}