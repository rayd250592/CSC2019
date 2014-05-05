<form name="res" action="results.php">

<?php


$noq = $_GET['noq'];
$noo = $_GET['noo'];
$correctcount = 0;

for ($j = 0; $j <= ($noq -1); $j++) 
{
$l = $j+1;
echo "Questions";
echo ($l);


for ($k = 0; $k <= ($noo -1); $k++) 
{

$actualans = $_GET["Answer$j$k"];

if ($actualans == "on")


{

$userans = "1";

}


else


{

$userans = "0";


}

$dans = $_GET["checka$j$k"];



if ($userans == $dans)

{

 $correctcount++;

}




echo "<br>";
echo "<br>";
echo "Users Answer";
echo "<br>";
echo "<br>";
echo $userans;
echo "<br>";
echo "<br>";
echo "Database Answer";
echo "<br>";
echo "<br>";

echo $dans;
echo "<br>";
echo "<br>";


}


}



//echo $noq;

//echo $noo;

echo "Score";
$result = ($correctcount / $noq);
//echo $result;
echo "<input name='scoretext' type='text'  style='margin-left:10px' value='$result'  />";
header( 'Location: results.php?score='.$result	) ;


?>

</form>
