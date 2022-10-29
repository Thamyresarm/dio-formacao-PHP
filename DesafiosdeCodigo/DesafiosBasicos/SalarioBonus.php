<?php
  // Leia o Desafio e siga o código base abaixo para resolvê-lo. Algumas dicas:
  // 1. Use a função "fgets(STDIN)" para ler uma linha de Entrada;
  // 2. Use a função "echo" formatar e imprimir sua(s) Saída(s).

  $nome = fgets(STDIN);
  $salario = fgets(STDIN);
  $totalVendas = fgets(STDIN);
  
  $aReceber = $salario + ($totalVendas * 15 /100);
  
  $aReceber = sprintf('%.2f', $aReceber);

  $aReceber = str_replace(',','',$aReceber);

  echo "TOTAL = R$ $aReceber";
?>