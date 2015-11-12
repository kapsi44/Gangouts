<?php
require_once "application/config/config.php";
/**
 * Parses and verifies the doc comments for files.
 *
 * PHP version 5
 *
 * 
 * @author    Kapil Sharma <kapil.sharma@aspiresys.com>
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
