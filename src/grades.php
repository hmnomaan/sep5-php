<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Grade : <h2>
<table border="1">
<tr>
<td>
<table>
<tr>
<td>

</td>
<td>
<?php

function workOutGradeAv($grades) {

$averagegrade=$grades/5;


echo "The Average Mark is: ".$averagegrade  ;
}
$grades=0;
if($_POST["grade1"]<40){
    echo "You Are Failed in this subject!";
if ($_POST["grade1"] < 0 || $_POST["grade1"] > 101 )   {
echo "Error! Check Input.";

}


}elseif($_POST["grade1"]<40){
    echo "You Are Failed in this subject!"; 
    
    if ($_POST["grade2"] < 0 or $_POST["grade2"] > 101 ) {
echo "Error! Check Input.";
}
} elseif($_POST["grade1"]<40){
    echo "You Are Failed in this subject!";if ($_POST["grade3"] < 0 or $_POST["grade3"] >101)  {
echo "Error! Check Input.";
}
}if($_POST["grade1"]<40){
    echo "You Are Failed in this subject!"; if ($_POST["grade4"] < 0 or $_POST["grade4"] >101)  {
echo "Error! Check Input.";
}
} elseif($_POST["grade1"]<40){
    echo "You Are Failed in this subject!";if ($_POST["grade5"] < 0 or  $_POST["grade5"]>101 ) {
echo "Error! Check Input.";
}
} else {

$grades = $grades + $_POST["grade1"] + $_POST["grade2"] + $_POST["grade3"] + $_POST["grade4"] + $_POST["grade5"];
} 

workOutGradeAv($grades);

$averagegrade=$grades/5;
echo "<br>";
echo "<br>";
echo "<br>";
if($averagegrade>=95 && $averagegrade<=100){
echo "<br> Your CGPA is : 4.00";
} 
else if($averagegrade>=80 && $averagegrade <95)
{
echo "<br> Your CGPA is : 3.75";
    
}
 else if($averagegrade>=70 && $averagegrade <80){

echo "<br> Your CGPA is : 3.65";
}
 else if($averagegrade>=60 && $averagegrade <70){
echo "<br> Your CGPA is : 3.55";

}
 else if($averagegrade>=50 && $averagegrade <60){

echo "<br> Your CGPA is : 2.75";
}
 else if($averagegrade>=45 && $averagegrade <50){

echo "<br> Your CGPA is : 2.30";
}
 else if($averagegrade>=40 && $averagegrade <45){

echo "<br> Your CGPA is : 1.20";
}
else  {
    echo "Your are Failed!!";
}


?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>