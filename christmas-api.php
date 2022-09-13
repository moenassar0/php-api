<?php

    if(isset($_GET['submit'])){
        $currenDate = strtotime(date("d-m-Y"));
        $christmas = strtotime("25-12-2022");
        echo $currenDate . "<br>";
        echo $christmas - $currenDate . "<br>";
        $diff = ($christmas - $currenDate);
        $daysleft = abs(round($diff / 86400));
        echo abs(round($diff / 86400)) . "<br>";

        $info = array(
            'days_left_for_christmas' =>  $daysleft
        );
        $jsoninfo = json_encode($info);

        echo $jsoninfo;
    }


?>