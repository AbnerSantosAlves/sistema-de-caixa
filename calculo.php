<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilophp.css">
</head>
<body>
 
<div class="container">
        <div class="row">
          <div class="col-sm">
          </div>
          <div class="col-sm">
            <div class="nota-fiscal">
                <p class="title">Nota fiscal<p>
                <hr>
          <?php

            $nm = $_POST['nome_Cliente'];
            $valor1 = $_POST['n1'];
            $valor2 = $_POST['n2'];
            $nm1 = $_POST['nm1'];
            $nm2 = $_POST['nm2'];
            $valorTotal = $valor1+$valor2;
            $valorpago = $_POST['valorPago'];
            $troco = $valorpago - $valorTotal;

            ?>

            <?php
              echo "$nm1  $valor1";
              echo "<br>";
              echo "$nm2  $valor2";
            ?>

            <hr>
            <?php
            echo "Nome do cliente: $nm";
            echo "<br>";
            echo "Valor total: $valorTotal";
            echo "<br>";
            echo "Valor pago: $valorpago";
            echo "<br>";
            echo "Troco: $troco";
            ?>
            </div>
          </div>
          <div class="col-sm">
          </div>
        </div>
      </div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


