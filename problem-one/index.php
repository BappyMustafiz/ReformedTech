<?php
	class typeHint{
		public $firstString;
		public $secondString;	
		public $limit;	
	}

	$my_obj = new typeHint;
	$my_obj->firstString = 'Reformed';
	$my_obj->secondString = 'Tech';
	$my_obj->limit = 100;

	function printString(typeHint $typeHint){
	    for ($i=1; $i <= $typeHint->limit; $i++) { 
	        if($i%3==0 && $i%5==0) echo $typeHint->firstString.$typeHint->secondString;
	        else if($i%5==0) echo $typeHint->secondString;
	        else if($i%3==0) echo $typeHint->firstString;
	        else  echo $i;
	        echo "\n";
	    }
	}

	printString($my_obj);
?>