<?php
	$array = [
		0 => 'Jalol',
		1 => 'Aziz',
		2 => true,
		[
			'Hakimov',
			'Nosirov'
		]
	];	
		
	//var_dump($array);
	//exit;
	foreach($array as $index => $item){
		if($index == 2)
			break;
		echo $index . ' - ' .$item . '<BR>';
	}
	
	//$array[] = 'Karim';
	//var_dump($array);		

?>
