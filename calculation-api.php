<?php
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $ans = Calculate($a, $b, $c);
        $info = array(
            'a' =>  $a,
            'b' => $b,
            'c' => $c,
            'answer' => $ans
        );
        $jsoninfo = json_encode($info);

        echo $jsoninfo;
    }

    function Calculate($a, $b, $c){
        return ($a * $a * $a) + ($b * $c) - ($a/$b);
    }
?>