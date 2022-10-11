<?php

class Connection
{
    private static int $count = 0;
    private string $connectionId;

    public function __construct()
    {
        self::$count++;
    }

    public function __destruct()
    {
        self::$count--;
    }

    public function getCount()
    {
        return self::$count;
    }

    public function setConnectionId($ipAdress)
    {
        if (filter_var($ipAdress, FILTER_VALIDATE_IP)) {
        
            $this->connectionId = $ipAdress . '_' . self::$count;

            return;
        }

        die('Not a valid IP adress.')
    }

    public function getConnectionId() {
        return $this->connectionId;
    }
}