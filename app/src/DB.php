<?php

class DB
{
    private static ?PDO $pdo = null;

    private function __construct()
    {
    }

    public static function connect(): ?PDO
    {
        if (self::$pdo === null) {
            try {
                self::$pdo = new PDO(
                    DB_DSN,
                    DB_USERNAME,
                    DB_PASSWORD,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES => false, 
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
                    ]
                );
            } catch (PDOException $e) {
                die("Adatbázis hiba: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
