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
$fullName = array("evans","nduoma","edike");
echo "<br>";
var_dump($fullName);
echo "<br>";
echo $fullName[1];

echo "<br>";
echo  "my first name is $fullName[0]
and my surname is $fullName[1]";

//null
$nothing = null;

echo "<br>";






//31/10/2024
//operators
//arithmetic operators
$x =10;
$y =5;
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

//increment and decrement operators
$x++;

echo $x;

echo "<br>";


$x--;
echo $x;
echo "<br>";


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


// 11/4/2024
//PHP conditional Statements

// There are four notable conditional Statements in PHP viz

// If Statements
 if (7>3) {
    echo "Have a good day";
    echo "<br>";
 }




// If else statement

// Switch statement

// elseif statement

// if...elseif...ELSE statement


// IF STATEMENT 
// ____________

$my_name = "Johnny Ailes";
$present_time = date (format:"H:i");

echo "<br>";

echo " Present Time: $present_time <br>";


if($present_time >= 00.00 && $present_time < 12.00){
    echo "<h3> Good morning, $my_name! </h3>";
}

elseif($present_time >= 12.00 && $present_time <16.00) {
    echo "<h3> Good Afternoon, $my_name! </h3>";
}
elseif($present_time >= 16.00 && $present_time <= 23.59) {
    echo "<h3> Good Night, $my_name! </h3>";
}

echo "<br>";

$d1 = new DateTime('11:00:00');
$d2 = new DateTime('04:00:00');



// Switch Statement 
//_______
$today = date (format: "D");
echo "Today is: $today <br>";    


switch ($today) {
    case "Mon":
        echo "Hello everyone It's monday. Have a great week!";
        break;
    case "Tue";
         echo "Hello everybody, it's Tuesday. Do have a splendid week!";
         break;    
    case "Wed";
         echo "Hello everybody, it's Wednesday. Do have a splendid week!";
         break;    
    case "Thurs";
         echo "Hello everybody, it's Thursday. Do have a splendid week!";
         break;    
    case "Fri";
         echo "Hello everybody, it's Friday. Do have a splendid week!";
         break;    
    case "Sat";
         echo "Hello everybody, it's Saturday. Do have a splendid week!";
         break;    
    case "Sun";
         echo "Hello everybody, it's Sunday. Do have a splendid week!";
         break;    
    default:
         echo "Sorry, this is not a day in the week!";
         break;
    }
echo "<br>";

$j =2;
while ($j < 8) {
     echo $j;
     $j++;
}

echo "<br>";

$j =2;
while ($j <= 8) {
     echo $j;
     $j++;

}




//15/11/024
// Arrays
$domesticAnimals = array ('Dog', 'Cat','Horses','Goat','Cow');
$cities = ['Asaba','Warri','Ugheli','Sapele','Agbor'];

echo "<br>" .$domestics[0]; 


// indexed array  
// associative array
// multi-dimension array


//count
echo count ($domesticAnimals).



//array_push
array_push($cities, 'Abraka');

var_dump($cities);


$cities[2] ='ogwashi-uku';

echo "<br>";

var_dump($cities);


// associate arrya 
$phone = ['brand'=>'iphone','model'=>'14 pro','color'=>'white', 'ROM' =>256];

echo '<br>';

var_dump($phone);
$phone('model') ='15 pro';

echo '<br>';
var_dump($phone);


25/11/024

function street ($name){
     echo "$name Asaba. <br>";
}

streetName("DLA");
streetName("Ezenei");

echo "<br>";
echo "<br>";


function HomeAdress ($number, $name) {
     echo "$number  street $name  Asaba, <br>";
}



<?php














myfunction


//28th November

// super globals to be considered

// $GLOBALS
// $-




































?>