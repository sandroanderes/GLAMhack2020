<!-- ===== Controller ===== -->
<?php
// Alle Site-relevanten Werte
require_once('config/config.php');
// Alle DB-Abfragen
require_once('config/data.php');

// Get the id from URL
$article_id = $_GET['id'];

?>

<!-- ===== Start View ===== -->
<!-- == HEADER == -->
<?php require_once('templates/header.php'); ?>

<!-- ==== CONTENT ==== -->
<div class="container mt-3">
    <?php $article = get_article_by_id($_GET['id']); ?>
    <h1><?php echo $article['title_f'] ?></h1>
    <p class="text-muted"><?php echo $article['newspaper_name'] ?> - <?php echo $article['date'] ?></p>
    <p><strong><?php echo $article['teaser_f'] ?></strong></p>
    <img class="artimg" src="<?php echo $article['img_url']; ?>">
    <p class="mt-2 text-muted">Original-Text</p>
    <p><?php echo $article['content_f'] ?></p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</div>

<!-- == FOOTER == -->
<?php require_once('templates/footer.php'); ?>