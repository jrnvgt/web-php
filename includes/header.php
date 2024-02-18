<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="../images/logo.png" type="image/png">
    <link rel="stylesheet" href="../styles/bulma.css">
    <link rel="stylesheet" href="../styles/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="../scripts/script.js"></script>
    <title>PHP</title>
  </head>

  <body>
    <nav class="navbar is-light" role="navigation" aria-label="navigation">
      <div class="container">

        <div class="navbar-brand">
          <div class="navbar-item">
            <img src="../images/logo.png" alt="logo">
            <span class="ml-2 has-text-weight-semibold is-unselectable">PHP</span>
          </div>
          <a id="navbar-burger" class="navbar-burger" role="button" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbar-menu" class="navbar-menu">
          <div class="navbar-start">
            <?= ($pageTitle === "index") ? "" : "<a class=\"navbar-item\" href=\"../index.php\">Back</a>"; ?>
          </div>
          <div class="navbar-end"></div>
        </div>

      </div>
    </nav>

    <main>
