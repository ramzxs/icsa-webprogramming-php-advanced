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
    // Object
    $DBCONN = new mysqli('localhost', 'root', '', 'icsa_webprogramming_db', '3307');

    // PROCEDURAL
    // -> OBJECT-ORIENTED PROGRAMMING (OOP)
    $resultProdCats = $DBCONN->query("SELECT * FROM `product_category`"); // SQL
    // ORDER BY `seqNo` ASC
    // Backtick Character
    
    // Associate Arrays
    // $arr[0] = 'value';

    // $result->num_rows

    // Normal Array ($arrayName[9])
    // Associate Array ($arrayName['stringIndex'])

    while ($rowProdCat = $resultProdCats->fetch_assoc()) {
        // print_r($rowProdCat);
        // echo '<br>';
        // $rowPC['id'] = Will hold the code of the product category
        ?>

        <img src="assets/<?= $rowProdCat['id'] ?>.png" width="100%" alt="">
        <h2><?= $rowProdCat['name'] ?></h2>
        <p><i><?= $rowProdCat['description'] ?></i></p>
        <hr>

        <?php
        $resultProd = $DBCONN->query("SELECT * FROM `product`
            WHERE `categoryCode` = '". $rowProdCat['id'] ."'
        ");

        while ($rowProd = $resultProd->fetch_assoc()) {
            // print_r($rowProd);
            // echo '<br>';
            ?>

            <p>
                <b><?= $rowProd['name'] ?></b>
                &nbsp;
                &mdash;
                &nbsp;
                <?= $rowProd['price'] ?>
            </p>

            <?php
        }
        
        echo '<hr><br>';
    }
    
    ?>
</body>
</html>