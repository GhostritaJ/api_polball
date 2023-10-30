<?php
    include_once('dbconfig.php');
    include_once('index2.php');
    $insert = new Database();
    // if($show){
    //     $sql = $insertdata->insert($league, $date_time, $home_team, $away_team, $score, $link_name, $link_url);
    // }
    echo $count_divt20;
    for($i=0; $i<$count_divt20; $i++){
        $divt20_elements[$i];           // league , i=0
        $divt21td_elements[$i];         // data-time , live-time, i=0
        $divt21ht_elements[$i];         // home-team , i=0
        $divt21at_elements[$i];         // away-team , i=0
        $divt21sc_elements[$i];         // score , i=0
        echo $divt20_elements[$i]."  ".$divt21td_elements[$i]."  ".$divt21ht_elements[$i]."  ".
        $divt21at_elements[$i]."  ".$divt21sc_elements[$i];

        //$sql = $insertdata->insert($league, $date_time, $home_team, $away_team, $score, $link_name, $link_url);
    }
?>