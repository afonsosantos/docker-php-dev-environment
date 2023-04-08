<?php

namespace internal;

class Model
{
    private static $PDODBConn = null;

    // ----------------------------------------------------------------------------
    // Returns a database connection
    // ----------------------------------------------------------------------------
    public static function connect()
    {
        if (static::$PDODBConn) {
            return static::$PDODBConn;
        }

        try {
            $dbHost = 'mysql';
            $dbPort = 3306;
            $dbDatabase = 'ficha04';
            $dUsername = 'dev';
            $dbPassword = 'dev';

            $dsn = "mysql:dbname=$dbDatabase;host=$dbHost;port=$dbPort";

            static::$PDODBConn = new \PDO($dsn, $dUsername, $dbPassword);
        } catch (Exception $e) {
            static::$PDODBConn = null;
        }

        return static::$PDODBConn;
    }
}
