<?php
// Alle Site-relevanten Werte
require_once('config/config.php');
// Alle DB-Abfragen
require_once('config/data.php');
$currentpage = "timeline";
require_once "templates/header.php";

?>

<header>
  <div class="container text-center">
    <h1>1914 in a Timeline</h1>
    <p>6th Swiss Open Cultural Data Hackathon</p>
  </div>
</header>


<section class="timeline">
  <div class="container">
    <div class="row maindate">
      <div class="col-sm text-center">
        <h2>1914</h2>
      </div>
      <div class="col-sm text-center">
        <h2>Heute</h2>
      </div>
    </div>
    <?php
    $articles = get_article_for_timeline();
    foreach ($articles as $article) {
      if ($article['fact'] == 1) {
    ?>
        <div class="timeline-item">
          <div class="timeline-content timeline-card js--fadeInBottom">
            <h2 class="padding-facts"><?php echo $article['title']; ?></h2>
          </div>
        </div>

        <?php } else { ?>
          <div class="timeline-item">

            <div class="timeline-img"></div>

            <a style="text-decoration: none; color: none;" data-toggle="modal" data-target="#ModalCenter<?php echo $article['id']; ?>">
              <div class="timeline-content timeline-card js--fadeInBottom">
                <div class="timeline-img-header" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.52), rgba(0, 0, 0, 0.73)), url(<?php echo $article['img_url']; ?>)">
                  <h2><?php echo $article['title']; ?></h2>
                </div>
                <div class="date"><?php echo $article['date']; ?></div>
                <p><?php echo $article['teaser']; ?></p>
              </div>
            </a>

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
                  <div class="modal-footer justify-content-center">
                    <a class="btn btn-secondary" href="article.php?id=<?php echo $article['id']; ?>">Deutsch</a>
                    <a class="btn btn-primary" href="article_f.php?id=<?php echo $article['id']; ?>">Französisch</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
      <?php }
    } ?>
        </div>
</section>

<?php require_once "templates/footer.php"; ?>

</body>

</html>