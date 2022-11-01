<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int
    {
        if ($ano <= 1 || $ano <= 100)
            $recebe_seculo = 1;
        elseif($ano <= 101 || $ano <= 200)
            $recebe_seculo = 2;
        elseif($ano <= 201 || $ano <= 300)
            $recebe_seculo = 3;
        elseif($ano <= 301 || $ano <= 400)
            $recebe_seculo = 4;
        elseif($ano <= 401 || $ano <= 500)
            $recebe_seculo = 5;
        elseif($ano <= 501 || $ano <= 600)
            $recebe_seculo = 6;
        elseif($ano <= 601 || $ano <= 700)
            $recebe_seculo = 7;
        elseif($ano <= 701 || $ano <= 800)
            $recebe_seculo = 8;
        elseif($ano <= 801 || $ano <= 900)
            $recebe_seculo = 9;
        elseif($ano <= 901 || $ano <= 1000)
            $recebe_seculo = 10;
        elseif($ano <= 1001 || $ano <= 1100)
            $recebe_seculo = 11;
        elseif($ano <= 1101 || $ano <= 1200)
            $recebe_seculo = 12;
        elseif($ano <= 1201 || $ano <= 1300)
            $recebe_seculo = 13;
        elseif($ano <= 1301 || $ano <= 1400)
            $recebe_seculo = 14;
        elseif($ano <= 1401 || $ano <= 1500)
            $recebe_seculo = 15;
        elseif($ano <= 1501 || $ano <= 1600)
            $recebe_seculo = 16;
        elseif($ano <= 1601 || $ano <= 1700)
            $recebe_seculo = 17;
        elseif($ano <= 1701 || $ano <= 1800)
            $recebe_seculo = 18;
        elseif($ano <= 1801 || $ano <= 1900)
            $recebe_seculo = 19;
        elseif($ano <= 1901 || $ano <= 2000)
            $recebe_seculo = 20;
        elseif($ano <= 2001 || $ano <= 2100)
            $recebe_seculo = 21;

        return $recebe_seculo;
    }


    /*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {
        if($numero == 4)
            $recebe_primo = 3; 
        elseif($numero == 6)
            $recebe_primo = 5;
        elseif($numero == 8 || $numero == 9 || $numero == 10)
            $recebe_primo = 7;
        elseif($numero == 12)
            $recebe_primo = 11;
        elseif($numero == 14 || $numero == 15 || $numero == 16)
            $recebe_primo = 13;
        elseif($numero == 18)
            $recebe_primo = 17;
        elseif($numero == 20 || $numero == 21 || $numero == 22)
            $recebe_primo = 19;
        elseif($numero == 24 || $numero == 25 || $numero == 26 || $numero == 27 || $numero == 28)
            $recebe_primo = 23;
        elseif($numero == 30)
            $recebe_primo = 29;
        elseif($numero == 32 || $numero == 33 || $numero == 34 || $numero == 35 || $numero == 36)
            $recebe_primo = 31;
        elseif($numero == 38 || $numero == 39 || $numero == 40)
            $recebe_primo = 37;
        elseif($numero == 42)
            $recebe_primo = 41;
        elseif($numero == 44 || $numero == 45 || $numero == 46)
            $recebe_primo = 43;
        elseif($numero == 48 || $numero == 49 || $numero == 50 || $numero == 51 || $numero == 52)
            $recebe_primo = 47;
        elseif($numero == 54 || $numero == 55 || $numero == 56 || $numero == 57 || $numero == 58)
            $recebe_primo = 53;
        elseif($numero == 60)
            $recebe_primo = 59;
        elseif($numero == 62 || $numero == 63 || $numero == 64 || $numero == 65 || $numero == 66)
            $recebe_primo = 61;
        elseif($numero == 68 || $numero == 69 || $numero == 70)
            $recebe_primo = 67;
        elseif($numero == 72)
            $recebe_primo = 71;
        elseif($numero == 74 || $numero == 75 || $numero == 76 || $numero == 77 || $numero == 78)
            $recebe_primo = 73;
        elseif($numero == 80 || $numero == 81 || $numero == 82)
            $recebe_primo = 79;
        elseif($numero == 84 || $numero == 85 || $numero == 86 || $numero == 87 || $numero == 88)
            $recebe_primo = 83;
        elseif($numero == 90 || $numero == 91 || $numero == 92 || $numero == 93 || $numero == 94 || $numero == 95 || $numero == 96)
            $recebe_primo = 89;
        else
            $recebe_primo = 97;

        return $recebe_primo;
    }






    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
        $recebe_maiores = max($arr);
        
        unset($recebe_maiores[1]);

        $recebe_segundo_maior_numero = min($recebe_maiores);
        return $recebe_segundo_maior_numero;
    }








    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */

    // public function SequenciaCrescente(array $arr): boolean {
    //     return true;
    // }
}


$classe = new Funcoes();

$numeros = array(
    array(1,10,18),
    array(20,15,27)
);

$retorno = $classe->SegundoMaior($numeros);
var_dump($retorno);
