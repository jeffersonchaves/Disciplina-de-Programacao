<?php

	function horaParaMinuto($hora){

	}

	function soma(int $param1, int $param2) {
	  
	}

	function seculoDoAno($ano) {
    	
	}

	function palindroma($palavra){

	}

	function maiorProdutoEntreVizinhos($array){

	}

	//Nao altere nada desta linha em diante
	$acertos        = 0;
	$erros          = 0;

	function testeFuncoes($obtido, $esperado){
		global $erros, $acertos;

		if (($esperado == $obtido) && !empty($obtido) ) {
			$acertos++;
		}else{
			$erros++;
		}
	}


	//Testes
	//horaParaMinuto
	testeFuncoes(horaParaMinuto(1), 60);
	testeFuncoes(horaParaMinuto(2), 120);
	testeFuncoes(horaParaMinuto(2.5), 150);

	//Testes
	//soma
	testeFuncoes(soma(0,1), 1);
	testeFuncoes(soma(2,2), 4);
	testeFuncoes(soma(-2,1), -1);

	//ano
	testeFuncoes(seculoDoAno(1905), 20);
	testeFuncoes(seculoDoAno(1700), 17);
	testeFuncoes(seculoDoAno(1988), 20);

	//palindroma
	testeFuncoes(palindroma("aabaa"), true);
	testeFuncoes(palindroma("abac"), false);
	testeFuncoes(palindroma("a"), true);

	//produto
	testeFuncoes(maiorProdutoEntreVizinhos([3, 6, -2, -5, 7, 3]), 21);
	testeFuncoes(maiorProdutoEntreVizinhos([-1, -2]), 2);
	testeFuncoes(maiorProdutoEntreVizinhos([5, 1, 2, 3, 1, 4]), 6);

	//Resultado
	echo "acertos: $acertos\n";
	echo "erros: $erros\n";

