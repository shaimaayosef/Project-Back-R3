<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BizNews";
$createDb = false;
$usersTable = false;
$newsTable = false;
$categoriesTable = false;

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select database
$conn->select_db($dbname);

// Create database
if ($createDb) {
    $dbQuery = "CREATE DATABASE $dbname";
    if ($conn->query($dbQuery) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

// Create users table
if ($usersTable) {
    $usersTblQuery = "CREATE TABLE users (
        Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        RegistrationDate DATE NOT NULL DEFAULT CURDATE(),
        Name VARCHAR(50) NOT NULL,
        UserName VARCHAR(50) NOT NULL,
        Email VARCHAR(100) NOT NULL,
        Password VARCHAR(50) NOT NULL,
        Active ENUM('true', 'false') NOT NULL
    )";

    if ($conn->query($usersTblQuery) === TRUE) {
        echo "Table users created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}
 
// Create news table
if ($newsTable) {
    $newsTblQuery = "CREATE TABLE news (
        Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Author VARCHAR(100) NOT NULL,
        Title TEXT NOT NULL,
        Content TEXT NOT NULL,
        Image VARCHAR(200) NOT NULL,
        NewsDate DATE NOT NULL DEFAULT CURDATE(),
        Active ENUM('true', 'false') NOT NULL,
        CategoryName VARCHAR(100) NOT NULL
    )";

    if ($conn->query($newsTblQuery) === TRUE) {
        echo "Table news created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

// Create categories table
if ($categoriesTable) {
    $categoriesTblQuery = "CREATE TABLE categories (
        Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        CategoryName VARCHAR(100) NOT NULL
    )";

    if ($conn->query($categoriesTblQuery) === TRUE) {
        echo "Table categories created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

$conn->close();
?>