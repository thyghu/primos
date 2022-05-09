<?php

function verificaPrimo($numero)
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
	$i = $inicio +1;
	$j = $fim-1;
	
	$primos = array();
	
	for($i;$i<=$j;$i++)
	{
		if(verificaPrimo($i)==1)
		{
			array_push($primos, $i);
		}
	}
	print_r($primos);	
	
}	 

primo(10,29);

?>