<?php
class Connection
{
    private static $connection = NULL; //setting up The connection Object
        
    public static function getInstance()
    {
        if(Connection::$connection === NULL)
        {
            // connect to the database
            $host = "localhost"; //logging into the database
            $db = "highland_books_database";
            $user = "JamieUser";
            $password = "Jamie";



            $dsn = "mysql:host=" . $host . ";dbname=" . $db;
            Connection::$connection = new PDO($dsn, $user, $password);
            if (!Connection::$connection)
            {
                die("Could not connect to database");
            }
        }
        
        return Connection::$connection;
    }
 }

 ?>

