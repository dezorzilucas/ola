<?php

function formatarReais($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}

function calcularSubtotal($itens) {
    $subtotal = 0;
    foreach ($itens as $item) {
        $subtotal = $subtotal + $item["preco"] * $item["qtd"];
    }
    return $subtotal;
}

function calcularTaxaEntrega($subtotal) {
    if ($subtotal >= 70) {
        return 0;
    }
    return 5.00;
}

$itens = [
    ["nome" => "X-Burger", "preco" => 22.00, "qtd" => 2],
    ["nome" => "Batata Frita", "preco" => 19.00, "qtd" => 1],
    ["nome" => "Refrigerante", "preco" => 8.00, "qtd" => 1],
];

$subtotal = calcularSubtotal($itens);
$taxa = calcularTaxaEntrega($subtotal);
$total = $subtotal + $taxa;

foreach ($itens as $item) {
    echo $item["qtd"] . "x " . $item["nome"] . " - " . formatarReais($item["preco"] * $item["qtd"]) . "<br>";
}
echo "Subtotal: " . formatarReais($subtotal) . "<br>";
echo "Taxa de entrega: " . formatarReais($taxa) . "<br>";
echo "Total: " . formatarReais($total);