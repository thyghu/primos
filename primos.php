<?php

function verificaPrimo($numero) //função para desocbrir se o número é primo
{
		if ($numero == 1)
		return 0;
		 
		for ($i = 2; $i <= sqrt($numero); $i++){
			if ($numero % $i == 0)
				return 0;
		}
		return 1;
}

function primo($inicio,$fim)
{
	//delimitando que não pode exibir os números já informados
	$i = $inicio +1;
	$j = $fim-1;
	
	//declarando array de números primos
	$primos = array();
	
	for($i;$i<=$j;$i++) //percorrendo intervalo informado
	{
		
		if(verificaPrimo($i)==1)
		{	
			//se o número for primo, adiciona ao array
			array_push($primos, $i);
		}
	}
	
	//exibe resultado
	print_r($primos);	
	
}	 

//teste
primo(10,29);

?>