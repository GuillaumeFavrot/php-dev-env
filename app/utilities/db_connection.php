<?php

require_once('logger.php');

class Db_connection {

    //placeholder code to replace with inv variables
    private string $dsn = 'mysql:dbname=dev_env_db;host=db';
    private string $username = 'test';
    private string $password = 'test';

    public static $instance;
 
    private function __construct() {
        $logger = Logger::get_instance();
        try {
            self::$instance = new PDO($this->dsn, $this->username, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            $logger->log('Connected to the database');
        } catch (PDOException $e) {
            $logger->log('MySQL connection error: ' . $e->getMessage());
        }
    }
    
    public static function get_instance(): PDO {
        if(!isset($instance)) {
            new Db_connection();
        }
        return self::$instance;
    }
}