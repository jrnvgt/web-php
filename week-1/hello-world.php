<?php

$pageTitle = "hello-world";
require_once __DIR__ . "/../includes/header.php";

?>

      <section class="section">
        <div class="container">

          <div class="columns">
            <div class="column">
              <h1 class="title">Hello, world!</h1>
              <h2 class="subtitle">Assignment</h2>
            </div>
          </div>

          <div class="columns">
            <div class="column">
              <div class="box">
                <p><?= "Hello, world!"; ?></p>
              </div>
            </div>
          </div>

        </div>
      </section>

<?php

require_once __DIR__ . "/../includes/footer.php";

?>
