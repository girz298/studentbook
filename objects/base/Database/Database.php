<?php

class Database
{
    private static $host = 'localhost';
    private static $db   = 'proba';
    private static $user = 'root';
    private static $pass = 'root';
    private static $charset = 'utf8';
    private static $pdo;
    private static $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public static function getPDO()
    {
        $dsn = 'mysql:host=' . self::$host . ';dbname='. self::$db . ';charset=' . self::$charset;
        if (self::$pdo instanceof PDO) {
            return self::$pdo;
        }
        self::$pdo = new PDO($dsn, self::$user, self::$pass, self::$opt);
        return self::$pdo;
    }
}









