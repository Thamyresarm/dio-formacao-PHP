<?php
require 'Produto.php';

$produto = new Produto();

switch($_GET['operacao']){
    
    case 'list':
        echo '</h3>Produtos: </h3>';

        foreach ($produto->list() as $value){
            echo 'Id: ' . $value['id'] . '<br> Descrição: '. $value['descricao'] . '<hr';
        };
        break;

    case 'insert':
        $produto->insert('Produto pra inserir');
        break;

    case 'update':
        $produto->update('Produto para alterar',1);
        break;

    case 'delete':
        $produto->delete(1);//id para deletar
        break;

}
