<?php 
require_once 'application/config/config.php';
/**
 * Parses and verifies the doc comments for files.
 *
 * PHP version 5
 *
 * 
 * @author    Kapil Sharma <kapil.sharma@aspiresys.com>
 * @link      http://www.kapso.com/index.php
 */
class Query
{
    public $conn = "";
    function __construct()
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$conn) {
            return false;
        } else {
            return true;
        }	
    }	 
    public function insert ($table, $data)
    {   
        $column = implode(",", array_keys($data));
        $value = "'" . implode("','", $data) . "'";
        $query  = "insert into $table ($column)values($value)";
        return $query;
    }	
    public function select($table, $column)
    {
        $col = implode(",", array_keys($column));     	 
        $sql = 'SELECT $col FROM $table';
        $retval = mysqli_query($conn, $sql);     	 
        if (! $retval ) {
            die('Could not get data: ' );
        }
        while ($row = mysqli_fetch_assoc($retval)) {
            echo "USER ID :{$row['id']}  <br> ".
                    "USER NAME : {$row['user_name']} <br> ".
                    " Blood Group : {$row['blood_group']} <br> ".
                    "--------------------------------<br>";
        }     	 
        echo "You are successfully Registered\n";     	 
        mysqli_close($conn);          
    } 
    public function update ($table, $data)
    {   
        $column = implode(",", array_keys($data));
        $value = "'" . implode("','", $data) . "'";
        $query  = "update $table SET $column='$value'";
        return $query;
    }    
}
?>
