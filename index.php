<?php
$produto = "X-Burger";
$preco = 22.00;
$quantidade = 2;
$taxa_entrega = 5;
$total = $preco * $quantidade + $taxa_entrega;


echo "Pedido: " . $quantidade . "x " . $produto ."<br>";
echo "Taxa de entrega: " . number_format($taxa_entrega, 2, ',', '.') . "<br>";
echo "Total: " . number_format($total, 2, ',', '.');