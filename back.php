<?php

//Entradas
  $entrada1 = $_POST['num1'] ?? '';
  $entrada2 = $_POST['num2']?? '';

  $memor = $_POST['memoria']?? 0 ;
  $r = $_POST['resposta']?? '';

  $op = $_POST['operacao']?? '';
  $func = $_POST['funcao']?? '';


//Processamento
     switch ($op) {
    case '+': $r = $entrada1 + $entrada2; break;
    case '-': $r = $entrada1 - $entrada2; break;
    case '*': $r = $entrada1 * $entrada2; break;
    case '/': 
      $r = ($entrada2 == 0) ? 'Erro: divisão por zero' : $entrada1 / $entrada2;
      break;
  }
   
// Processa função de memória
if ($func) {
  switch ($func) {
    case 'MC': $memor = 0; break;
    case 'MR': $entrada1 = $memor; break;
    case 'M+': $r = $entrada1 + $entrada2; $memor = $r; break;
    case 'M-': $r = $entrada1 - $entrada2; $memor = $r; break;
  }
}    
?>