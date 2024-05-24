<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SiteName</title>
</head>
<body>
    <h1>CONTACT US</h1>

    <?php

    print_r($_POST);
    echo '<hr>';
    
    echo $_POST['fullName'] . '<br>';

    echo $_POST['phoneNumber'] . '<br>';

    echo $_POST['emailAddress'] . '<br>';

    echo $_POST['actualMessage'] . '<br>';

    // Email
    // TO: User (emailAddress)
    // CC: Developer (my@emaol.com)
    // mail(
    //     'user@email.com',
    //     'Contact Us Form',
    //     $_POST['actualMessage'],
    //     'CC: ramzxs@gmail.com'
    // );

    // Save to DB
    ?>
</body>
</html>