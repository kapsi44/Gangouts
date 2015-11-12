<?php
require_once "application/config/config.php";
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
class HomeController extends BaseController
{
    /**
    *rendring the home page
    */
    public function startAction()
    {
        parent::render("home");
    }
}
?>
