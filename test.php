<?php
	$string = "Thisisastring";
	if (preg_match('/a/', $string))
	{
		echo "Match Found";
	}
	else
	{
		echo "No Match Found";
	}
	echo "<br />";
	echo "The following is result of function<br />";

	function has_space($string)
	{
		if (preg_match('/ /', $string))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	if (has_space($string))
	{
		echo "Has at least one space";
	}
	else
	{
		echo "Has no spaces";
	}
?>