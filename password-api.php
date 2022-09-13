<?php
    if(isset($_POST['password'])){
        $pass = $_POST['password'];
        $info = array(
            'password' =>  $pass,
            'is-strong' => validate($pass)
        );
        $jsoninfo = json_encode($info);

        echo $jsoninfo;
    }
    function validate($pass){
        if(preg_match('/[A-Z]/', $pass)){
            if(preg_match('/[a-z]/', $pass)){
                if(preg_match('/[[:punct:]]/', $pass)){
                    if(strlen($pass) >= 12 && strlen($pass) <= 14){
                        return true;
                    }
                }
            }
        }
        return false;
    }


?>