<?php

    function abrirContar(array &$conta, string $cpf, array $dadsoConta) {
        $mensagem = "(A): ";
        $conta[$cpf] = $dadsoConta;
        exibirMensagem($mensagem .= "Conta aberta com sucesso.");
    }

    function sacar(array &$conta, float $valorSaque): void {

        $mensagem = "(S): ";

        if($valorSaque > $conta["saldo"]) {
            exibirMensagem($mensagem .= "Saldo insuficiente");
            return;
        }

        if($valorSaque < 0) { 
            exibirMensagem($mensagem .= "Por favor, informe um valor de saque válido");
            return;
        }

        $conta["saldo"] -= $valorSaque;
        exibirMensagem($mensagem .= "R$ {$valorSaque} sacado com sucesso.");

    }

    function depositar(array &$conta, float $valorDeposito): void {

        $mensagem = "(D): ";

        if($valorDeposito <= 0) {
            exibirMensagem($mensagem .= "Por favor, informe um valor de depósito válido");
            return;
        }

        $conta["saldo"] += $valorDeposito;
        exibirMensagem($mensagem .= "R$ {$valorDeposito} depositado com sucesso.");

    }

    function fecharConta(array &$conta, string $cpf) {
        $mensagem = "(F): ";
        unset($conta[$cpf]);
        exibirMensagem($mensagem .= "Conta fechada com sucesso.");
    }

    function exibirMensagem(string $mensagem): void {
        echo "{$mensagem} <br>";
    }