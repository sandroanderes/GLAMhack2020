<?php
$host_name = "localhost";
$database = "GLAMhack2020"; // Change your database name
$username = "root";          // Your database user id 
$password = "password";          // Your password

//////// Do not Edit below /////////
try {
$pdo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?>