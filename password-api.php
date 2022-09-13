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
        //Check if pass has uppercase letters
        if(preg_match('/[A-Z]/', $pass)){
            //Check if pass has lowercase letters
            if(preg_match('/[a-z]/', $pass)){
                //Check if pass has symbols
                if(preg_match('/[[:punct:]]/', $pass)){
                    //Check if pass has enough characters
                    if(strlen($pass) >= 12 && strlen($pass) <= 14){
                        return true;
                    }
                }
            }
        }
        return false;
    }


?>