<?php
namespace Blog\controller ;


use Blog\repositories\PostRepository;
use Blog\repositories\UsersRepository;
use Blog\validation;
use Blog\authentification;


class LoginController extends IndexController
{


    public function login()
    {



        if (!empty($_POST)) {
            $userlogin = new UsersRepository(\Config::getCdb());
            $loginus = $userlogin->getUserById('users', 'username', $_POST['username']);

            if (password_verify($_POST['passwd'], $loginus['passwd'])) {
                if ($loginus['usertype']=='administrateur') {
                    $userlog= new authentification\Session();
                     $userlog->setUserlog($_POST['username']);
                    $post = new PostRepository(\Config::getCdb());
                    $listpost=$post->getallPost();
                    header("Location:index.php?key=blogadmin");
                } else {
                    header("Location:index.php?key=blogpost");
                }
            } else {
                $flashmessage= new authentification\Session();
                $flashmessage->setFlash('Mot de passe ou login incorrect');
                header("Location:index.php?key=login");
            }
        }

    }


    public function register()
    {

        unset($_SESSION['flash']);

        if (!empty($_POST)) {

           $errors=array();
            $db=\Config::getCdb();
            $valid = new validation\Errors($_POST);

            if ($valid->isValidator()) {
                     $valid->isEmail('email', 'Cet email n\'est pas valide');
                     $flashmessage= new authentification\Session();
                     $flashmessage->setFlash('Cet email n\'est pas valid');
                     header("Location:index.php?key=register");
             }


             if ($valid->isValidator()) {
                 $valid->isConfirmed('passwd', 'Les mots de passe ne sont pas identiques');
                 $flashmessage= new authentification\Session();
                 $flashmessage->setFlash('Les mots de passe ne sont pas identiques');
                 header("Location:index.php?key=register");

             }


             if ($valid->isValidator()) {
                 $valid->isUniq('users', 'username', 'username', 'Ce Pseudo est dejà utilisé par un autre utilisateur');
                 $flashmessage= new authentification\Session();
                 $flashmessage->setFlash('Ce Pseudo est dejà utilisé par un autre utilisateur');
                 header("Location:index.php?key=register");

             }

           if ($valid->isValidator()) {

                 $valid->isUniq('users', 'email', 'email', 'Cet Email  est dejà utilisé par un autre utilisateur');
                 $flashmessage= new authentification\Session();
                 $flashmessage->setFlash('Cet Email  est dejà utilisé par un autre utilisateur'. $_POST['contact']);
                 header("Location:index.php?key=register");
             }

             if ($valid->isValidator()) {
                 $insertuser=new UsersRepository($db);
                 $insertuser->register($_POST['username'], $_POST['passwd'], $_POST['email'], $_POST['contact'],'guest');
                 $flashmessage= new authentification\Session();
                 $flashmessage->setFlash('Utilisateur crée avec succès !Un mail de confirmation vous a été envoyyé à votre adresse mail');



                 header("Location:index.php?key=register");
             }
        }




        echo $this->twig->render('register.html.twig');
    }













}