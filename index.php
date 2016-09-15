<?php
	$name="Suroj";
	$age=25;
	if (strtolower($name)==="suroj")
	{
		if($age>=21)
		{
			echo "You're over 21";
			if (1===1)
			{
				echo "Yes, 1 is equal to 1!";
			}
		}
	}
	else
	{
		echo "You're not Suroj!";
	}
	//concatenation in php is done by "."
	//example of concatenation
	echo 'My name is '.$name.' and I\'m '.$age.' years old.';
	echo "<br />";
	//the line can simply be printed in following way
	echo "My name is $name and I'm $age years old.";
	//but if we use single quote instead of double quote the output will be different
	echo "<br />";
	echo 'My name is $name and I\'m $age years old.';
	//the above will print the variable $name and $age too as string
	//instead of printing the value of the variable it will simply print it as plain string
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is my first php page</title>
</head>
<body>
<br />
<a href="echo.php">Echo</a><br />
<a href="print.php">Print</a><br />
<a href="outputHTML.php">Output HTML using echo_print</a><br />
<a href="embedphp.php">Embedding PHP inside HTML</a><br />
<a href="errorreporting.php">Error Reporting</a><br />
<a href="ifstatement.php">If_if else Statement</a><br />
</body>
</html>