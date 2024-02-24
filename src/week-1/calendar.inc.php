<?php

date_default_timezone_set('Europe/Amsterdam');

function showMonth() {
  $date = new DateTime();
  echo $date->format('F');
}

function showYear() {
  $date = new DateTime();
  echo $date->format('Y');
}

function showCalendar() {
  $date = new DateTime();
  $numberOfDays = $date->format('t');

  $firstDay = new DateTime('first day of');
  $firstDay = $firstDay->format('N');

  $column = 1;

  while ($column < $firstDay) {
    if ($column === 1) {
      echo '<tr>';
    }

    echo '<td></td>';
    ++$column;
  }

  for ($day = 1; $day <= $numberOfDays; ++$day) {
    if ($column === 1) {
      echo '<tr>';
    }

    echo "<td>$day</td>";
    ++$column;

    if ($column > 7) {
      echo '</tr>';
      $column = 1;
    }
  }

  while ($column <= 7) {
    echo '<td></td>';
    ++$column;

    if ($column > 7) {
      echo '</tr>';
    }
  }
}

?>
