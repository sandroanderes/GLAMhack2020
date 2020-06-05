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

function get_all_articles()
{
    $pdo = get_db_connection();

    $statement = $pdo->prepare("SELECT * FROM articles");
    $statement->execute();
    $result = $statement->fetch();
    echo $result;
    if ($statement->execute()) {
        while ($row = $statement->fetch()) {
            echo $row['title'] . "<br />";
        }

    }    /* 
    else {
        echo "SQL Error <br />";
        echo $statement->queryString . "<br />";
        echo $statement->errorInfo()[2];
    }
*/
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