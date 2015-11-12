<?php
/**
 * Parses and verifies the doc comments for files.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Kapil Sharma <kapsi44@gmail.com>
 * @copyright 1990-2015 Aspire Sys Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://www.kapso.com/index.php
 */

require_once 'application/config/config.php'; 

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

class AdminController extends BaseController
{
    /**
    *@return void 
    *Admin Login 
    */
    public function loginAction()
    {
        parent::render('admin');
        if (isset($_POST['submit'])) {
            session_start();
            $_SESSION['admin'] = $_POST['adminId'];
            echo $_SESSION['admin'];
            $adm = new AdminModel();
            if ($adm -> checkAdmin() === true) {
                parent :: redirect("Admin", "access");
            } else {
                echo "<h2 style='color:red'>Wrong Credentials</h2>";
            }
        }		
    }
    /**
    *@return void  
    * 
    */
    public function accessAction()
    {
        parent::render('adminPage');
    }		
    /**
    * @return void  
    * Request to unblock the $user
    */
    public function unblockAction()
    {
        $user = $_GET['id'];
        $admin = new AdminModel();
        if ($admin->activateUser($user) === true) {
            echo $user . " Activated!!!";
        } else {
            echo "Activation Problem!";
        }
    }
    public function welcome($admin)
    {
        echo "Welcome ". $admin;   
    }
}
?>
