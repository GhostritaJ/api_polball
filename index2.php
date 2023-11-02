<?php

include('simple_html_dom.php');

$html = new simple_html_dom();
$html->load_file('https://xn--l3car8bzaq6f.cc/');

$values = [];

//---------------------------------- TABLE 1 ------------------------------------------

//$div1 = $html->find('div#myBtnContainer.row.p-1', 0)->plaintext;

$span1 = $html->find('span.d-flex', 0)->plaintext;                  //เลือก ลีก/ประเทศ
//echo $span1; ?><?php

$divt1 = $html->find('div.dropdown-menu.dropdown-menu-dark', 0)->plaintext;         //all
//$count1 = strlen($divt1);       //echo $count1;
$str1 = explode("    ", $divt1);
$str2t1 = implode("    ", $str1);
foreach ($str1 as $value) {
    //echo $value."<br>";
}
//echo count($str1); 
//echo $str2t1; 
//$values = $values.$str2t1;

?>
        <?php
//---------------------------------- league ------------------------------------------------

            $divt20 = $html->find('span.col.text-light.p-1', 0)->plaintext;
            $divt20_elements = $html->find('span.col.text-light.p-1');
            $count_divt20 = count($divt20_elements);
            

            for($i=0;$i<$count_divt20;$i++){
                $divt20_elements_exp = explode("<",$divt20_elements[$i]);
                //echo $divt20_elements_exp[1];
                $divt20_elements_exp2 = explode(">",$divt20_elements_exp[1]);
                //echo $divt20_elements_exp2[1];
                ?><?php
            }

            // $divt2t2 = $html->find('div.col.p-2.border.border-secondary', 0)->plaintext;
            // $str2 = explode("    ", $divt2t2);

            //echo $count_divt20;  ?>
    
        <?php
////---------------------------------- live time ------------------------------------------------

            //$divt21td = $html->find('span.timedatecss', 0)->plaintext;
            $divt21td_elements = $html->find('span.timedatecss');
            //$divt21td_elements_slice = array_slice($divt21td_elements,2,10);

            $count_divt21td = count($divt21td_elements);

            //echo "**".$divt21td_elements[0]; ?><?php

            $divt21td_elements_exp_arr;

            for($i=0;$i<$count_divt21td;$i++){
                $divt21td_elements_exp = explode(" ",$divt21td_elements[$i]);
                //$divt21td_elements_slice = slice($divt21td_elements_exp,0,3);
                //print_r($divt21td_elements_exp);
                $divt21td_elements_exp_arr[$i] = $divt21td_elements_exp[2]." ".$divt21td_elements_exp[3];
                //echo $divt21td_elements_exp_arr[$i];
                ?><?php
            }
            //echo $divt21td_elements_exp_arr[1]; ?><?php
            //echo $count_divt21td;  ?><?php
        ?>
    
        <?php
////---------------------------------- home team ------------------------------------------------

            $divt21ht = $html->find('div.col-3.d-flex.justify-content-end', 1)->plaintext;
            $divt21ht_elements = $html->find('div.col-3.d-flex.justify-content-end');
            //echo $divt21ht_elements[1];
            $count_divt21ht = count($divt21ht_elements);

            $divt21ht_elements_exp_arr;

            for($i=0;$i<$count_divt21ht;$i++){
                //echo $divt21ht_elements[$i];
                $divt21ht_elements_exp = explode("<",$divt21ht_elements[$i]);
                //echo $divt21ht_elements_exp[1];
                $divt21ht_elements_exp2 = explode(">",$divt21ht_elements_exp[1]);
                $divt21ht_elements_exp_arr[$i] = $divt21ht_elements_exp2[1];
                //echo $divt21ht_elements_exp_arr[$i]."<br>";
                ?><?php
            }
            //echo $divt21ht_elements_exp_arr[0]."<br>";
            //echo $count_divt21ht;  ?><?php
        ?>
    
        <?php
////---------------------------------- score ------------------------------------------------

            $divt21sc = $html->find('span.border.border-secondary', 1)->plaintext;
            //echo $divt21sc; 
            $divt21sc_elements = $html->find('span.border.border-secondary');
            $count_divt21sc = count($divt21sc_elements);
            $homescore = array();
            $awayscore = array();
            
            for($i=0;$i<$count_divt21sc;$i++){
                $divt21sc_elements_exp = explode(" : ",$divt21sc_elements[$i]);
                $homescore[$i] = $divt21sc_elements_exp[0];
                $awayscore[$i] = $divt21sc_elements_exp[1];
                //echo $divt21sc_elements[$i]."  ".$homescore[$i]." :: ".$awayscore[$i];
                ?><?php
            }
            // echo $divt21sc_elements[0]."  ".$homescore[0]." :: ".$awayscore[0]."<br>";
            // echo $divt21sc_elements[1]."  ".$homescore[1]." :: ".$awayscore[1]."<br>";
            // echo $divt21sc_elements[2]."  ".$homescore[2]." :: ".$awayscore[2]."<br>";
            //echo $count_divt21sc;  ?><?php
        ?>
    
        <?php
////---------------------------------- away team ------------------------------------------------

            $divt21at = $html->find('div.col-3.d-flex.justify-content-start', 1)->plaintext;
            $divt21at_elements = $html->find('div.col-3.d-flex.justify-content-start');
            $count_divt21at = count($divt21at_elements);

            $divt21at_elements_exp_arr;

            for($i=0;$i<$count_divt21at;$i++){
                //echo $divt21at_elements[$i];
                $divt21at_elements_exp = explode("<",$divt21at_elements[$i]);
                //echo $divt21at_elements_exp[1]."<br>";
                $divt21at_elements_exp2 = explode(">",$divt21at_elements_exp[1]);
                //echo $divt21at_elements_exp2[1]."<br>";
                $divt21at_elements_exp_arr[$i] = $divt21at_elements_exp2[1];
                //echo $divt21at_elements_exp_arr[$i]."<br>";
                ?><?php

                //echo $divt21at_elements[$i];
            }

            //echo $count_divt21at;  ?><?php
        ?>
    
        <?php
////---------------------------------- links-name ------------------------------------------------
            
                                                     
            $divt21link_elements0 = $html->find('div.accordion-body a');
            $divt21link_elements0_copy = array();
            $urls = array();
            
            $divt21link_elements = $html->find('div.accordion-body');
            $divt21link_elementss = $html->find('div.accordion-body a');
            $divt21url_elements = $html->find('a',9)->getAttribute('href');
            $count_divt21link = count($divt21link_elements);
            $count_divt21links = count($divt21link_elementss);
            $num_link = 0;
            //echo $divt21link_elements[0].'<br>'.$divt21link_elements[1].'<br>'.$divt21link_elements[2];
            for($i=0;$i<$count_divt21link;$i++){
                $divt21link_for = $html->find('div.accordion-body', $i)->plaintext;
                //echo $divt21link_for."<br><br>";
                //$divt21link_for = $html->find('a', $i+8)->getAttribute('href');
                $strt2_l1 = explode("เลือกลิ้งดูบอลด้านล่าง ", $divt21link_for);
                //echo "-*-".$strt2_l1[1]."<br>";
                $strt2_l1_2 = explode(" คลิกดูบอล ", $strt2_l1[1]);
                $count_strt2_l1_2 = count($strt2_l1_2)-1;
                //echo $count_strt2_l1_2."<br>";
                //echo $strt2_l1_2[0].",<br>".$strt2_l1_2[1].",<br>".$strt2_l1_2[2].",<br>".$strt2_l1_2[3].",<br>";
                for($j=0;$j<$count_strt2_l1_2;$j++){
                    if($strt2_l1_2[$j] != ""){
                        $link = $divt21link_elementss[$num_link];
                        $url = $link->href;
                        //echo "-*-".$strt2_l1_2[$j]." +*+ ".$url;
                        $num_link++;
                        //echo "<br>";
                    }
                }
            }
            ?><?php
            //echo $count_divt21link."<br>";
            //echo $count_divt21links;
            ?><?php
        ?>
    
        <?php
////---------------------------------- links-url ------------------------------------------------

            $divt21url_all = $html->find('div.row.mb-2.border');
            $count_divt21url_all = count($divt21url_all);
            $divt21url = $html->find('a',9)->getAttribute('href');
            //$divt21url_elements01 = $html->find('div.accordion-body',1)->getAttribute('href');
            //echo "--".$divt21url; ?><?php
            $divt21url_elements = $html->find('div.accordion-body');
            $count_divt21url = count($divt21url_elements);
            //echo $count_divt21url;

            for($i=1;$i<=$count_divt21url_all;$i++){
                //$divt21url_for = $html->find('div.accordion-body', $i)->plaintext;
                $divt21url_for = $html->find('a', $i+8)->getAttribute('href');
                //echo $divt21url_for."<br>";
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
                //$count_divt21link_url_0 = $count_divt21link_url_0+1;
                
            }
            
            ?><?php
            //echo $count_divt21url;  ?><?php

            $divt21url_all = $html->find('div.row.mb-2.border');
            $count_divt21url_all = count($divt21url_all);
            //echo $count_divt21url_all; ?><?php
        ?>
    

