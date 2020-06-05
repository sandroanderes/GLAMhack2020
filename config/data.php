<?php

// Datenbankverbindung
// Verbindung herstellen
function get_db_connection()
{
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verbindung prüfen
    if ($conn->connect_error) {
        die("Verbindung fehlgeschlagen: " . $conn->connect_error);
    }
    echo "Verbindung erfolgreich";
    return $conn;
}
/*
function get_db_connection()
{

    $base_url = "https://glamhack2020.sandroanderes.ch/";

    $db_host = "localhost:3306";
    $db_user = "hacker20";
    $db_pass = "Welcome1";
    $db_charset = "utf8mp4";

    global $db_host, $db_name, $db_user, $db_pass, $db_charset;

    $dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];

    try {
        $db = new PDO($dsn, $db_user, $db_pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int) $e->getCode());
    }

    // $db gespeicherte Datenbankverbindung zurückgeben
    return $db;
}
*/

// SELECT everything
function get_all_articles()
{
    $conn = get_db_connection();
    $sql = "SELECT * FROM articles-1914";
    $result = $conn->query($sql);
    /*$db = get_db_connection();
    $sql = "SELECT * FROM 'articles-1914'";
    $result = $db->query($sql);
    return $result->fetchAll();*/
}

// SELECT everything of spez. article
/*
function get_article_by_id($id)
{
    $db = get_db_connection();
    $sql = "SELECT * FROM 'articles-1914' WHERE id = $id;";
    $result = $db->query($sql);
    return $result->fetch();
}

// SELECT teaser of all
function get_teaser_articles()
{
    $db = get_db_connection();
    $sql = "SELECT id, title, title_f, teaser, teaser_f, date, img_url, newspaper_name FROM 'articles-1914'";
    $result = $db->query($sql);
    return $result->fetch();
}
