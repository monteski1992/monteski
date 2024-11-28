<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <table class="table table-striped">
    <tr>
        <th>States</th>
        <th>Capital</th>
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
function printStateAndCapital() {
    $statesAndCapital =
    array(
        "Abia"=>"Umuahia",
        "Adamawa"=>"Yola",
        "AkwaIbom"=>"Uuyo",
        "Anambra"=>"Awka",
        "Bauchi"=>"Bauchi",
        "Bayelsa"=>"Yenogua",
        "Benue"=>"Markurdi",
        "Borno"=>"Maiduguri",
        "CrossRiver"=>"Calabar",
        "Delta"=>"Asaba",
        "Ebonyi"=>"Abakaliki",
        "Edo"=>"Benin City",
    
    );

    if(count($statesAndCapital) > 0){
        foreach ($statesAndCapital as $key => $value) {
            echo "
                <tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr>
            ";
        };
    } else {
            echo "
             <td>no state</td>
                <td>no capital</td>
            ";
    }
    
}
?>