<?php
$servername = "localhost:3306";
$username = "hacker20";
$password = "Welcome1";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
}
echo "Verbindung erfolgreich";
?> 