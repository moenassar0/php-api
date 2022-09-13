<?php

if(preg_match('/[A-Z]/', "Ab")){
    if(preg_match('/[a-z]/', "Ab")){
        if(preg_match('/[[:punct:]]/', "Ab")){
            echo "mix of uppercase and lowercase and symbols";
        }
    }
}else{
    echo "no match";
}

?>