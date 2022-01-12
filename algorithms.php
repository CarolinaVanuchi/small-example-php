<?php 

class Algorithms {
   
    /*
        Crie um programa que receba uma palavra ou frase e mostre o texto invertido. Exemplo: "programação" deve aparecer como "oãçamargorp"
    */

    public function reverseString(String $text) {
        return strrev($text);
    }
    
    public function reverseStringWithFor(String $text) {
        $reverseWord = "";
        for ($i = (strlen($text) - 1); $i >= 0; $i--) $reverseWord .= $text[$i];
        return $reverseWord;
    }

    /*
        Construa uma função que leia 3 números representando os lados de um triangulo, 
        e determine se eles formam um triangulo equilátero, isósceles ou escaleno. 
        Exemplo: Lado A=1, lado B=2, lado C=3 formam um triangulo escaleno, Lado A=1, lado B=1, lado C=2 
        formam um isósceles, Lado A=3, lado B=3, lado C=3 formam um equilátero, 
        e Lado A=1, lado B=2, lado C=5 não formam um triangulo válido
    */

    public function whatTriangle(float $a, float $b, float $c) {
        if ($a == $b && $b == $c) return "Equilátero";
        else if (($a == $b) || ($a == $c) || ($b == $c)) return "Isósceles";
        else return "Escaleno";
    }

    /*
        Crie um programa capaz de mostrar a sequencia de Fibonacci até o n-ésimo termo desejado. 
        Exemplo para n=6 a saída deverá ser: 1,1,2,3,5,8
    */

    public function fibonacci(int $n) {
        if ($n < 2) return $n;
        else return ($this->fibonacci($n - 1) + $this->fibonacci($n - 2));
    }

    /*
        Crie um programa capaz de calcular a função matemática "fatorial". Se possível resolva utilizando recursividade
    */

    public function factorial(int $n) {
        if ($n === 0 || $n === 1) return 1;
        else return ($n * $this->factorial($n-1));
    }

    /*
        Crie um programa capaz de calcular a função matemática "fatorial". Se possível resolva utilizando laços de repetição
    */

    public function factorialWithFor(int $n) {
        $result = 1;
        for ($i = $n; $i >= 1; $i--) $result *= $i; 
        return $result;
    }
}

?>