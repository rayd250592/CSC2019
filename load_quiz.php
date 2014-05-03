<?php

include('connect.php');
$module= $_GET['mod'];


//echo $module;


$query = "SELECT Quiz_ID, no_of_questions, no_of_options FROM `quiz` WHERE `Module` = '$module'";
echo $query;
$quiz_query = mysql_query($query);
$row = mysql_fetch_row($quiz_query);
$lastid = $row[0];
$no_of_questions = $row[1];
$no_of_options = $row[2];




$q_question_query = "SELECT Question_ID, Question FROM `questions` WHERE  QUIZ_ID = '$lastid'";
echo $q_question_query;
$qid = mysql_query($q_question_query);
$row = mysql_fetch_row($qid);
$qlinkid = $row[0];

$q_answer_query = "SELECT answer_id, Answer, QUESTION_ID, correct FROM `answer` WHERE QUESTION_ID = '$qlinkid'";
echo $q_answer_query;


?>
