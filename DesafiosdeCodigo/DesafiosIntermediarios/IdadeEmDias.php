<?php
  // Leia o Desafio e siga o código base abaixo para resolvê-lo. Algumas dicas:
  // 1. Use a função "fgets(STDIN)" para ler uma linha de Entrada;
  // 2. Use a função "echo" formatar e imprimir sua(s) Saída(s).

 //TODO: Complete os espaços em branco com uma possível solução para o problema
  
$idade = (int) fgets(STDIN);
$data = array(0, 0, 0);

while ($idade > 0) {
    switch($idade) {
        case ($idade < 30):
            $data[2] = $idade;
            $idade = 0;
        break;
        case ($idade < 365):
            $data[1] = (int) ($idade / 30);
            $idade %= 30;
        break;
        default:
            $data[0] = (int) ($idade / 365);
            $idade %= 365;
    }
}

echo $data[0] . " ano(s)\n";
echo $data[1] . " mes(es)\n";
echo $data[2] . " dia(s)\n";
 
?>