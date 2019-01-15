<?php
include("../index.php");
include("../funkcja/FUNKCJE.php");
if (empty($_SESSION['save_name'])) {
  header("location: ../index.php");
}
if (isset($_POST['wroc'])){
  header('location: ../index.php');
}
if (isset($_POST['number_fun_1'])) {
  if ($_POST['number_first_fun_1'] && $_POST['number_second_fun_1']) {
    $arg1 = $_POST['number_first_fun_1'];
    $arg2 = $_POST['number_second_fun_1'];
    $score_fun_1 = function_1($arg1,$arg2);
    if ($score_fun_1 === 1) {
      $score_fun_1 = ':)';
    }elseif($score_fun_1 === 0) {
      $score_fun_1 = ':(';
    }else {
      $score_fun_1 = 'złe dane';
    }
    $_SESSION['save_score_fun_1'] = $score_fun_1;
  }
}
if (isset($_POST['number_fun_2'])) {
  if ($_POST['number_first_fun_2'] && $_POST['number_second_fun_2']) {
    $arg1 = $_POST['number_first_fun_2'];
    $arg2 = $_POST['number_second_fun_2'];
    $score_fun_2_suma = function_2_suma($arg1,$arg2);

    if ($score_fun_2_suma === 1) {
      $score_fun_2_suma = 'liczby - <b>1</b><br>';
    }elseif($score_fun_2_suma === 0) {
      $score_fun_2_suma = 'liczby - <b>0</b><br>';
    }
    else {
      $score_fun_2_suma = 'złe dane<br>';
    }
    $_SESSION['save_score_fun_2_suma'] = $score_fun_2_suma;
  }
}
if (isset($_POST['number_fun_2'])) {
  if ($_POST['number_first_fun_2'] && $_POST['number_second_fun_2']) {
    $arg1 = $_POST['number_first_fun_2'];
    $arg2 = $_POST['number_second_fun_2'];
    $score_fun_2_modulo = function_2_modulo($arg1,$arg2);
    if ($score_fun_2_modulo === 1) {
      $score_fun_2_modulo = 'pierwsza liczba - <b>3</b><br> druga liczba - <b>3</b><br>';
    }elseif ($score_fun_2_modulo === 2) {
      $score_fun_2_modulo = 'pierwsza liczba - <b>3</b><br> druga liczba - <b>4</b><br>';
    }elseif ($score_fun_2_modulo === 3) {
      $score_fun_2_modulo = 'pierwsza liczba - <b>4</b><br> druga liczba - <b>3</b><br>';
    }elseif ($score_fun_2_modulo === 4) {
      $score_fun_2_modulo = 'pierwsza liczba - <b>4</b><br> druga liczba - <b>4</b><br>';
    }
    $_SESSION['save_score_fun_2_modulo'] = $score_fun_2_modulo;
  }
}
if (isset($_POST['number_fun_3'])) {
  if ($_POST['number_first_fun_3'] && $_POST['number_second_fun_3']) {
    $arg_1 = $_POST['number_first_fun_3'];
    $arg_2 = $_POST['number_second_fun_3'];
    $score_fun_3_sr = function_3_srednia($arg_1,$arg_2);
    }if (is_numeric($_POST['number_first_fun_3']) && is_numeric($_POST['number_second_fun_3'])) {
      $score_fun_3_sr = "średnia pierwszej liczby: <b>$score_fun_3_sr[0]</b><br>" . "średnia drugiej liczby: <b>$score_fun_3_sr[1]</b><br>";
    }else {
      $score_fun_3_sr = 'złe dane';
    }
    $_SESSION['save_score_fun_3_sr'] = $score_fun_3_sr;
}
if (isset($_POST['number_fun_3'])) {
  if ($_POST['number_first_fun_3'] && $_POST['number_second_fun_3']) {
    $arg_1 = $_POST['number_first_fun_3'];
    $arg_2 = $_POST['number_second_fun_3'];
    $score_fun_3_med = function_3_mediana($arg_1,$arg_2);
  }if (is_numeric($_POST['number_first_fun_3']) && is_numeric($_POST['number_second_fun_3'])) {
    $score_fun_3_med = "mediana pierwszej liczby: <b>$score_fun_3_med[0]</b><br>" . "mediana drugiej liczby: <b>$score_fun_3_med[1]</b><br>";
  }
  $_SESSION['save_score_fun_3_med'] = $score_fun_3_med;
}
if (isset($_POST['clear'])) {
  unset($_SESSION['save_score_fun_1']);
  unset($_SESSION['save_score_fun_2_suma']);
  unset($_SESSION['save_score_fun_2_modulo']);
  unset($_SESSION['save_score_fun_3_sr']);
  unset($_SESSION['save_score_fun_3_med']);
}
if (isset($_POST['wroc'])) {
  unset($_SESSION['save_name']);
  unset($_SESSION['save_score_fun_1']);
  unset($_SESSION['save_score_fun_2_suma']);
  unset($_SESSION['save_score_fun_2_modulo']);
  unset($_SESSION['save_score_fun_3_sr']);
  unset($_SESSION['save_score_fun_3_med']);
}

?>
