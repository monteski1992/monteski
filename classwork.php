
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Work (Back End Dev)</title>
</head>
<body>
    

<?php

echo "my website <br>";

$myName = 'evans';

var_dump($myName);

$yearsOfExperience = 5;

echo "<br>";

var_dump($yearsOfExperience);

$height = 6.1;

echo "<br>";

var_dump($height);

$isMale = true;
echo "<br>";
var_dump($isMale);

// array
$fullName = array("evans", "nduoma", "edike");
echo "<br>";
var_dump($fullName);
echo "<br>";
echo $fullName[1];

echo "<br>";

echo "my first name is $fullName[0];
and my surname is $fullName[1]";

// 28/10/2024
// NULL
$nothing = null;

echo "<br>";

var_dump($nothing);

define("pi", 3.104);
echo "<br>";
var_dump(pi);

const gravityacceleration = 10;
gravityacceleration - 20;
echo "<br>";

var_dump(gravityacceleration);

echo "<br>";

$x = 10;
$y = 5;

echo $x + $y;
echo "<br>";

echo $x - $y;

echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x % $y;
echo "<br>";

echo $x ** $y;
echo "<br>";

//increment operator and decrement of operator

$x++;
echo $x++;
echo "<br>";

$x--;

$x--;
echo $x;


// Assignment operators
echo "<br>";
$a = ($b = 4) + 5;

echo $a;

echo "<br>";


$a = 3;
$b = &$a;

print "$a\n";
print "$b\n";

$a = 4;

print "$a\n";
print "$b\n";


echo "<br>";

$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}




$x=300;
$y=10;
$z=$x*$y;
echo "Total Sum:",$z;


echo "<br>";


$first = 20;
$second = 1000;

$sum = $first * $second;

echo "Result: ". $sum;

echo "<br>";

$str = "Tutirials Class";
echo strrev($str);

echo "<br>";

$str = "Toturials Class";
echo strlen($str);

echo "<br>";


$sample_world = "Welcome to federal goverment program where we learn php backend";
echo str_word_count($sample_world);


echo "<br>";


$str = "Toturials Class";
echo strtoupper($str);

//logical operator and conditional statement
echo "<br>";

if ($x == 300 && $y == 10 ) {
 echo "We are good to go.";
}

echo "<br>";
if ($x == 300 || $y == 4 ) {
    echo "The correct answer is True";
}

echo "<br>";
if ($x == 300 xor $y == 5 ) {
    echo "The Good work of man";
}

echo "<br>";
if (!($x == 303) ) {
    echo "is not working 1.";
}

// PHP Conditional Statement
// there are four notable conditional statement in PHP VIZ

//if statement

//if else statement

//else if statement

//switch statement

// if statement 

$my_name =  "Oseh Felix Onyemaechi";
$present_time = date (format: "H:i"); 

echo "<br>";

echo "present_time: $present_time <br>";

if($present_time >= 00.00 && $present_time < 12.00){
 echo "<h3> Good Morning: $my_name! </h3>";
}
elseif($present_time >= 12.00 && $present_time < 16.00){
     echo  "<h3> Good Afternoon: $my_name! </h3>";
}
elseif($present_time >= 16.00 && $present_time <= 23.59){
   echo  "<h3> Good Night: $my_name! </h3>";
}


echo "<br>";
$d1 = new DateTime('11:00:00');
$d2 = new DateTime('04:00:00');

$diff = $d1 ->diff($d2);
echo $diff->h,  " hours\n " , $diff->i,  " minutes\n ";


echo "<br>";

$today = date (format: "D");
echo "Today day is: $today";

switch ($today) {
    case "Mon";
    echo "Hello everything. it's Monday, Have a wonderful week!";
    break;
    case "Tue";
    echo "Hello everything. it's Tuesday, Have a wonderful week!";
    break;
    case "Wed";
    echo "Hello everything. it's Wednesday, Have a wonderful week!";
    break;
    case "Thu";
    echo "Hello everything. it's Thursday, Have a wonderful week!";
    break;
    case "Fri";
    echo "Hello everything. it's Friday, Have a wonderful week!";
    break;
    case "Sat";
    echo "Hello everything. it's Saturday, Have a wonderful week!";
    break;
    case "Sun";
    echo "Hello everything. it's Sunday, Have a wonderful week!";
    break; 
}
echo "<br>";

$j = 2;
while($j < 8) {
    echo $j;
    $j++;
}
echo "<br>";

$j = 2;
while($j <= 8) {
    echo $j;
    $j++;
}

echo "<br>";

$f = 5;

do{
    echo $f, "<br>";
    $f++;
}while ($f <= 10);


echo "<br>";


$cars = array("BMW", "LEXUS", "FERRARY", "BENS");
    echo "i love $cars[0] <br>";
    echo "i love $cars[1] <br>";
    echo "i love $cars[2] <br>";
    echo "i love $cars[3] <br>";


echo "<br>";

$cars = array("COROLA","GAG","vOLVO","SONIA");

foreach ($cars as  $car){
    echo "i love $car <br>";
}

echo "<br>";

Function greetMe(){
    echo "<br> Good Afternoon";
}
greetMe();
?>
