<?php
	$str="This is the string count .";
	$string_word_count = str_word_count($str, 1);
	$string_word_count = str_word_count($str);
	echo 'The number of words in '.'$str'.' is '.$string_word_count;

	$string_shuffled=str_shuffle($str);
	print_r($string_word_count);

	echo "<br />";
	echo $string_shuffled;
	echo "<br />";


	//$half=substr($string_shuffled, 0, 5);
	$half=substr($string_shuffled, 0, strlen($string_shuffled)/2);
	echo $half;
	echo "<br />";

	$string_reversed=strrev($str);
	echo $string_reversed;
	echo "<br />";

	$string1='This is the original line about php.';
	$string2='This is the original line about php.';

	similar_text($string1,$string2,$result);
	echo "The similarity between two string is ".$result;

	$food = array('pasta','pizza','salad');
	echo $food[2];
	print_r ($food);
	echo $food;

	//Multi-dimensional Arrays
	$food1 = array('Healthy' => array('salad', 'Vegetables', 'Pasta'), 'Unhealthy'=>array('Pizza','Ice Cream'));
	echo $food1['Unhealthy'][1];

	// foreach statement
	foreach ($food1 as $element => $inner_element)
	{
		echo '<strong>'.$element.'</strong><br />';
		foreach ($inner_element as $item)
		{
			echo $item.'<br />';
		}
		
	}
	$var = 'string';
	echo "$var";
?>