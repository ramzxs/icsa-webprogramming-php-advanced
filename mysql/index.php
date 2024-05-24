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

    $result = $DBCONN->query("SELECT * FROM `product_category`"); // Backtick Character

    // $result->num_rows

    // Normal Array ($arrayName[9])
    // Associate Array ($arrayName['stringIndex'])

    while ($row = $result->fetch_assoc()) {
        print_r($row);
        echo '<br>';
    }
    
    ?>
</body>
</html>