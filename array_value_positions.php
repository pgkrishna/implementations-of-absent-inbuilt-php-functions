<?php

$given_array = array('Monday' => 'boring',
'Friday' => 'yay',
'boring',
'Sunday' => 'fun',
7 => 'boring',
'Saturday' => 'yay fun',
'Wednesday' => 'boring',
'my life' => 'boring');

$repeating_value = "boring";

function array_value_positions($array, $value){
	$index = 0;
	$value_array = array();
		foreach($array as $v){
			if($value == $v){
				$value_array[$index] = $value;
			}
		$index++;
		}
	return $value_array;
}

$value_array = array_value_positions($given_array, $repeating_value);

$result = "The value '$value_array[0]' was found at these indices in the given array: ";

$key_string = implode(', ',array_keys($value_array));

echo $result . $key_string . "\n";//Output: The value 'boring' was found at these indices in the given array: 0, 2, 4, 6, 7



