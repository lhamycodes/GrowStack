<?php

    class Database
    {
        private $serverName;
        private $userName;
        private $passWord;
        private $dbName;

        protected function connect(){
            $this->serverName = "localhost";
            $this->userName = "root";
            $this->passWord = "";
            $this->dbName = "growstack";

            $conn = new mysqli($this->serverName, $this->userName, $this->passWord, $this->dbName);
            return $conn;
        }
    }
    
?>