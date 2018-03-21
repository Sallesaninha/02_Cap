<?php

    require_once 'class/Fabricante.php';
    require_once 'class/Produto.php';

    // criação dos objetos
    $p1 = new Produto('Chocolate', 10, 7);
    $f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '1234985235');

    // associação
    $p1->setFabricante( $f1 );

    print 'A descrição é ' . $p1->getDescricao() . ".<br>\n";
    print 'O fabricante é ' . $p1->getFabricante()->getNome() . ".<br>\n";

?>