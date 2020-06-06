<!-- ===== Controller ===== -->
<?php
// Alle Site-relevanten Werte
require_once('config/config.php');
// Alle DB-Abfragen
require_once('config/data.php');

$currentpage = "articles";

require_once('templates/header.php');

?>

<!-- ===== Start View ===== -->
<!-- == HEADER == -->

<!-- ==== CONTENT ==== -->
<div class="container mt-3">
  <h1>Articles</h1>

  <!-- Place content here -->
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
    <?php
    $articles = get_teas_articles();
    foreach ($articles as $article) {
    ?>
      <div class="col mb-4">
        <div class="card">
          <img src="<?php echo $article['img_url']; ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?php echo $article['title']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $article['newspaper_name'] ?> - <?php echo $article['date'] ?> </h6>
            <p class="teaser" class="card-text"><?php echo $article['teaser']; ?></p>
          </div>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCenter<?php echo $article['id']; ?>">
            Launch demo modal
          </button>

          <div class="modal fade" id="ModalCenter<?php echo $article['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle<?php echo $article['id']; ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ModalLongTitle<?php echo $article['id']; ?>">Sprache wählen</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  In welcher Sprache soll der gewählte Zeitungsartikel dargestellt werden?
                </div>
                <div class="modal-footer">
                  <a class="btn btn-secondary" href="article.php?id=<?php echo $article['id']; ?>">Deutsch</a>
                  <a class="btn btn-primary" href="article_f.php?id=<?php echo $article['id']; ?>">Französisch</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</div>

<!-- == FOOTER == -->
<?php require_once('templates/footer.php'); ?>