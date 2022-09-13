<?php

    if(isset($_GET['submit'])){
        //Get current day
        $currenDate = strtotime(date("d-m-Y"));

        //Get christmas day
        $christmas = strtotime("25-12-2022");

        //Get the difference (in seconds)
        $diff = ($christmas - $currenDate);

        //Calculate the day
        $daysleft = abs(round($diff / 86400));

        $info = array(
            'days_left_for_christmas' =>  $daysleft
        );
        $jsoninfo = json_encode($info);

        echo $jsoninfo;
    }


?>