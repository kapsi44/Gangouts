<?php

function inputText($id, $name, $tabindex, $class = "form-control input-lg")
{
    $type = "text";
    echo "<input type='$type'  id='$id' placeholder='$name' name='$id' class='$class'  tabindex='$tabindex' /> ";
   
}

function inputPassword($id, $name, $tabindex, $class = "form-control input-lg")
{
    $type = "password";
    echo "<input type= '$type' id='$id' placeholder='$name' name='$id' class='$class'  tabindex='$tabindex'  /> ";
}

function inputEmail($id, $name, $tabindex, $class = "form-control input-lg")
{
    $type = "email";
    echo "<input type= '$type' id='$id' placeholder='$name' name='$id' class='$class'  tabindex='$tabindex'  /> ";
}
function inputMobile($id, $name, $tabindex, $class = "form-control input-lg")
{
	$type = "text";
	echo "<input type= '$type' id='$id' placeholder='$name' name='$id' class='$class'  tabindex='$tabindex' minlength='10' MaxLength='10' /> ";
}
function option($array)
{
    $options = explode(",", $array);
    foreach ($options as $value) {
        echo "<option value='$value'> $value </option>";
    }
}

function daysOption()
{
    
    for ($i = 1; $i <= 31; $i++) {
        echo "<option value='$i'> $i </option>";
    }
    
}

function monthOption($array)
{
    $options = explode(",", $array);
    foreach ($options as $value) {
        $val = substr($value, 0, 3);
        echo "<option value='$val'> $value </option>";
    }
}

function yearOption()
{
    
    for ($i = 1950; $i <= 2015; $i++) {
        echo "<option value='$i'> $i </option>";
    }
}
?>
	
	
	