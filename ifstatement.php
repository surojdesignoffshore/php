<?php
/*
1 here is boolean and will give value True
0 will give value False
true will print value True
false will print value False
*/

echo "If_else Statement";
echo "<br />";

if (0)
{
	echo 'True';
}
else
{
	echo "False";
}

echo "<br />";

if (1==1)
{
	echo 'True';
}
else
{
	echo "False";
}

echo "<br />";

if (1==2)
{
	echo 'True';
}
else
{
	echo "False";
}

echo "<br />";

$text = "something";
if ($text=="something")
{
	echo 'True';
}
else
{
	echo "False";
}

echo "<br />";
if ($text=="something else")
{
	echo 'True';
}
else
{
	echo "False";
}

echo "If_else if Statement";
echo "<br />";
$number = 10;
if($number==10)
{
	echo "<strong>Equal to ten</strong>";
}
elseif ($number==11)
{
	echo "<strong>Equal to eleven</strong>";
}
else
{
	echo "<strong>Not Equal</strong>";
}
?>