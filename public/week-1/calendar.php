<?php

$pageTitle = 'calendar';
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../src/week-1/calendar.inc.php';
require_once __DIR__ . '/../includes/header.php';

?>

      <section class="section">
        <div class="container">

          <div class="columns">
            <div class="column">
              <h1 class="title">Calendar</h1>
              <h2 class="subtitle">Assignment</h2>
            </div>
          </div>

          <div class="columns">
            <div class="column">
              <div class="box">
                <h3 class="title is-4"><?= showMonth(); ?><span class="is-pulled-right"><?= showYear(); ?></span></h3>
                <table id="calendar" class="table is-bordered is-fullwidth is-striped">
                  <thead>
                    <th class="has-text-centered">Monday</th>
                    <th class="has-text-centered">Tuesday</th>
                    <th class="has-text-centered">Wednesday</th>
                    <th class="has-text-centered">Thursday</th>
                    <th class="has-text-centered">Friday</th>
                    <th class="has-text-centered">Saturday</th>
                    <th class="has-text-centered">Sunday</th>
                  </thead>
                  <tbody><?php showCalendar(); ?></tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </section>

<?php

require_once __DIR__ . '/../includes/footer.php';

?>
