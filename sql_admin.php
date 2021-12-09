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
$sql = "CREATE DATABASE IF NOT EXISTS dblogin";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully" . "<br>";
} else {
  echo "Error creating database: " . mysqli_error($conn) . "<br>";
}


$db_selected = mysqli_select_db($conn, 'dblogin');
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error() . "<br>");
}

// sql to create table
$sql = "CREATE TABLE admins (
    username varchar(30) PRIMARY KEY,
    pass VARCHAR(30) NOT NULL
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table MyGuests created successfully". "<br>";
    } else {
      echo "Error creating table: " . mysqli_error($conn). "<br>";
    }


$sql = "INSERT INTO admins (username, pass)
VALUES ('dounyaa.alaoui@gmail.com', 'dounya123'); ";


if (mysqli_query($conn, $sql)) {
  echo "Product created successfully". "<br>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn). "<br>";
}

mysqli_close($conn);
?>