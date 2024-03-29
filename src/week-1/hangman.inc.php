<?php

session_start();

if (!isset($_SESSION['initialized']) || $_SESSION['initialized'] === false) {
  initialize();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!isset($_POST['letter'])) { return; }

  $input = trim($_POST['letter']);

  if (!validate($input)) { return; }

  $input = strtolower($input);

  if (in_array($input, $_SESSION['correctLetters']) || in_array($input, $_SESSION['incorrectLetters'])) {
    $_SESSION['attempts'] += 1;
    
    if ($_SESSION['attempts'] === 10) {
      $_SESSION['initialized'] = false;
      header('refresh: 0');
    }

    return;
  }

  $letters = str_split($_SESSION['word']);

  foreach ($letters as $key => $letter) {
    if ($letter === $input) {
      array_push($_SESSION['correctLetters'], $input);
      break;
    }
    
    if ($key === array_key_last($letters)) {
      $_SESSION['attempts'] += 1;
      array_push($_SESSION['incorrectLetters'], $input);
    }
  }

  if ($_SESSION['attempts'] === 10) {
    $_SESSION['initialized'] = false;
    header('refresh: 0');
    return;
  }

  foreach ($letters as $key => $letter) {
    if (!in_array($letter, $_SESSION['correctLetters'])) { break; }

    if ($key === array_key_last($letters)) {
      $_SESSION['initialized'] = false;
      array_push($_SESSION['guessedWords'], $_SESSION['word']);
      header('refresh: 0');
    }
  }
}

function initialize() {
  $words = array('abyss', 'blizzard', 'crypt', 'dwarves', 'exodus', 'fjord', 'galaxy', 'hangman', 'ivory', 'jackpot');
  
  $_SESSION['initialized'] = true;
  $_SESSION['word'] = $words[rand(0, 9)];
  $_SESSION['attempts'] = 0;
  $_SESSION['correctLetters'] = array();
  $_SESSION['incorrectLetters'] = array();

  if (!isset($_SESSION['guessedWords'])) {
    $_SESSION['guessedWords'] = array();
  }
}

function validate($input) {
  if (empty($input)) { return false; }
  if (strlen($input) > 1) { return false; }
  if (!ctype_alpha($input)) { return false; }

  return true;
}

function showGuessedWords() {
  $words = $_SESSION['guessedWords'];

  foreach ($words as $word) {
    echo $word . ', ';
  }
}

function showWord() {
  $letters = str_split($_SESSION['word']);
  $correctLetters = $_SESSION['correctLetters'];

  foreach ($letters as $letter) {
    if (in_array($letter, $correctLetters)) {
      echo strtoupper($letter) . ' ';
      continue;
    }

    echo '_ ';
  }
}

function showAttempts() {
  return $_SESSION['attempts'];
}

function showIncorrectLetters() {
  $letters = $_SESSION['incorrectLetters'];

  foreach ($letters as $letter) {
    echo strtoupper($letter) . ' ';
  }
}

?>
