<?php

$pageTitle = 'index';
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/includes/header.php';

?>

      <section class="section">
        <div class="container">

          <div class="columns">
            <div class="column">
              <h1 class="title">Assignments</h1>
              <h2 class="subtitle">PHP</h2>
            </div>
          </div>

          <div class="columns">
            <div class="column">
              <div class="box">
                <div class="block">
                  <span class="tag is-info">Week 1</span>
                  <span class="tag is-info">Week 2</span>
                </div>
                <div class="buttons">
                  <a class="button is-primary" href="week-1/hello-world.php">Hello, world!</a>
                  <a class="button is-primary" href="week-1/hangman.php">Hangman</a>
                  <a class="button is-primary" href="week-1/calendar.php">Calendar</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

<?php

require_once __DIR__ . '/includes/footer.php';

?>
