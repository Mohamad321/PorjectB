<?php

define('DB_HOST', 'donevisual.com');
define('DB_NAME', 'u69360p66015_mirotterdam');
define('DB_USER', 'u69360p66015_mirotterdam');
define('DB_PASS', '7bqP7ZQyCtufryWW');
define('DB_CHARSET', 'utf8mb4');
 
$CONN = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS);
 

class Conn
{
    private $res;
 
    public function __construct($query)
    {
        global $CONN;
        $this->res = $CONN->prepare($query);
    }
 
    public function FetchAll($array = [])
    {
        $this->res->execute($array);
        return $this->res->fetchAll();
    }
 
    public function Fetch($array = [])
    {
 
        $this->res->execute($array);
        return $this->res->fetch();
    }
 
    public function Set($array = [])
    {
        $this->res->execute($array);
  
    }
 
    public function Count($array = [])
    {
        $this->res->execute($array);
        return $this->res->rowCount();
    }
}



?>