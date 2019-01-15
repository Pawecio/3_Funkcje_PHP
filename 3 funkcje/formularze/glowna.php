<?php
session_start();
include("../obsluga_formularzy/obsluga_form.php");
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>tri małe funkcje</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/stylee.css">
  </head>
  <body>
  <div class="row">
    <div class="score col-lg-4 col-md-4 col-sm-4">
      <div class="container_name">
        <?php include('../templatki.php'); ?>
        <form method="post">
        <input class="btn btn-primary" type="submit" name="wroc" value="zmień imię">
        <br><input class="but_clear btn btn-warning" type="submit" name="clear" value="Wyczysc wyniki">
        </form>
      </div>
    </div>
      <div class=" row container_but col-lg-7 col-md-7 col-sm-6">
        <form method="post">
          <div><a href="funkcja_1.php" ><input class="btn btn-danger button_fun" type="button" name="SUB_funkcja1" value="Pierwsza Funkcja"></a></div>
          <div><a href="funkcja_2.php" ><input class="btn btn-danger button_fun" type="button" name="SUB_funkcja2" value="Druga Funkcja"></a></div>
          <div><a href="funkcja_3.php" ><input class="btn btn-danger button_fun" type="button" name="SUB_funkcja3" value="Trzecia Funkcja"></a></div>
        </form>
      </div>
  </div>
  </body>
</html>
