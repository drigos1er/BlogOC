<?php

require ('vendor/autoload.php');




if (isset($_GET['key'])) {
    $pkey=$_GET['key'];

}
else {
    $pkey="index";
}

if($pkey==='index') {
    $index = new Blog\controller\HomeController();
    $index->home();


}
