<?php
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        echo $a . " " . $b . " " . $c;
    }
?>