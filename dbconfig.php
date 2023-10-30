<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'gmanga_db');
    // $host       = $_SERVER["localhost"];
    // $dbname     = $_SERVER["root"];
    // $username   = $_SERVER["polball"];
    // $password   = $_SERVER[""];
    class Database {
        private $pdo;

        // public function __construct($host, $dbname, $username, $password) {
        //     $con = new PDO('mysql:host='.$host.'; dbname='.$dbname.';', $username, $password);
        //     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     $this->pdo = $con;
        // }

        // public function __construct() {
        //     $con = new PDO('mysql:host='.$host.'; dbname='.$dbname.';', $username, $password);
        //     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     $this->pdo = $con;
        // }

        public function __construct() {
            $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
            $this->dbcon = $con;
            if(mysqli_connect_errno()){
                echo "Failed to connect to MySQL : ".mysqli_connect_error();
            }
        }

        // public function query($show) {
        //     $stmt = $this->pdo->prepare($show);
        //     $stmt->execute();

        //     if ($show) {
        //         $data = $stmt->fetchAll();
        //         return $data;
        //     }
        // }

        public function query($show) {
            $stmt = $this->pdo->prepare($show);
            $stmt->execute();

            if ($show) {
                $data = $stmt->fetchAll();
                return $data;
            }
        }

        public function insert($league, $date_time, $home_team, $away_team, $score, $link_name, $link_url){
            $result = mysqli_query($this->dbcon, "INSERT INTO polball_tb(league, date_time, home_team, away_team,
                            score, link_name, link_url)
            VALUES('$league','$date_time','$home_team','$away_team','$score','$link_name','$link_url')");
            return $result;
        }
    }


?>