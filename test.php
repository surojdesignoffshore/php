
<?php
/*
String functions like
strlen()-> used to find out the legth of string
strtolower()-> used to change the string to lower case
strtoupper()-> used to change the string to upper case
strpos()-> used for the finding the position certain letter or word in a string statement or paragraph.
	->strpos() by default only returns the first instance of finding the string that we are looking for.
substr()-> this will return a specific part of a string
str_replace()-> will find a part of string and replace it with other string of our choice(this is like normal replace)
substr_replace()-> to replace a part of string
*/
	$string = "Suroj";
	$str_lgenth=strlen($string);
	echo $str_lgenth;
	for ($x=1; $x<=$str_lgenth; $x++) {
		echo $x;
	}

	$string_lower=strtolower($string);
	echo $string_lower;

	$string_to_upper="this is to get to upper";
	$string_upper=strtoupper($string_to_upper);
	echo $string_upper;

	if(isset($_GET['user_name']) && !empty($_GET["user_name"]))
	{
		$user_name = $_GET['user_name'];
		$user_name_lc=strtolower($user_name);
		if ($user_name_lc=='alex')
		{
			echo $user_name;
			echo "Changed to lower case";
		}
	}

	$string_for_pos="This is string, and it is for position example";
	$find="is";
	$find_length=strlen($find);
	$offset=0;
	echo strpos($string_for_pos, $find, 10);
	/*
	$string_for_pos is where we are going to search for the characters
	$find is the character that we are going to search
	10 is the position from where we want to search for the characters
	*/

	while ($string_position = strpos($string_for_pos, $find, $offset))
	{
		echo "The position of ".'\''.'<strong>'.$find.'</strong>'.'\''.' is '.$string_position.'<br />';
		$offset=$string_position+$find_length;
	}
	$string_for_substr_replace="This part not to be search. This part to be searched.";
	$str_new=substr_replace($string_for_substr_replace, 'portion', 33, 4);
	echo $str_new;
	//part is replced with portion
	//substr_replace(string, replacement, start, number_of_characters_to_replace)

	$to_be_replaced_array=array("is","string","example");
	$to_be_replaced_by_array=array("IS","STRING","EXAMPLE");
	$string_replace = "This is a string, and is an example.";
	$new_string = str_replace($to_be_replaced_array, $to_be_replaced_by_array, $string_replace);
	echo '<strong>'.$new_string.'</strong>';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="#" method="GET">
		Name: <input type="text" name="user_name"><br /><br />
		<input type="submit" value="Submit">
	</form>
</body>
</html>