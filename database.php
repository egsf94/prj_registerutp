<?php

    class Database{
    
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;
    
        public function __construct(){
            $this->host = "192.168.0.8";
            $this->db = "dbregutp";
            $this->user = "conec";
            $this->password = 'Base2023';
            $this->charset = 'utf8mb4';
        }
    
        function connect(){
            try{
                $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                
                $pdo = new PDO($connection, $this->user, $this->password, $options);
        
                return $pdo;
            }catch(PDOException $e){
                print_r('Error connection: ' . $e->getMessage());
            }
        }
    
    }

    // try {
    //     $connect = new PDO("mysql:host=$host;port=$port;charset=utf8;dbname=$dbname", $username, $password);
    
    // } catch (PDOException $pe) {
    //     die("Could not connect to the database $dbname :" . $pe->getMessage());
    // }
    
    ?>