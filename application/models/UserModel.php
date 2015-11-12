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
 * @copyright 2006-2014 Aspire Pvt Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://www.kapso.com/index.php
 */
class UserModel extends Query 
{
    /**
    *checks the user's credentials
    */
    public function checkUser()
    {
        $id = $_POST['user_id'];
        $password = md5($_POST['password']);
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $query = "select * from user_details where user_name='$id' AND password ='$password'";
        $retval = mysqli_query($conn, $query) or die(mysqli_error($conn));;
        $row = mysqli_fetch_assoc($retval);
        $count = mysqli_num_rows($retval);
        if ($count == 1) {
            return true;
        } elseif ($row['status'] != "blocked") {
            return "Your account is blocked! Please Send a request to Admin to unblock account";
        } 
    }
    /**
    * inserts the user details into the database
    */
    public function insertUser()
    {   
        $user_table = "user_details";
        $add['user_name'] = $_POST['username'];
        $add['first_name'] = $_POST['firstname'];
        $add['last_name'] = $_POST['lastname'];
        $add['age'] = date('Y')-$_POST['year'];
        $add['gender'] = $_POST['gender'];
        $add['password'] = md5($_POST['password']);
        $add['blood_group'] = $_POST['bloodGroup'];
        $add['email'] = $_POST['email'];
        $add['mobile'] = $_POST['mobile'];
        $interest = $_POST['interest'];
        $qualification = $_POST['qualifications'];
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $que = parent::insert($user_table, $add);
        $interest_query = "update interest SET interest='$interest'";
        $qua_query = "update qualifications SET qualification='$qualification'";
        $result1 = mysqli_query($conn, $que) or die(mysql_error($conn));
        $result2 = mysqli_query($conn, $interest_query) or die(mysqli_error($conn));
        $result3 = mysqli_query($conn, $qua_query) or die(mysqli_error($conn)); 
        if ($result1 && $result2 && $result3) {
            return true;
        } else {
            return false;
        }
    }
    /**
    *display the registered friends 
    */
    public function displayFriends()
    {
        $user = $_SESSION['user'];
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $query = "select * from user_details where user_name != '$user'";
        $retval = mysqli_query($conn, $query);
        return $retval;
    }	

    const MIN = 3;
    const MAX = 30;
    /**
    * validates the user field inputs
    */
    public function validate()
    {
        $this->first_name = $_POST['firstname'];
        $this->last_name = $_POST['lastname'];
        $this->user_name = $_POST['username'];
        $this->mobile = $_POST['mobile'];
        $this->gender = $_POST['gender'];
        $this->day = $_POST['day'];
        $this->year = $_POST['year'];
        $this->month = $_POST['month'];
        $this->blood_group = $_POST['bloodGroup'];
        $this->password = $_POST['password'];
        $this->confirm_password = $_POST['confirm_Password'];
        $this->email = $_POST['email'];
        $this->age = date('Y') - $this->year;
        $error = array(
            'errorType' => false,
                'errorMsg' => ""
        );
        if (!ctype_alnum($this->user_name)) {
            echo $this->user_name;
            $error['errorType'] = true;
            $error['errorMsg']  = "Username should have alphnumeric characters";
            echo $error['errorMsg'];
        } elseif (strlen($this->user_name) < self::MIN 
                    OR strlen($this->user_name) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Username should be within 3-20 characters long";
            echo $error['errorMsg'];
        } elseif (!ctype_alpha(str_replace(array("'", "-"), "", 
            $this->first_name))) {
            $error['errorType'] = true;
            $error['errorMsg']  = "First name should be alpha characters only.";
            echo $error['errorMsg'];
        } elseif (strlen($this->first_name) < self::MIN 
                    OR strlen($this->first_name) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "First name should be within 3-20 characters long";
            echo $error['errorMsg'];
        } elseif (!ctype_alpha(str_replace(array("'","-"), "", $this->last_name))) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Last name should be alpha characters only.";
            echo $error['errorMsg'];
        } elseif (strlen($this->last_name) < self::MIN 
                    OR strlen($this->last_name) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Last name should be within 3-20 characters long.";
            echo $error['errorMsg'];
        } elseif (strlen($this->password) < self::MIN 
                    OR strlen($this->password) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Password should be within 3-20 characters long.";
            echo $error['errorMsg'];
        } elseif ($this->confirm_password != $this->password) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Confirm password mismatch.";
            echo $error['errorMsg'];
        } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) { 
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid email address.";
        } elseif (!ctype_digit($this->mobile) 
                    OR strlen($this->mobile) != 10) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid phone number.";
            echo $error['errorMsg'];
        } elseif ($this->gender != 'male' && $this->gender != 'female') {
            $error['errorType'] = true;
            $error['errorMsg']  = "Please select your gender.";
            echo $error['errorMsg'];
        } elseif ($this->blood_group == '') {
            $error['errorType'] = true;
            $error['errorMsg']  = "Please select your blood group.";
            echo $error['errorMsg'];
        } elseif (intval($this->day) < 1 
                    OR intval($this->day) > 31) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid day between 1-31.";
            echo $error['errorMsg'];
        } elseif ($this->month = '') {
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid month between 1-12.";
            echo $error['errorMsg'];
        } elseif ($this->age < 18 && $this->age > 50) {
            $error['errorType'] = true;
            $error['errorMsg']  = "You should be between 18 to 50 years old.";
            echo $error['errorMsg'];
        } elseif ($error['errorType'] === false) {
            return true;
        } else {
            return false;
        }
    }
    /**
    * add friend request
    */
    public function userProfile()
    {
        $user_name = $_SESSION['user'];
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $query = "select * from user_details where user_name = '$user_name'";
        $retval = mysqli_query($conn, $query);
        return $retval;
    }
    public function updateProfile()
    {
        $user = $_SESSION['user'];
        $table = "user_details";
        $user_name = $_POST['username'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
       // $add['age'] = date('Y')-$_POST['year'];
        //$add['gender'] = $_POST['gender'];
        $blood_group = $_POST['bloodGroup'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile']; 
        $interest = $_POST['interest'];
        $qualification = $_POST['qualifications'];
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $update_query1 = "update $table SET first_name='$first_name', last_name='$last_name', mobile='$mobile', email='$email', blood_group='$blood_group'  where user_name ='$user'";
        $update_query2 = "update interest SET interest='$interest' where user_name='$user'";
        $update_query3 = "update qualifications SET qualification='$qualification' where user_name='$user'";
        $result1 = mysqli_query($conn, $update_query1) or die(mysqli_error($conn));   
        $result2 = mysqli_query($conn, $update_query2) or die(mysqli_error($conn));
        $result3 = mysqli_query($conn, $update_query3) or die(mysqli_error($conn)); 
        if ($result1 && $result2 && $result3) {
            return true;
        } else {
            return false;
        }
    }
    public function updatePassword()
    {
        $user = $_SESSION['user'];
        $table = "user_details";
        $old_password = md5($_POST['old_pass']);
        $new_pass = md5($_POST['new_pass']);
        $new_pass1 = md5($_POST['new_pass1']);
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $query = "select password from user_details where user_name='$user'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $row = mysqli_fetch_assoc($result);
        if ($old_password == $row['password'] && $new_pass == $new_pass1) {
            echo "pass matched";
            $update_query = "update $table SET password='$new_pass' where user_name ='$user'";
            $result1 = mysqli_query($conn, $update_query) or die(mysqli_error($conn));   
            if ($result1) {
                return true;
            } else {
                return false;
            }
        }    
    }
    public function afterUnsuccessfulLogin() 
    { 
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $user = $_SESSION['user'];
        $sql = "select * from login_attempts where user_id='$user'"; 
        $block = "update user_details SET status='blocked'";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        if ($result) { 
            $attempts = $data["attempts"];
            if ($attempts == 3) {
                echo "<h1 style='color:red'> Your account has been blocked</h1>";
                $result1 = mysqli_query($conn, $block);
                return true;    
            } else {
                $attempts = $data["attempts"]+1;
                $add_attempts = "update login_attempts set attempts = '$attempts' where user_id='$user'";
                $result2 = mysqli_query($conn, $add_attempts);
                echo "<h3 style='color:red'>Wrong Credentials</h3>";
                return false;
            }  
        }
    }     
}   