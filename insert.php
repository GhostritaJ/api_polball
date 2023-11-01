<?php
    include_once('index2.php');
    ?><br><?php

    $valueLeague = array();
    $valueHometeam = array();
    $valueAwayteam = array();
    $valueScore = array();
    $valueLink = array();
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

    $count_divt21link_url_0 = 0;                                          //use for url
    $count_divt21link_url_1 = 0;

    for($i=1;$i<$count_divt21link;$i++){
        $divt21link_for = $html->find('div.accordion-body', $i)->plaintext;
        //$divt21link_for = $html->find('a', $i+3)->getAttribute('href');
        $strt2_l1 = explode("เลือกลิ้งดูบอลด้านล่าง ", $divt21link_for);
        $strt2_l1_2 = explode(" คลิกดูบอล ", $strt2_l1[1]);
        $count_strt2_l1_2 = count($strt2_l1_2);
        //echo $count_strt2_l1_2."<br>";

        foreach ($strt2_l1_2 as $value) {
            //echo $value."<br>";
            $stripData5 = strip_tags($value);
            $valueLink[] = $stripData5;
            //echo $stripData5; 

            $divt21link_url[$count_divt21link_url_0][$count_divt21link_url_1] = $value;
            //echo $count_divt21link_url[$count_divt21link_url_0][$count_divt21link_url_1]."-<br>";
            $count_divt21link_url_1 = $count_divt21link_url_1+1;
        }
        $count_divt21link_url_0 = $count_divt21link_url_0+1;

    }
    //var_dump($valueLink);

    //---------------------------------------**************
    
    // $count_divt21link_url_0 = 0;                                          //use for url
    // $count_divt21link_url_1 = 0; 
    // for($i=1;$i<$count_divt21link;$i++){
    //     $divt21link_for = $html->find('div.accordion-body', $i)->plaintext;
    //     //$divt21link_for = $html->find('a', $i+3)->getAttribute('href');
    //     $strt2_l1 = explode("เลือกลิ้งดูบอลด้านล่าง ", $divt21link_for);
    //     $strt2_l1_2 = explode(" คลิกดูบอล ", $strt2_l1[1]);

    //     foreach ($strt2_l1_2 as $value) {
    //         echo $value."---<br>";
    //         $divt21link_url[$count_divt21link_url_0][$count_divt21link_url_1] = $value;
    //         //echo $count_divt21link_url[$count_divt21link_url_0][$count_divt21link_url_1]."-<br>";
    //         $count_divt21link_url_1 = $count_divt21link_url_1+1;
    //     }
    //         // echo $strt2_l1_2[$i]."---<br>";
    //         // $divt21link_url[$count_divt21link_url_0][$count_divt21link_url_1] = $strt2_l1_2[$i];
    //         // //echo $count_divt21link_url[$count_divt21link_url_0][$count_divt21link_url_1]."-<br>";
    //         // $count_divt21link_url_1 = $count_divt21link_url_1+1;
    //     //echo "<br>";
    //     $count_divt21link_url_0 = $count_divt21link_url_0+1;
    // }

    //--------------------------------------***********

    ?><br><?php
    //var_dump($valueLink);
    //echo $valueLink[1];
//----------------------------------honazzz------------------------------------
//------------TB2-------------
$array_a=[$count_divt20];

for($i=0;$i<$count_divt20;$i++){
	$array_b = array(
    	"league" => $valueLeague[$i],
        "live_time" => $divt21td_elements_exp_arr[$i],
        "hometeam" => $valueHometeam[$i],
        "awayteam" => $valueAwayteam[$i],
        "score" => $valueScore[$i],
        "link" => $valueLink[$i]
    );
	array_push($array_a,$array_b);
}

//------------TB1-------------
$array_c=[count($str1)]; 
$countStr1 = count($str1);

for($i=0;$i<$countStr1;$i++){
	$array_d = array(
    	"leagues" => $str1[$i]
    );
    
	array_push($array_c,$array_d);
}
//print_r($array_c);

?><br><br><?php
//----------------------------------honazzz------------------------------------

    // if(count($array_a)!=0 || count($array_a)!=''){
    //     echo "11";
    // }else{
    //     echo "22";
    // }

    //-------------------------array_a---------------------------------
    if ($array_a) {
        // แปลงข้อมูลที่ดึงมาให้เป็น JSON (หากมีการใช้ API ที่มีรูปแบบข้อมูลอื่น ๆ คุณจะต้องแปลงข้อมูลให้เป็น JSON ตามรูปแบบข้อมูลที่คุณต้องการ)
        //echo "21352+-+-<br>";
        $json_data = json_encode($array_a, JSON_UNESCAPED_UNICODE|JSON_FORCE_OBJECT);
    
        //echo $json_data;
        //print_r($json_data);
    } else {
        // หากมีข้อผิดพลาดในการดึงข้อมูล
        echo json_encode(['error' => 'ไม่สามารถดึงข้อมูลได้']);
    }

    $jsonData = json_encode($array_a, JSON_UNESCAPED_UNICODE|JSON_FORCE_OBJECT);

    //echo $jsonData."<br>";

    //-------------------------array_c--------------------------------
    if ($array_c) {
        // แปลงข้อมูลที่ดึงมาให้เป็น JSON (หากมีการใช้ API ที่มีรูปแบบข้อมูลอื่น ๆ คุณจะต้องแปลงข้อมูลให้เป็น JSON ตามรูปแบบข้อมูลที่คุณต้องการ)
        //echo "21352+-+-<br>";
        $json_data2 = json_encode($array_c, JSON_UNESCAPED_UNICODE|JSON_FORCE_OBJECT);
    
        //echo $json_data2."----*+++*----";
        //print_r($json_data);
    } else {
        // หากมีข้อผิดพลาดในการดึงข้อมูล
        echo json_encode(['error' => 'ไม่สามารถดึงข้อมูลได้']);
    }

    $jsonData2 = json_encode($array_c, JSON_UNESCAPED_UNICODE|JSON_FORCE_OBJECT);

    //echo $jsonData2."<br>";

    //------------------------- ++++ --------------------------------

    //$array_s = array();
    $array_s = array(
        "tb1" => $array_c,
        "tb2" => $array_a
    );

    $jsonData3 = json_encode($array_s, JSON_UNESCAPED_UNICODE|JSON_FORCE_OBJECT);

    echo $jsonData3."<br>";
        
        //array_push($array_c,$array_d);
    //print_r($array_s);

    ?><br><br><?php

    // $filename = 'data_api.json';

    // // เปิดไฟล์เพื่อเขียนข้อมูลแบบ Streaming JSON
    // $file = fopen($filename, 'w');

    // if ($file) {
    //     $json = json_encode($array_s, JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);

    //     if (json_last_error() === JSON_ERROR_NONE) {
    //         fwrite($file, $json);
    //         fclose($file);
    //         echo "JSON data has been written to $filename";
    //     } else {
    //         echo "Error encoding JSON: " . json_last_error_msg();
    //     }
    // } else {
    //     echo "Error opening file for writing";
    // }
?>
