<!-- ===== Controller ===== -->
<?php
// Alle Site-relevanten Werte
require_once('config/config.php');
// Alle DB-Abfragen
require_once('config/data.php');

if(isset($_GET['id'])){
    $article_id = $_GET['id'];
    echo $article_id;
    $article = get_article_by_id($article_id);
} else{
    echo "The content could not have been load";
}

?>

<!-- ===== Start View ===== -->
<!-- == HEADER == -->
<?php require_once('templates/header.php'); ?>

<!-- ==== CONTENT ==== -->
<div class="container mt-3">
    <h1><?php $article['title'] ?></h1>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</div>

<!-- == FOOTER == -->
<?php require_once('templates/footer.php'); ?>