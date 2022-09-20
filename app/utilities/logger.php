<?php

class Logger {
    private $handle;
    private static $instance;

    private function __construct() {
        $this->handle = fopen('/var/log/app-log/' . date('y-m-d') . '.log', 'a+');
        $this->log('Log opened');
    }

    public function close() {
        $this->log('Log closed');
        fclose($this->handle);
    }

    public static function get_instance(): self {
        if(!isset(static::$instance)) {
            static::$instance = new Logger();
        }
        return static::$instance;
    }

    public function log(string $string) {
        fwrite($this->handle, date('[H:i:s]') . ': ' . $string . PHP_EOL);
    }
}