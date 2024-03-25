<?php

$nome_cliente = $_POST{'nm_cliente'};
$valor_primeiro_produto = $_POST{'n1'};
$valor_segundo_produto = $_POST{'n2'};
$valor_pago = $_POST{'valor_pago'};

$valor_total = $valor_primeiro_produto + $valor_segundo_produto;
$troco = $valor_pago - $valor_total;

echo "Cliente: $nome_cliente";
echo "Quanto gastou: $valor_total";
echo "Valor total: $troco";



?>