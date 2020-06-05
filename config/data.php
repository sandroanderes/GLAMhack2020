<?php

// Datenbankverbindung
// Verbindung herstellen
function get_db_connection()
{
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


// SELECT everything
function get_all_articles()
{
    $db = get_db_connection();
    $sql = "SELECT * FROM articles-1914";
    $result = $db->query($sql);
    return $result->fetchAll();
}

// SELECT everything of spez. article
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
