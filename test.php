<?php

$url = 'https://api.coindesk.com/v1/bpi/currentprice.json';
$responses = file_get_contents($url); // menampung hasil setelah get
if($responses === false){
    die('error broo');
}

$data = json_decode($responses, true);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" style=" background-color: black;">
        <div style="height: 50px; width: 100%; background-color: green; display: flex; justify-content: center; text-align: center; align-items: center; ">
            <h1 style="">$ BITCOIN PRIZE</h1>
        </div>
        <div class="p" style=" width: 100%; height: 100%; background-color: grey;">
            <div>

                <p>USD : <?php echo $data ['bpi']['USD']['rate']; ?></p>
                <p>GBP : <?php echo $data ['bpi']['GBP']['rate']; ?></p>
                <p>EUR : <?php echo $data ['bpi']['EUR']['rate']; ?></p>
                
            </div>
        </div>
        
    </div>
</body>
</html>