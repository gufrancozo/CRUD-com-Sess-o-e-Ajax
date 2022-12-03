<?php

class Database {
    public function getDatabase() {
        $env = parse_ini_file('.env');
        $connection = mysqli_connect('localhost:8000', 'SYSDBA', 'msaterkey');
        $db = new PDO($connection);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $db;
    }
}