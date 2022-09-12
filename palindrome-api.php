<?php
$givenString = $_GET['string'];

$info = array(
    'string' =>  $givenString,
    'palindrome' => Palindrome($givenString)
);

$jsoninfo = json_encode($info);

echo $jsoninfo;

function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return true; 
    }
    else{
        return false;
    }
}
