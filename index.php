<?php

require('calltwig.php');
require('controller/controller.php');

if (isset($_GET['key'])) {
    if ($_GET['key'] == 'login') {
        login();
    }

}
else {
    home();
}