<?php

$food = array('Healthy'=>
			array('Salad', 'Vegetables', 'Pasta'), 
	      'Unhealthy'=>
			array('Pizza', 'Ice Cream'));

foreach($food as $element => $inner_array){
   echo $element . '<br>';
   foreach($inner_array as $item){
      echo $item . '<br>';
   }
}
