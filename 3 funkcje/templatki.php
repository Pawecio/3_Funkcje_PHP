<p><b>Imię: <?php if(isset($_SESSION['save_name'])) print $_SESSION['save_name']; ?></b></p>
<b>Dotychczasowe wyniki:</b>
<p class="zad_1"><b>Pierwsze zadanie:</b><br> <?php if(isset($_SESSION['save_score_fun_1'])) print $_SESSION['save_score_fun_1']; ?></p>
<p class="zad_2"><b>Drugie zadanie:</b><br> <?php if(isset($_SESSION['save_score_fun_2_suma'])){ if(isset($_SESSION['save_score_fun_2_modulo'])){ print $_SESSION['save_score_fun_2_suma']; print $_SESSION['save_score_fun_2_modulo'];}}?></p>
<p class="zad_3"><b>Trzecie zadanie:</b><br> <?php if(isset($_SESSION['save_score_fun_3_sr'])){ if(isset($_SESSION['save_score_fun_3_med'])){ print $_SESSION['save_score_fun_3_sr']; print $_SESSION['save_score_fun_3_med'];  }}?></p>
