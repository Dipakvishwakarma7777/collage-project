<?php

class Database {
    // This variable holds the database connection
    private static $connection = null;

    // This is the connect() function your DashboardService is looking for
    public static function connect() {
        
        // If we haven't connected yet, establish the connection
        if (self::$connection === null) {
            
            // The credentials from your first error message
            $host = 'localhost';
            $username = 'root';
            $password = ''; // Leave blank if you have no XAMPP password
            $database = 'mca_event'; 

            // Create a new mysqli connection
            self::$connection = new mysqli($host, $username, $password, $database);

            // Check if the connection failed
            if (self::$connection->connect_error) {
                die("Database connection failed: " . self::$connection->connect_error);
            }
        }

        // Return the active connection
        return self::$connection;
    }
}