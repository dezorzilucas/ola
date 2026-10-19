<?php

$itens = [
    ["nome" => "X-burger", "preco" => 22.00, "qtd" => 2],
    ["nome" => "Batata frita", "preco" => 19.00, "qtd" => 1],
    ["nome" => "Refrigerante", "preco" => 6.00, "qtd" => 1],
];

$subtotal = 0;

foreach ($itens as $item) {
    $linha = $item["preco"] * $item["qtd"];
    $subtotal = $subtotal + $linha;
    echo $item["qtd"] . "x " . $item["nome"] . " - R$ " . number_format($linha, 2, ',', '.') . "<br>";
}

echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "<br>";

if ($subtotal >= 70) {
    $taxaEntrega = 0;
    echo "Entrega grátis!<br>";
} else {
    $taxaEntrega = 5.00;
    echo "Taxa de entrega" . " - R$ ". number_format($taxaEntrega, 2, ',', '.') . "<br>";
}

$total = $subtotal + $taxaEntrega;
echo "Total: R$ " . number_format($total, 2, ',', '.');