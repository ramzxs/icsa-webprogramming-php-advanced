<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SiteName</title>
</head>
<body>
    <!-- header></header -->

    <h1>CONTACT US</h1>

    <form action="formprocessor.php"  method="get">
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>Name: *</td>
            <td>
                <input type="text" required>
            </td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td>
                <input type="tel">
            </td>
        </tr>
        <tr>
            <td>Email: *</td>
            <td>
                <input type="email" required>
            </td>
        </tr>
        <tr>
            <td>Message: *</td>
            <td>
                <textarea rows="10" cols="80"  required></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Send">
            </td>
        </tr>
    </table>
    </form>
    
    <!-- <footer></footer> -->
</body>
</html>