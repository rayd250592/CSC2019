<?php

$numbers = $_GET['numbers'];
$options = $_GET['options'];
$modules = $_GET['modules'];
echo $modules;
echo "<br>";
echo "<br>";
echo "<br>";


for ($i = 1; $i <= $numbers; $i++) {

$questionvalue = "Question".$i;

$qvalue = $_GET["Text$i"];

$q = $qvalue.$i;





//	$question.$i = $_GET['Text1.$i'];

echo "Question Number:";
echo "<br>";
echo "<br>";
echo "<br>";
echo $questionvalue;
echo "<br>";
echo "<br>";
echo "<br>";


echo "Actual Question:";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<br>";
echo $qvalue;
echo "<br>";

  for ($j = 1; $j <= $options; $j++)
    {
    

	$answervalue = "Answer".$i.$j;
	$avalue = $_GET["Texta$i$j"];
	
	echo "Answer Number";
	echo "<br>";
echo "<br>";
echo "<br>";

	echo $answervalue;
	echo "<br>";
echo "<br>";
echo "<br>";

	echo "<br>";
	echo "<br>";
echo "<br>";
echo "<br>";
echo "Actual Answer";
	echo $avalue;
	echo "<br>";
echo "<br>";
echo "<br>";




	}



}

$q_insert = "INSERT INTO quiz(Quiz_ID, Module) Values (NULL, '$modules')";
echo $q_insert;

?>