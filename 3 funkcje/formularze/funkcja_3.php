<?php
//error_reporting (E_ALL - (E_NOTICE));
session_start();
include("../obsluga_formularzy/obsluga_form.php");
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>pierwsza funkcja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style_fun.css">
  </head>
  <body>

<div class="row">
  <div class="score col-lg-3 col-md-3 col-sm-4">
    <div class="container_name">
      <?php include('../templatki.php'); ?>
    </div>
    <a href="glowna.php"><input class="btn btn-primary" type="button" name="close" value="Wrybór funkcji"></a>
  </div>
    <div class="row div_fun col-lg-5 col-md-5 col-sm-5">
      <form method="post">
        <h1>Trzecie Zadanie</h1>
        <label>Pierwsza Liczba</label><br><input type="text" name="number_first_fun_3" value="<?php if(isset($_POST['number_first_fun_3'])) echo $_POST['number_first_fun_3'] ?>" maxlength="3">
        <br><label>Druga Liczba</label><br><input type="text" name="number_second_fun_3" value="<?php if(isset($_POST['number_second_fun_3'])) echo $_POST['number_second_fun_3'] ?>" maxlength="3">
        <br><input class="btn btn-danger" type="submit" name="number_fun_3" value="Wyślij">
      </form>
    </div>
    <div class="legenda col-lg-3 col-md-3 col-sm-3">
      <h4>Opis zadania:</h4>
        <p>Podaj dwie liczby 3 cyfrowe, aby:<br>
          wyliczyc średnią <br>
          oraz wskazac medianę <br>
        </p>
    </div>
</div>
  </body>
</html>
