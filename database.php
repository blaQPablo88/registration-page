<?php

// Database connection parameters
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "mydatabase"; // Change this to the name of the database you want to create

// Connect to MySQL server
$conn = mysqli_connect($hostName, $dbUser, $dbPassword);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$sqlCreateDb = "CREATE DATABASE IF NOT EXISTS $dbName";
if (mysqli_query($conn, $sqlCreateDb)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Select the created database
mysqli_select_db($conn, $dbName);

// Create users table if it doesn't exist
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sqlCreateTable)) {
    echo "Table 'users' created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Proceed with your existing code below
// For example, user registration logic

?>
