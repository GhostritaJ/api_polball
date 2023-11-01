<?php
    //include_once('dbconfig.php');
    include_once('index2.php');
    //$insert = new Database();
    // if($show){
    //     $sql = $insertdata->insert($league, $date_time, $home_team, $away_team, $score, $link_name, $link_url);
    // }

    ?><br><?php

    $valueLeague = array();
    $valueHometeam = array();
    $valueAwayteam = array();
    $valueScore = array();
    $valueAll = array();
    

    //echo $divt20_elements[1];
    $divt21td_elements_exp_arr[1];

    foreach($divt20_elements as $values){
        $stripData = strip_tags($values->innertext);
        $valueLeague[] = $stripData;
        //echo $stripData; 
    }

    //echo $valueLeague[0];
    //echo $divt21ht_elements_exp_arr[0];
    ?><br><?php

    for( $i = 0; $i < count($divt21ht_elements_exp_arr); $i++){
        $stripData2 = strip_tags($divt21ht_elements_exp_arr[$i]);
        $valueHometeam[] = $stripData2;
        //echo $stripData2; 
    }
    ?><br><?php
    //var_dump($valueHometeam);
    //echo $valueHometeam[0];

    for( $i = 0; $i < count($divt21at_elements_exp_arr); $i++){
        $stripData3 = strip_tags($divt21at_elements_exp_arr[$i]);
        $valueAwayteam[] = $stripData3;
        //echo $stripData; 
    }
    ?><br><?php
    //var_dump($valueAwayteam);
    //echo $valueHometeam[0];

    for( $i = 0; $i < count($divt21sc_elements); $i++){
        $stripData4 = strip_tags($divt21sc_elements[$i]);
        $valueScore[] = $stripData4;
        //echo $stripData4; 
    }
    ?><br><?php
    //var_dump($valueAwayteam);
    //echo $valueHometeam[0];

    // for( $i = 0; $i < $count_divt20; $i++ ){
    //     $valueAll[] = array(
    //         "league" => $valueLeague[$i],
    //         "live_time" => $divt21td_elements_exp_arr[$i],
    //         "home_team" => $divt21ht_elements_exp_arr[$i],
    //         "away_team" => $divt21at_elements[$i],
    //         "score" => $divt21sc_elements[$i],
    //         "link" => array(
    //             "1" => "123",
    //             "2" => "234",
    //             "3" => "345"
    //         )
    //     );
    //     //print_r($valueAll);
    // }
    //print_r($valueAll);
    // echo "...<br>{<br>";
    
    // $valueAll2 = "";

//----------------------------------honazzz------------------------------------
 
$array_a=[]; 

for($i=0;$i<$count_divt20;$i++){
	$array_b = array(
    	"league" => $valueLeague[$i],
        "live_time" => $divt21td_elements_exp_arr[$i],
        "hometeam" => $divt21ht_elements_exp_arr[$i],
        "awayteam" => $divt21at_elements[$i],
        "score" => $divt21sc_elements[$i]
    );
    
	array_push($array_a,$array_b);
}

//foreach($array_a as $key => $value) { 
    //echo $array_a[0] . ": " . $value[0] . "<br>"; 
//} 
//var_dump($array_a);
//echo $array_a[0]['league'];
//echo json_encode($array_a, JSON_FORCE_OBJECT|JSON_UNESCAPED_UNICODE)."--**";
//print_r($array_a);

//----------------------------------honazzz------------------------------------

    
    //echo $valueAll2;
    //var_dumb($valueAll);
    //echo $valueAll;
    //print_r($valueAll); 

    
    // foreach ($valueAll as $item){
    //     echo "League: " . $item["league"] . "<br>";
    //     echo "Live Time: " . $item["live_time"] . "<br>";
    //     echo "Home Team: " . $item["home_team"] . "<br>";
    //     echo "Away Team: " . $item["away_team"] . "<br>";
    //     echo "Score: " . $item["score"] . "<br>";
    //     echo "Links:<br>";
    //     foreach ($item["link"] as $key => $link) {
    //         echo "Link $key: $link<br>";
    //     }
    //     echo "<br>";
    // }

    //echo $divt20_elements[0];

    if ($array_a) {
        // แปลงข้อมูลที่ดึงมาให้เป็น JSON (หากมีการใช้ API ที่มีรูปแบบข้อมูลอื่น ๆ คุณจะต้องแปลงข้อมูลให้เป็น JSON ตามรูปแบบข้อมูลที่คุณต้องการ)
        echo "21352+-+-<br>";
        $json_data = json_encode($array_a, JSON_UNESCAPED_UNICODE|JSON_FORCE_OBJECT);
    
        echo $json_data;
        //print_r($json_data);
    } else {
        // หากมีข้อผิดพลาดในการดึงข้อมูล
        echo json_encode(['error' => 'ไม่สามารถดึงข้อมูลได้']);
    }

    $jsonData = json_encode($array_a, JSON_UNESCAPED_UNICODE|JSON_FORCE_OBJECT);

    echo "<br>";

    // Step 3: Write the JSON to a file
    $filename = 'data_api.json';
    if (file_put_contents($filename, $jsonData)) {
        echo "JSON data has been written to $filename";
    } else {
        echo "Error writing JSON data to $filename";
    }
?>
