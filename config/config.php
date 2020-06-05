<?php
$servername = "localhost:3306";
$username = "hacker20";
$password = "Welcome1";

// Verbindung herstellen
$conn = mysqli_connect($servername, $username, $password);

// Verbindung prüfen
if (!$conn) {
  die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
}
echo "Verbindung erfolgreich";
return $conn;

?>