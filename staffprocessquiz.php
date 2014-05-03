<?php
include 'connect.php'; 
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
	$check = $_GET["c$i$j"];
	$question_status = $_GET["qstatus$i$j"];
	
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

echo $check;
//echo $question_status;

if ($check == 'on')

{

$question_status = "TRUE";
echo $question_status;
$correct = $question_status;


}

else if ($check == 'off')

{

$question_status = "FALSE";
echo $question_status;

}

else

{

$question_status = "FALSE";
echo $question_status;


}



	}



}



$q_insert = "INSERT INTO quiz(Quiz_ID, Module) Values (NULL, '$modules')";
echo $q_insert;
mysql_query($q_insert) or die(mysql_error());
$lastid = mysql_insert_id();
echo $lastid;
$q_question_insert = "INSERT INTO questions(Question_ID, Question, Quiz_ID) Values (NULL, '$qvalue', '$lastid')";
echo $q_question_insert;
$lastqid = mysql_insert_id();
$q_answer_insert = "INSERT INTO answer(answer_id, Answer, Question_ID, correct) Values (NULL, '$avalue', '$lastqid','$question_status')";
echo $q_answer_insert;
mysql_close();

?>