<?php
/**
 * Created by PhpStorm.
 * User: drigo
 * Date: 07/12/2018
 * Time: 04:52
 */

namespace Blog\authentification;


class StrFunct
{

    static function randomKey($length){

        $character="0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return substr(str_shuffle((str_repeat($character,$length))),0,$length);

    }

}