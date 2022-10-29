<?php
  // Leia o Desafio e siga o código base abaixo para resolvê-lo. Algumas dicas:
  // 1. Use a função "fgets(STDIN)" para ler uma linha de Entrada;
  // 2. Use a função "echo" formatar e imprimir sua(s) Saída(s).
  
$ddd = fgets(STDIN);

if($ddd == 61){
  echo "Brasilia\n";
}else if($ddd == 71){
  echo "Salvador\n";
}else if($ddd == 11){
  echo "Sao Paulo\n";
}else if($ddd == 21){
  echo "Rio de Janeiro\n";
}else if($ddd == 32){
  echo "Juiz de Fora\n";
}else if($ddd == 19){
  echo "Campinas\n";
}else if($ddd == 27){
  echo "Vitoria\n";
}else if($ddd == 31){
  echo "Belo Horizonte\n";  
}else{
  echo "DDD nao cadastrado\n";
}
?>