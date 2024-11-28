<?php
$y = 22;

function myfunction(){
    echo $GLOBALS ["y"];
}

myfunction();

echo "<br>";

function myfunctional() {
    echo $GLOBALS ["y"];
}

myfunctional();

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];


echo "<br>";

$z= "Felix Onyemaechi Oseh";
echo "Hello $z";
echo "<br>";
echo 'Hello $z';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col md-3 lx-6 sm-3">
        <div class="for exampleformcontrolsection1">
        <form  class="form_control"action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <lable for="exampleFormControlInput1">First Name</lable>
        <input class="form-control"type="text" placeholder="First Name" name="fname" />
        <lable class="for">Last Name</lable>
        <input class="form-control"type="text" placeholder="Last Name" name="lname" />
        <button type="submit"class="btn btn-danger">Submit</button>
        </form>
        </div>
    </div>
    </div>


</body>
</html>
<?php 

$first_name = $last_name = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = htmlspecialchars ($_POST['fname']);
    $last_name = $_POST['lname'];

    echo "<h2> Good Afternoon $first_name $last_name </h2>";
}

?>
