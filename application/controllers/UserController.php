<?php
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
class UserController extends BaseController 
{
    /**
    * registering the new user
    */
    public function registerAction()
    {
        parent::render('signup');
        if (isset($_POST['submit'])) {
            session_start();
            $_SESSION['user'] = $_POST['username'];
            $reg = new UserModel();
            if ($reg->validate() === true) {
                if ($reg->insertUser() === true) {
                    parent::redirect("User", "userPage");
                } else {
                    parent::redirect("User", "fail");
                }
            }
        }    
    }
    /**
    * user login
    */
    public function loginAction()
    {
        parent::render('signin');
        if (isset($_POST['login'])) {
            $_SESSION['user'] = $_POST['user_id'];
            $user = new UserModel();
            if ($user->checkUser() === true) {
                parent :: redirect("user", "userPage");
            } else {
                return $user->afterUnsuccessfulLogin();
            } 
        }
    }    
    /**
     * displays the users registered
     */
    public function displayFriends()
    {
        $user = new UserLogin();
        $friends = $user->checkFriends();
        return $friends;
    }
    /**
    *renders the user's Page
    */
    public function userPageAction()
    {
        parent::render('userPage');
    }       
    /**
    *renders the failure Page
    */
    public function failAction()
    {
        parent::render('fail');
    }  
    /**
    * render the user profile page
    */
    public function profileAction()
    {   
        //$user = new UserModel();
        //$row = $user->UserProfile();
        session_start();
        parent::render('profile');
    }        
    /**
    *Logouts the user account
    */
    public function logoutAction()
    {   
        session_unset(); #removes all the variables in the session
        session_destroy(); #destroys the session
        if (!$_SESSION['admin']) {
            echo "<h3>Successfully logged out!</h3><br />";
            parent::render('signin');
        } else {
            echo "Error Occured!!<br />";
        }
    }        
    /*
    *updates the user profile 
    */
    public function updateProfileAction()
    {   
        session_start();
        parent::render('updateProfile');
        if (isset($_POST['update'])) {
            $user = new UserModel();
            if ($user->updateProfile() === true) {
                echo "Records Updated Successfully!!";
            } else {
                echo "Not updated";
            }
        }        
        if (isset($_POST['change_password'])) {
            $user = new UserModel();
            if ($user->updatePassword() === true) {
                echo "Password Updated Successfully!!";
            } else {
                echo "Password cannot changed";
            }    
        }
    }
}        
