<?php

// Datenbankverbindung
// Verbindung herstellen


$pdo = new PDO('mysql:host=localhost;dbname=GLAMhack2020', 'root', 'password');
 
$statement = $pdo->prepare("SELECT * FROM articles");
 
if($statement->execute()) { 
} else {
    echo "SQL Error <br />";
    echo $statement->queryString."<br />";
    echo $statement->errorInfo()[2];
}



/* // SELECT everything
function get_all_articles()
{
    $db = get_db_connection();
    $sql = "SELECT * FROM articles";
    $result = $db->query($sql);
    return $result->fetchAll();
}

// SELECT everything of spez. article
function get_article_by_id($id)
{
    $db = get_db_connection();
    $sql = "SELECT * FROM articles WHERE id = $id;";
    $result = $db->query($sql);
    return $result->fetch();
}

// SELECT teaser of all
function get_teaser_articles()
{
    $db = get_db_connection();
    $sql = "SELECT id, title, title_f, teaser, teaser_f, date, img_url, newspaper_name FROM articles";
    $result = $db->query($sql);
    return $result->fetch();
} */