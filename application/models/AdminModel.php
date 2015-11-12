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
class AdminModel 
{
    /**
    * check the registered admin
    * @return boolean 
    */
    public function checkAdmin()
    {
        $this->id = $_POST['adminId'];
        $this->password = $_POST['adminPassword'];
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $query = 'select * from admin';
        $retval = mysqli_query($conn, $query );
        while ($row = mysqli_fetch_assoc($retval)) {
            while ($row["user_id"] == $this->id AND 
                    $row["password"] == $this->password) {
                return true;
            } 
        }       
    }
    /**
    *  displays the registered users to the admin
    */
    public function displayUsers()
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $query = 'select * from user_details';
        $retval = mysqli_query($conn, $query);
        return $retval;
    }
    /**
    *activating the blocked users
    */
    public function activateUser($user)
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $query = "update user_details SET status='Active' where user_name = '$user'";
        $retval = mysqli_query($conn, $query) or die(mysqli_error($conn));
        if ($retval) {
            return true;
        } else {
            return false; 
        }
    }
}