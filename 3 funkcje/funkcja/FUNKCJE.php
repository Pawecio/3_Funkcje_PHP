<?php

          // FUNKCJA 1!!!

function function_1($arg_1,$arg_2){
  if(preg_match('/^[0-9]{3}$/',$arg_1) && (preg_match('/^[0-9]{3}$/',$arg_2))) {
    if ($arg_1 == $arg_2) {
      $score_fun_1 = 1;
    }else {
      $score_fun_1 = 0;
    }
  } else {
    $score_fun_1 = false;
  }
  return $score_fun_1;
}

            // FUNKCJA  2 - SUMA!!!

function function_2_suma($arg_3,$arg_4){
  if(preg_match('/^[0-9]{3}$/',$arg_3) && preg_match('/^[0-9]{3}$/',$arg_4)) {
    $arg_3 = (string)$arg_3;
    $suma_arg_3 = 0;
    for($i=0; $i<strlen($arg_3); $i++){
      $suma_arg_3 = $arg_3{$i} + $suma_arg_3;
    }
    $arg_4 = (string)$arg_4;
    $suma_arg_4 = 0;
    for($j=0; $j<strlen($arg_4); $j++){
      $suma_arg_4 = $arg_4{$j} + $suma_arg_4;
    }
    $suma_sum = 0;
    $suma_sum = $suma_arg_3 + $suma_arg_4;
    if ($suma_arg_3 == $suma_arg_4){
        $score_fun_2_1 = 1;
    }else {
        $score_fun_2_1 = 0;
    }
    $score_fun_2 = $score_fun_2_1;
  }else {
    $score_fun_2 = false;
  }
  return $score_fun_2;
}

            // FUNKCJA 2 - MODULO!!!

function function_2_modulo($arg_3,$arg_4){
  if(preg_match('/^[0-9]{3}$/',$arg_3) && preg_match('/^[0-9]{3}$/',$arg_4)) {
    $arg_3 = (string)$arg_3;
    $suma_arg_3 = 0;
    for($i=0; $i<strlen($arg_3); $i++){
      $suma_arg_3 = $arg_3{$i} + $suma_arg_3;
    }
    $arg_4 = (string)$arg_4;
    $suma_arg_4 = 0;
    for($j=0; $j<strlen($arg_4); $j++){
      $suma_arg_4 = $arg_4{$j} + $suma_arg_4;
    }
    $suma_sum = 0;
    $suma_sum = $suma_arg_3 + $suma_arg_4;
    if ($suma_arg_3 % 2 == 0 && $suma_arg_4 % 2 == 0) {
      $score_fun_2_2 = 1;
    }elseif ($suma_arg_3 % 2 == 0) {
      $score_fun_2_2 = 2;
    }elseif ($suma_arg_4 % 2 == 0) {
      $score_fun_2_2 = 3;
    }else {
      $score_fun_2_2 = 4;
    }
    $score_fun_2_modulo = $score_fun_2_2;
    }else {
    $score_fun_2_modulo = false;
    }
    return $score_fun_2_modulo;
    }


            // FUNKCJA 3 - ŚREDNIA!!!

function function_3_srednia($arg_5,$arg_6){
  if(preg_match('/^[0-9]{3}$/',$arg_5) && preg_match('/^[0-9]{3}$/',$arg_6)) {
    $arg_5 = (string)$arg_5;
    $arg_6 = (string)$arg_6;
    $suma_arg_6 = 0;
    $suma_arg_5 = 0;
    for ($a=0; $a<strlen($arg_5) ; $a++){
      $suma_arg_5 += $arg_5{$a};
    }
    for ($b=0; $b<strlen($arg_6) ; $b++){
      $suma_arg_6 += $arg_6{$b};
    }
      $srednia_arg_5 = round($suma_arg_5 / 3 , 2);
      $srednia_arg_6 = round($suma_arg_6 / 3 , 2);
        $score_function_3_sr = array('0' =>$srednia_arg_5 ,$srednia_arg_6 );
  }else {
    $score_function_3_sr = false;
  }
  return $score_function_3_sr;
}

            // FUNKCJA 3 - MEDIANA!!!

function function_3_mediana($arg_5,$arg_6){
  if(preg_match('/^[0-9]{3}$/',$arg_5) && preg_match('/^[0-9]{3}$/',$arg_6)) {
    $arg_5 = (string)$arg_5;
    $arg_6 = (string)$arg_6;
    $art1 = $arg_5[0];  $art4 = $arg_6[0];
    $art2 = $arg_5[1];  $art5 = $arg_6[1];
    $art3 = $arg_5[2];  $art6 = $arg_6[2];
    $arrayArg5 = array($art1,$art2,$art3 );
    sort($arrayArg5);
    $mediana_1 = null;
    $am = count($arrayArg5);
    if($am % 2 == 0) {
    	$ma = ($am - 1 ) / 2;
    	$mediana_1 = ($arrayArg5[$ma] + $arrayArg5[$ma + 1]) / 2;
    }
    else {
    	$mediana_1 = $arrayArg5[($am - 1)  / 2];
    }
    $arrayArg6 = array($art4,$art5,$art6 );
    sort($arrayArg6);
    $mediana_2 = null;
    $am = count($arrayArg6);
    if($am % 2 == 0) {
    	$ma = ($am - 1 ) / 2;
    	$mediana_2 = ($arrayArg6[$ma] + $arrayArg6[$ma + 1]) / 2;
    }
    else {
    	$mediana_2 = $arrayArg6[($am - 1)  / 2];
    }
    $score_function_3_med = array('0' =>$mediana_1 ,$mediana_2 );
    }else {
    $score_function_3_med = false;
  }
  return $score_function_3_med;
}

?>
