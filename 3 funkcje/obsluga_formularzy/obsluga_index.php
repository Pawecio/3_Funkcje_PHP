<?php
if (isset($_POST['sub_name'])) {
    $_SESSION['save_name'] = $_POST['name'];
    header("location: formularze/glowna.php");
}
if (isset($_POST['sub_name'])) {
  unset($_SESSION['save_score_fun_1']);
  unset($_SESSION['save_score_fun_2_suma']);
  unset($_SESSION['save_score_fun_2_modulo']);
  unset($_SESSION['save_score_fun_3_sr']);
  unset($_SESSION['save_score_fun_3_med']);
}
 ?>
