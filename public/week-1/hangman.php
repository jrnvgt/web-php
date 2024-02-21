<?php

$pageTitle = 'hangman';
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../src/week-1/hangman.inc.php';
require_once __DIR__ . '/../includes/header.php';

?>

      <section class="section">
        <div class="container">

          <div class="columns">
            <div class="column">
              <h1 class="title">Hangman</h1>
              <h2 class="subtitle">Assignment</h2>
            </div>
          </div>

          <div class="columns">
            <div class="column is-one-quarter">
              <div class="box">
                <p class="has-text-weight-semibold">Guessed words:</p>
                <p><?= showGuessedWords(); ?></p>
              </div>
            </div>
            <div class="column">
              <div class="box">
                <div class="block">
                  <p class="is-size-2"><?= showWord(); ?></p>
                </div>
                <div class="block">
                  <p class="has-text-weight-semibold">Attempts:</p>
                  <p><?= showAttempts(); ?> / 10</p>
                  <p class="has-text-weight-semibold">Incorrect letters:</p>
                  <p><?= showIncorrectLetters(); ?></p>
                </div>
              </div>
              <div class="box">
                  <form action="hangman.php" method="post">
                    <div class="field">
                      <div class="control">
                        <input class="input" name="letter" type="text" placeholder="Enter a letter">
                      </div>
                    </div>
                    <div class="field">
                      <div class="control">
                        <button class="button is-primary" type="submit">Guess</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
          </div>

        </div>
      </section>

<?php

require_once __DIR__ . '/../includes/footer.php';

?>
