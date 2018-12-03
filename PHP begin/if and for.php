<?php
	//Var elon qildik
	$a = 45;
	$b = 8;
	//Katta kichik ni topish
	if($a < $b)
	{
		echo 'b katta = '.$b;
	}
	else
	{
		echo 'a katta = '.$a;
	}
	
	
	$massiv = array('Akbar','Aziz','Jalol');
	$massiv_uzunliki = count($massiv);
	for($i = 0; $i<$massiv_uzunliki; $i++)
	{
		echo $massiv[$i];
		echo '<br>';
	}
	
	
?>
