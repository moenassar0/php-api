<?php
$givenString = $_GET['string'];

$info = array(
    'string' =>  $givenString,
    'palindrome' => Palindrome($givenString)
);

$jsoninfo = json_encode($info);

echo $jsoninfo;

function Palindrome($string){
    //Check if reverse of the string is equal to string 
    if (strrev($string) == $string){ 
        return true; 
    }
    else{
        return false;
    }
}
