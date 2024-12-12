<?php

$y =22; 

function myfunction(){
    echo $GLOBALS ['y'];
}


// myfuncton();

echo "<br>";
echo"<br>";

//supre global to be considrerd 

//$GLOBALS
// $_SERVER
//$_POST
// $_GET


echo $_SERVER['PHP_SELF'];


echo "<br>";
echo $_SERVER['SERVER_NAME'];

echo "<br>";
// Single quote and double quotes difference
$z= "Mary";
echo "Hello $z";
echo "<br>";
echo 'Hello $z';

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"
method="POST" >

<input type="text" placeholder="first Name" name="fname">
<br><br>
<input type="text" placeholder="Last Name" name="lname">
<br><br>
<button type="submit">Sumit</button>

</form>

<?php
$first_name = $last_name = "" ;
// initialise variable to empty stering

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    // checking if form is submitted vi POST method 
    $first_name = htmlspecialchars ( $_POST['fname']);
    // $_POST['fname'] holds form data of form that used to post method
    // htmspecialchars helps to prevent malicious codes
    
    $last_name = $_POST['lname'];
    
    echo "<h2>  Good Afternoon  $first_name $last_name </
    <h2>";

  //  <script>malicious code displayed as plain text</script>
}





