<?php
require('vendor/autoload.php');



if (isset($_GET['key'])) {
    $pkey=$_GET['key'];
} else {
    $pkey="index";
}

if ($pkey==='index') {
    $index = new Blog\controller\HomeController();
    $index->home();
} elseif ($pkey=='login') {
    $login= new \Blog\controller\LoginController();
    $login->login();
}elseif ($pkey == 'blogpost') {
    $listposts= new \Blog\controller\BlogPostController();
    $listposts->listPost();
}elseif ($pkey == 'blogadmin') {
    $blogadmin= new \Blog\controller\BlogPostController();
    $blogadmin->blogAdmin();
}
elseif ($pkey == 'addpost') {
    $addpost= new \Blog\controller\BlogPostController();
    $addpost->addPost();
}


elseif ($pkey=='register') {
    $login= new \Blog\controller\LoginController();
    $login->register();
} else {
}

