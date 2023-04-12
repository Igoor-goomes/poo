<?php

namespace Alura\Banco\Modelo\Conta;
abstract class  Conta
{
    // Objeto do tipo Conta
    // Os dados dentro do objeto do tipo conta são chamados de atributos
    private $titular;
    protected float $saldoConta = 0; // Passando por padrão que toda conta seja iniciada com saldo 0
    private static $nrContaAbertas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldoConta = 0;

        self::$nrContaAbertas++;

    }

    public function __destruct()
    {
        // Toda conta aberta, porém não utilizada é elimida por meio do metodo __destruct, passando unset na conta que deseja desvincular do banco
        self::$nrContaAbertas--;
    }

    public function saca(float $valorASacar): void
    {
        $taxaDeSaque = $valorASacar * $this->percentualTarifa();
        $valorDoSaque = $valorASacar + $taxaDeSaque;
        // a variável $this refere ao objeto que "chamou" o método (neste caso a função sacar)
        if ($valorDoSaque > $this ->saldoConta) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldoConta -=$valorDoSaque;
    }

    public function deposita(float $valorDeposito): void
    {
        if ($valorDeposito < 0){
            echo "valor não pode ser 0, por favor informe corretamente o valor a depositar";
            return;
        }

        $this->saldoConta += $valorDeposito;
    }

    public function recuperaSaldo(): float
    {
        return $this->saldoConta;
    }

    public static function recuperaNrContasAbertas(): int
    {
        return self::$nrContaAbertas;
    }

    public function recuperaNomeTitular():string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular():string
    {
        return $this->titular->recuperaCpf();
    }

    abstract protected function percentualTarifa (): float;
}