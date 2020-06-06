<!DOCTYPE html>
<html lang="de">

<head>
  <!-- Benötignte meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>GLAMhack 2020</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="index.php">1914 in a Timeline</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if($currentpage == "timeline" ) { echo ' active';} ?>">
            <a class="nav-link" href="index.php">Timeline</a>
          </li>
          <li class="nav-item <?php if($currentpage == "articles" ) { echo ' active';} ?>">
            <a class="nav-link" href="articles.php">Alle Artikel</a>
          </li>
          <li class="nav-item <?php if($currentpage == "about" ) { echo ' active';} ?>">
            <a class="nav-link" href="about.php">Über 1914</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>