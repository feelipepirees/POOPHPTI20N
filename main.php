<?php
    namespace PHP\Modelo;//Definir o local do projeto
    require_once('Cliente.php');//Requisitando uma Classe
    require_once('Pessoa.php');    
    use PHP\Modelo\Cliente;//Definir a classe 
    use PHP\Modelo\pessoa;

    $cliente = new Cliente("12345","Allan","11999999999","Rua",560.60);//Criar um objeto
    $clienteDois = new cliente("12345","Allan","11999999999","Rua",560.60);//Criar um objeto

    echo $cliente->imprimir();
    echo $clienteDois->imprimir();
?>