<?php

namespace App;

    abstract class Conn
    {
        public $db = DRIVE;
        public $host = HOST;
        public $dbname = DBNAME;
        public $pass = PASS;
        public $user = USER;
        public $port = PORT;
        public $connect = null;

        public function connect(){
            try {
                $this->connect = new PDO($this->db . ':host='. $this->host . ';port='. $this->port . ';dbname='. $this->dbname, $this->user, $this->pass);
                return $this->connect;
            } catch (Exception $e) {
                die('Erro: algo com banco de dados não está correto :(');
            }
        }
    }

?>