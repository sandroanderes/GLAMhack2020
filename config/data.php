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

// SELECT Teaser Artikel
function get_teas_articles()
{
    $pdo = get_db_connection();

    $statement = $pdo->prepare("SELECT id, title, teaser, img_url, date, newspaper_name FROM articles");
    $statement->execute();
    $result = $statement->fetchAll();
    return $result;
}

// SELECT Artikel by ID
function get_article_by_id($id)
{
    $pdo = get_db_connection();

    $statement = $pdo->prepare("SELECT * FROM articles WHERE id = 1");
    $statement->execute();
    $result = $statement->fetch();
    return $result;
}