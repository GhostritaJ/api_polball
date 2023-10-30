<style>
    .row.p-1.mb-2{
        background-color: white !important;
    }
    td, tr{
        height: 20px;
    }
</style>
<?php

include('simple_html_dom.php');

$html = new simple_html_dom();
$html->load_file('https://xn--l3car8bzaq6f.cc/');

//---------------------------------- TABLE 1 ------------------------------------------

//$div1 = $html->find('div#myBtnContainer.row.p-1', 0)->plaintext;

$span1 = $html->find('span.d-flex', 0)->plaintext;                  //เลือก ลีก/ประเทศ
echo $span1; ?><br><br><?php

$divt1 = $html->find('div.dropdown-menu.dropdown-menu-dark', 0)->plaintext;         //all
//$count1 = strlen($divt1);       //echo $count1;
$str1 = explode("    ", $divt1);

foreach ($str1 as $value) {
    echo $value."<br>";
}
echo count($str1);

?><br><br><?php

//---------------------------------- TABLE 2 ------------------------------------------
?>
<table>
    <td>
        <?php
//---------------------------------- league ------------------------------------------------

            $divt20 = $html->find('div.row.p-1.mb-2', 0)->plaintext;
            $divt20_elements = $html->find('div.row.p-1.mb-2');
            $count_divt20 = count($divt20_elements);

            //echo $divt20_elements[0];  ?><?php

            for($i=0;$i<$count_divt20;$i++){
                echo $divt20_elements[$i];
                ?><br><?php
            }

            $divt2t2 = $html->find('div.col.p-2.border.border-secondary', 0)->plaintext;
            $str2 = explode("    ", $divt2t2);

            echo $count_divt20;  ?><br><br><?php
        ?>
    </td>
    <td>
        <?php
////---------------------------------- live time ------------------------------------------------

            //$divt21td = $html->find('span.timedatecss', 0)->plaintext;
            $divt21td_elements = $html->find('span.timedatecss');
            $count_divt21td = count($divt21td_elements);

            for($i=0;$i<$count_divt21td;$i++){
                echo $divt21td_elements[$i];
                ?><br><br><?php
            }

            echo $count_divt21td;  ?><br><br><?php
        ?>
    </td>
    <td>
        <?php
////---------------------------------- home tame ------------------------------------------------

            $divt21ht = $html->find('div.col-3.d-flex.justify-content-end.align-items-center', 1)->plaintext;
            $divt21ht_elements = $html->find('div.col-3.d-flex.justify-content-end.align-items-center');
            $count_divt21ht = count($divt21ht_elements);

            for($i=0;$i<$count_divt21ht;$i++){
                echo $divt21ht_elements[$i];
                ?><br><?php
            }

            echo $count_divt21ht;  ?><br><br><?php
        ?>
    </td>
    <td>
        <?php
////---------------------------------- score ------------------------------------------------

            $divt21sc = $html->find('span.border.border-secondary', 1)->plaintext;
            //echo $divt21sc; 
            $divt21sc_elements = $html->find('span.border.border-secondary');
            $count_divt21sc = count($divt21sc_elements);

            for($i=0;$i<$count_divt21sc;$i++){
                echo $divt21sc_elements[$i];
                ?><br><br><?php
            }

            echo $count_divt21sc;  ?><br><br><?php
        ?>
    </td>
    <td>
        <?php
////---------------------------------- away team ------------------------------------------------

            $divt21at = $html->find('div.col-3.d-flex.justify-content-start.align-items-center', 1)->plaintext;
            $divt21at_elements = $html->find('div.col-3.d-flex.justify-content-start.align-items-center');
            $count_divt21at = count($divt21at_elements);

            for($i=0;$i<$count_divt21at;$i++){
                echo $divt21at_elements[$i];
                ?><br><?php
            }

            echo $count_divt21at;  ?><br><br><?php
        ?>
    </td>
    <td>
        <?php
////---------------------------------- links-name ------------------------------------------------
            
            //$divt21link = $html->find('div.accordion-body', 7)->plaintext;
            //echo "--".$divt21link; ?><br><?php
            $count_divt21link_url_0 = 0;                                          //use for url
            $count_divt21link_url_1 = 0;                                          //use for url
            //$count_divt21link_url[][];                                          //use for url
            $divt21link_elements = $html->find('div.accordion-body');
            $count_divt21link = count($divt21link_elements);
            for($i=1;$i<$count_divt21link;$i++){
                $divt21link_for = $html->find('div.accordion-body', $i)->plaintext;
                //$divt21link_for = $html->find('a', $i+3)->getAttribute('href');
                $strt2_l1 = explode("เลือกลิ้งดูบอลด้านล่าง ", $divt21link_for);
                $strt2_l1_2 = explode(" คลิกดูบอล ", $strt2_l1[1]);
                foreach ($strt2_l1_2 as $value) {
                    echo $value."---<br>";
                    $divt21link_url[$count_divt21link_url_0][$count_divt21link_url_1] = $value;
                    //echo $count_divt21link_url[$count_divt21link_url_0][$count_divt21link_url_1]."-<br>";
                    $count_divt21link_url_1 = $count_divt21link_url_1+1;
                }
                //echo "<br>";
                $count_divt21link_url_0 = $count_divt21link_url_0+1;
                
            }
            ?><br><?php
            //var_dumb($strt2_l1_2);
            ?><br><?php
            // //var_dump($divt21link_url);    ?><br><?php
            // echo $count_divt21link_url_0;     ?><br><?php
            // echo $count_divt21link_url_1;     ?><br><?php
            // //echo $strt2_l1_2[4];
            // //var_dump($strt2_l1_2);
            // $count_strt2_l1_2 = count($strt2_l1_2);
            // echo $count_strt2_l1_2;     ?><br><?php
            // echo $count_divt21link;     ?><br><br><?php

            // $divt21url_all = $html->find('div.row.mb-2.border');
            // $count_divt21url_all = count($divt21url_all);
            // echo $count_divt21url_all; ?><br><?php

            // $divt21link_url = array(                                          //use for url
            //     array("",)
            // );
        ?>
    </td>
    <td>
        <?php
////---------------------------------- links-url ------------------------------------------------

            $divt21url_all = $html->find('div.row.mb-2.border');
            $count_divt21url_all = count($divt21url_all);
            $divt21url = $html->find('a',9)->getAttribute('href');
            //$divt21url_elements01 = $html->find('div.accordion-body',1)->getAttribute('href');
            //echo "--".$divt21url; ?><br><?php
            $divt21url_elements = $html->find('div.accordion-body');
            $count_divt21url = count($divt21url_elements);
            echo $count_divt21url;

            for($i=1;$i<=$count_divt21url_all;$i++){
                //$divt21url_for = $html->find('div.accordion-body', $i)->plaintext;
                $divt21url_for = $html->find('a', $i+8)->getAttribute('href');
                echo $divt21url_for."<br>";
                //$count_divt21url_for = count($divt21url_for);
                //echo $count_divt21url_for;
            }
            //$count_divt21link_url_1;
            for($i=1;$i<$count_divt21link;$i++){
                $divt21url_for = $html->find('a', $i+8)->getAttribute('href');
                // foreach ($divt21url_for as $value) {
                //     //echo $value."---<br>";
                // }
                //echo "<br>";
                $count_divt21link_url_0 = $count_divt21link_url_0+1;
                
            }
            
            ?><br><br><?php
            echo $count_divt21url;  ?><br><br><?php

            $divt21url_all = $html->find('div.row.mb-2.border');
            $count_divt21url_all = count($divt21url_all);
            echo $count_divt21url_all; ?><br><?php
        ?>
    </td>
</table>
<?php




//-----------------------------------------------------------------

?><br><?php

// URL ของเว็บไซต์ที่คุณต้องการดึงข้อมูล
$url = 'https://xn--l3car8bzaq6f.cc/'; // เปลี่ยน URL ตามที่คุณต้องการ

// ดึงข้อมูลจาก URL
$data = file_get_contents($url);
//var_dump($data);

if ($data !== false) {
    // แปลงข้อมูล JSON ให้อยู่ในรูปแบบของ PHP
    $decodedData = json_decode($data, true);

    if ($decodedData !== null) {
        // บันทึกข้อมูลลงในไฟล์ JSON
        file_put_contents('data.json', json_encode($decodedData));
        echo 'บันทึกข้อมูลลงในไฟล์ JSON เรียบร้อย';
    } else {
        echo 'ไม่สามารถแปลงข้อมูล JSON ได้';
    }
} else {
    echo 'ไม่สามารถดึงข้อมูลจากเว็บได้';
}