<?php
declare(strict_types=1);

final class Db {
    private static ?PDO $pdo = null;

    public static function conn(): PDO {
        if (self::$pdo instanceof PDO) {
            return self::$pdo;
        }

        $host = '127.0.0.1';    
        $port = '3306';
        $dbname = 'killofsun';  
        $user = 'root';
        $pass = '';             

        $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4";

        try {
            self::$pdo = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);

            return self::$pdo;
        } catch (PDOException $e) {
            
            error_log('[DB ERROR] ' . $e->getMessage());
            http_response_code(500);
            exit('Erro interno ao conectar ao banco.');
        }
    }
}

