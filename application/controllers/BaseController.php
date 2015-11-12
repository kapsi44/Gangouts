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
class BaseController 
{   
    protected $module = array();
    protected $action = array();
    /**
    * initialize the module and action
    */ 
    public function init()
    {
        $control = array();		
        $url = $_GET;
        foreach ($url as $key=>$value) {
            if ($key == "module") {            
                $this->module = $value . 'Controller';             
                $this->module=ucfirst($this->module);
                $this->control($this->module);
            }
            if ($key == "action") {
                $this-> action = $value . 'Action';
                $this-> act($this-> module, $this-> action);                
            }       
        }
    }
    /**
    * routing the module 
    */
    public function control($module) 
    {
        if (file_exists(ROOT. DS .'controllers' . DS . $module . '.php')) {
            include_once ROOT . DS .'controllers' . DS . $module . '.php';
        }
    }
    /**
    * calling the action of the module
    */
    public function act($module,$action)
    {
        if (method_exists($module, $action)) {
            $mod = new $module;
            $mod-> $action();
        }
    }
    /**
    * rendering the view page
    */
    public function render($view,$array=null)
    {  
        $array = array();
        ob_start();
        extract($array, EXTR_SKIP);
        $path = ROOT . DS . 'views' . DS . $view.'.php'; 
        include_once $path;
    }
    /**
    *redirecting to the module and action  
    */
    public function redirect($module,$action)
    { 
      
        $path = 'index.php?module='.$module.'&action='.$action; 
        header('Location:' . $path);
    }
}
   

