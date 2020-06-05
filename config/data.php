<?php

// Datenbankverbindung
// Verbindung herstellen
function get_db_connection()
{
    global $host_name, $database, $username, $password;
    try {
        $pdo = new PDO('mysql:host=' . $host_name . ';dbname=' . $database, $username, $password);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    return $pdo;
}

// SELECT alle Artikel
function get_all_articles()
{
    $pdo = get_db_connection();

    $statement = $pdo->prepare("SELECT * FROM articles");
    $statement->execute();
    $result = $statement->fetchAll();
    return $result;

    if ($statement->execute()) {
        while ($row = $statement->fetch()) {
            echo $row['title'] . "<br />";
        }
    }
}