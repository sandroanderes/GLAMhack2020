<!-- ===== Controller ===== -->
<?php 
// Alle Site-relevanten Werte
require_once('config/config.php');
// Alle DB-Abfragen
require_once('config/data.php');

?>

<!-- ===== Start View ===== -->
<!-- == HEADER == -->
<?php require_once('templates/header.php'); ?>

<!-- ==== CONTENT ==== -->
<div class="container mt-3">
    <h1>Articles</h1>
    <!-- Place content here -->

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
      <?php 
      $articles = get_all_articles();
        foreach ($articles as $article) {
          
      ?>
        <div class="col mb-4">
          <div class="card">
            <img src="<?php echo $article['img_url']; ?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?php echo $article['title']; ?></h5>
              <p class="teaser" class="card-text"><?php echo $article['teaser']; ?></p>
            </div>
            <button class="btn">Read more</button>
          </div>
        </div>

        <?php 
          }
        ?>
        <!--<div class="col mb-4">
          <div class="card">
            <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="teaser" class="card-text">Das ist ein Teasertext - er soll nicht zu lang sein. Ein bis zwei Sätze genügen.</p>
            </div>
            <button>Read</button>
          </div>
        </div>       
        <div class="col mb-4">
          <div class="card">
            <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="teaser" class="card-text">Das ist ein Teasertext - er soll nicht zu lang sein. Ein bis zwei Sätze genügen.</p>
            </div>
            <button>Read</button>
          </div>
        </div>       
        <div class="col mb-4">
          <div class="card">
            <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="teaser" class="card-text">Das ist ein Teasertext - er soll nicht zu lang sein. Ein bis zwei Sätze genügen.</p>
            </div>
            <button>Read</button>
          </div>
        </div>       
        <div class="col mb-4">
          <div class="card">
            <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="teaser" class="card-text">Das ist ein Teasertext - er soll nicht zu lang sein. Ein bis zwei Sätze genügen.</p>
            </div>
            <button>Read</button>
          </div>
        </div>       
        <div class="col mb-4">
          <div class="card">
            <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="teaser" class="card-text">Das ist ein Teasertext - er soll nicht zu lang sein. Ein bis zwei Sätze genügen.</p>
            </div>
            <button>Read</button>
          </div>
        </div>       
        <div class="col mb-4">
          <div class="card">
            <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="teaser" class="card-text">Das ist ein Teasertext - er soll nicht zu lang sein. Ein bis zwei Sätze genügen.</p>
            </div>
            <button>Read</button>
          </div>
        </div>       
        <div class="col mb-4">
          <div class="card">
            <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="teaser" class="card-text">Das ist ein Teasertext - er soll nicht zu lang sein. Ein bis zwei Sätze genügen.</p>
            </div>
            <button>Read</button>
          </div>
        </div>-->
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</div>

<!-- == FOOTER == -->
<?php require_once('templates/footer.php'); ?>
