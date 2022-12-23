<?php

class ConnexionDB {
    protected $pdo;
    private static $ConnexionDB;

    private function __construct()
    {
        $content = file_get_contents(__DIR__."\config.json");
        $params=json_decode($content);
        
        $pdo = new PDO("mysql:host=".$params->host.";dbname=".$params->dbname,$params->username,$params->password);
        $this->pdo = $pdo;
    }

    public static function getInsatnce(){
        if(self::$ConnexionDB==null){
            self::$ConnexionDB=new ConnexionDB();
        }
        return self::$ConnexionDB;
    }
    private function __clone()
    {
        
    }

    /**
     * Get the value of pdo
     */ 
    public function getPdo()
    {
        return $this->pdo;
    }
}