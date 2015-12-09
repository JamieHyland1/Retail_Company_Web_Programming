<?php
class Connection
{
    private static $connection = NULL;
        public static function getInstance()
        {
             if(Connection::$connection === NULL)
            {
                // connect to the database
                $host = "localhost";
                $db = "highland_books_database";
                $user = "JamieUser";
                $password = "Root";



                    $dsn = "mysql:host=" . $host . ";dbname=" . $db;
            Connection::$connection = new PDO($dsn, $user, $password);
            if (!Connection::$connection) {
                die("Could not connect to database");
            }
        }
        
        return Connection::$connection;
    }
 }

 ?>

