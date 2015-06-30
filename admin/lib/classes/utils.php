<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 30.06.2015
 * Time: 17:09
 */

class utils {

    static $required = '5.6';

    static function CheckForPHPVersion(){
        if(version_compare(phpversion(), self::$required, '<')) {

            return 1;
        } else {

            return 0;
        }
    }
}