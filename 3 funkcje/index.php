<?php
session_start();
include("obsluga_formularzy/obsluga_index.php");
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>start page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="style/style_index.css">
  </head>
  <body>
    <div class="div_name">
      <form method="post">
        <label>Podaj swoje Imię</label><br><input type="text" name="name" value="<?php if(isset($_POST['sub_name'])) echo $_SESSION['save_name']; ?>"><br>
        <input class="btn btn-info" type="submit" name="sub_name" value="Przejdź">
      </form>
    </div>
  </body>
</html>
