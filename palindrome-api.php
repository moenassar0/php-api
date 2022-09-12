<?php
$givenString = $_GET['string'];

$info = array(
    'string' =>  $givenString,
    'palindrome' => true
);

$jsoninfo = json_encode($info);

echo $jsoninfo;
