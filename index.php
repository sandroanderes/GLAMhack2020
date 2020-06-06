<?php
// Alle Site-relevanten Werte
require_once('config/config.php');
// Alle DB-Abfragen
require_once('config/data.php');

require_once "templates/header.php";
?>

<header>
  <div class="container text-center">
    <h1>1914 & 2020 in a Timeline</h1>
    <p>6th Swiss Open Cultural Data Hackathon</p>
  </div>
</header>

<section class="timeline">
  <div class="container">
    <?php 
    $articles = get_article_for_timeline();
    foreach ($articles as $article){
    ?>
    <div class="timeline-item">
    
      <div class="timeline-img"></div>
    
    <a style="text-decoration: none; color: none;" href="article.php?id=<?php echo $article['id']; ?>">
      <div class="timeline-content timeline-card js--fadeInBottom">
        <div class="timeline-img-header" style="background-image:url(<?php echo $article['img_url'];?>)">
          <h2><?php echo $article['title']; ?></h2>
        </div>
        <div class="date"><?php echo $article['date']; ?></div>
        <p><?php echo $article['teaser']; ?></p>
      </div>
      </a>
    </div>
    <?php } ?>

    
    <div class="timeline-item">
      <div class="timeline-img"></div>
      <div class="timeline-content timeline-card js--fadeInBottom">
        <div class="timeline-img-header">
          <h2>Card Title</h2>
        </div>
        <div class="date">30 July 2020</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
      </div>
    </div>
   

  </div>
</section>

<?php require_once "templates/footer.php"; ?>

</body>

</html>