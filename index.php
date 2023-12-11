<?php

    require_once 'banco.php';

    $contasCorrentes = [

        "98765432100" => [
            "titular" => "Douglas Precioso",
            "saldo" => 1900.00
        ]

    ];

    abrirContar($contasCorrentes, "12345678900", ["titular" => "Felipe Neves", "saldo" => 2100.00]);
    sacar($contasCorrentes["12345678900"], 1500.00);
    depositar($contasCorrentes["12345678900"], 500.00);
    fecharConta($contasCorrentes, "12345678900");