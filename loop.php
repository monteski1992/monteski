<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State & capital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
<table class="table table-striped">
    <tr>
        <th>states</th>
        <th>capital</th>
    </tr>


    <?php 
    printStateAndCapital();
    ?>

    
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
    function printStateAndCapital(){
        $statesAndCapitals = 
        array(
            'Abia'=>'Umuahia',
            'Adamawa'=>'Yola',
            'Anambra'=>'Awka',
            'Akwa-Ibom'=>'Uyo',
            'Bauchi'=>'Bauchi',
            'Bayelsa'=>'Yenagoa',
            'Benue'=>'Makurdi',
            'Borno'=>'Maiduguri',
            'Cross River'=>'Calabar',
            'Delta'=>'Abasa',
            'Ebonyi'=>'Abakaliki',
            'Edo'=>'Benin',
            'Ekiti'=>'Ado Ekiti',
            'Enugu'=>'Enugu',
            'Gombe'=>'Gombe',
            'Imo'=>'Owerri',
            'Jigawa'=>'Dutse',
            'Kaduna'=>'Kaduna',
            'Kanu'=>'Kanu',
            'Katsina'=>'Katsina',
            'Kebbi'=>'Burnin Kebbi',
            'Kogi'=>'Lokoja',
            'Kwara'=>'Ilorin',
            'Lagos'=>'Ikeja',
            'Nasarawa'=>'Lafia',
            'Niger'=>'Minna',
            'Ogun'=>'Abeokuta',
            'Ondo'=>'Akure',
            'Osun'=>'Oshogbo',
            'Oyo'=>'Ibadan',
            'Plateau'=>'Jos',
            'Rivers'=>'Port Haicourt',
            'Sokoto'=>'Sokoto',
            'Taraba'=>'Jalingo',
            'Yobe'=>'Damaturu',
            'Zamfara'=>'Gusau',
            'Federal Capital Teeritoy(FCT)'=>'Abuja',
        );
        if(count($statesAndCapitals) > 0){
            foreach($statesAndCapitals as $key => $value){
                echo "
                    <tr>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>
                ";
            };    
        } else {
                 echo "
                <td> no state</td>
                <td>no capital</td>
            ";
        }
        
    }
?>