<?php

$numbers = $_GET['numbers'];
$options = $_GET['options'];
$modules = $_GET['modules'];


for ($i = 1; $i <= $numbers; $i++) {

$questionvalue = "Question".$i;

$qvalue = $_GET["Text$i"];

$q = $qvalue.$i;





//	$question.$i = $_GET['Text1.$i'];

echo $questionvalue;
echo "<br>";
echo $qvalue;
echo "<br>";

  for ($j = 1; $j <= $options; $j++)
    {
    

	$answervalue = "Answer".$j;
	$avalue = $_GET["Texta$j"];
	
	echo $answervalue;
	echo "<br>";
	echo $avalue;

	}



}

?>