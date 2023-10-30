<?php
    require_once('index2.php');
    require_once('dbconfig.php');
    

    $db = new Database('localhost', 'polball', 'root', '');

    //$show = array; 

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        echo json_decode($db->query('SELECT * FROM polball_tb'));
    }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo 'This is no POST';
    }else{
        http_response_code(405);
    }

?>