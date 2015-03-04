<?php
    /**
     * Establish a database connection. 
     * 
     * @return PDO
     */
    function dbConnection() {
        $user = 'jt13g';
        $password = 'Nogard45';
        
        $host = 'dbjt13g-lis4368.cqkep76quo86.us-west-2.rds.amazonaws.com';
        $dbName = 'lis4368';
        
        return new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
    }