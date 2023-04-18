<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "goeland";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO user(mail, prenom, nom, mdp)
VALUES ('{$_POST['mail']}','{$_POST['prenom']}','{$_POST['nom']}','{$_POST['mdp']}')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 