<?php

/**
 * Parses and verifies the doc comments for files.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Kapil Sharma <kapsi44@gmail.com>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://www.kapso.com/index.php
 */
    define("DB_HOST",    "127.0.0.1");
    define("DB_USER",     "root");
    define("DB_PASSWORD", "MYSECRET");
    define("DB_NAME",    "Gangouts");
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', dirname(dirname(__FILE__)));
/**
*@return classes 
*classes in the specified Controllers and models
*/
function __autoload($className)
{    
    if (file_exists(ROOT. DS .'controllers' . DS . $className . '.php')) {
            include_once ROOT . DS .'controllers' . DS . $className . '.php';
    } else if (file_exists(ROOT .DS.'models'.DS. $className . '.php')) {
            include_once ROOT. DS .'models' . DS . $className . '.php';
    } 
}
    ?>
