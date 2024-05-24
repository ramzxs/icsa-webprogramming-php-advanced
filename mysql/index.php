<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and MySQL</title>
</head>
<body>
    <h1>PRODUCTS</h1>

    <?php
    $DBCONN = new mysqli('localhost', 'root', '', 'icsa_webprogramming_db', '3306');

    $resultPC = $DBCONN->query("SELECT * FROM `product_category`");
    // ORDER BY `seqNo` ASC
    // Backtick Character

    // $result->num_rows

    // Normal Array ($arrayName[9])
    // Associate Array ($arrayName['stringIndex'])

    while ($rowPC = $resultPC->fetch_assoc()) {
        // print_r($row);
        // echo '<br>';
        ?>

        <?php /* $rowPC['id'] */ ?>
        <h2><?= $rowPC['name'] ?></h2>
        <p><i><?= $rowPC['description'] ?></i></p>
        <hr>

        <?php

        $resultProd = $DBCONN->query("SELECT * FROM `product`
            WHERE `categoryCode` = '". $rowPC['id'] ."'
            ORDER BY `name` ASC");

        while ($prod = $resultProd->fetch_assoc()) {
            print_r($prod);
            echo '<br>';
        }
    }
    
    ?>
</body>
</html>