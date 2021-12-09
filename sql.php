<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error() . "<br>");
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS STROM";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully" . "<br>";
} else {
  echo "Error creating database: " . mysqli_error($conn) . "<br>";
}


$db_selected = mysqli_select_db($conn, 'STROM');
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error() . "<br>");
}

// sql to create table
$sql = "CREATE TABLE Category (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table MyGuests created successfully". "<br>";
    } else {
      echo "Error creating table: " . mysqli_error($conn). "<br>";
    }
$sql = "CREATE TABLE Product (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    price VARCHAR(10),
    pic VARCHAR(100) NOT NULL,
    categoryId INT(6) NOT NULL
    )";
    
    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully". "<br>";
    } else {
        echo "Error creating table: " . mysqli_error($conn). "<br>";
    }


// Categories
$sql = "INSERT INTO Category (id, title)
VALUES (1, 'Man'); ";

$sql .= "INSERT INTO Category (id, title)
VALUES (2, 'Women'); ";

$sql .= "INSERT INTO Category (id, title)
VALUES (3, 'Kids'); ";

if (mysqli_multi_query($conn, $sql)) {
  echo "Product created successfully". "<br>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn). "<br>";
}

// Products
$sql = "INSERT INTO Product (id, title, price, pic, categoryId)
VALUES (1, 'Regular Print Heart Casual', '39.21 $', 'pic/women1.jpg', 1); ";
$sql .= "INSERT INTO Product (id, title, price, pic, categoryId)
VALUES (2, 'Faux Fur Fashion Wrap', '30.99 $', 'pic/women2.jpg', 2); ";
$sql .= "INSERT INTO Product (id, title, price, pic, categoryId)
VALUES (3, 'One Shoulder Sleeveles Dresses', '30.99 $', 'pic/women4.jpg', 3); ";

if (mysqli_multi_query($conn, $sql)) {
    echo "Product created successfully". "<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn). "<br>";
}
mysqli_close($conn);
?>