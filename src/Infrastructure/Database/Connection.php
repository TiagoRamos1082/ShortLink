<?php

namespace App\Infrastructure\Database;

use Dotenv;
use PDO;

class Connection
{
    public static function create(): PDO 
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 3));
        $dotenv->safeLoad();

        $host = $_ENV['DB_HOST'];
        $port = $_ENV['DB_PORT'];
        $dbname = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];

        return new PDO(
            "mysql:host={$host};port={$port};dbname={$dbname}",
            $user,
            $password,
            [
                PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES      => false,
            ]
        );
    }
}


?>