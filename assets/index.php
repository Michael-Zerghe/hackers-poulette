<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Contact</title>
</head>
<body>
    <form method="get" action="assets/form.php">
        <p>
            <label for="firstName">First Name :</label>
            <input type="" name="firstName">
        </p>

        <p>
            <label for="lastName">Last Name :</label>
            <input type="" name="lastName">
        </p>
        

        <label for="gender">gender</label>
        <input type="radio" name="gender" value="woman">woman</input>
        <input type="radio" name="gender" value="man">man</input><br><br>

        <label for="english">Do you speak english</label><br><br>
        <input type="radio" name="english" value="yes">yes</input><br>
        <input type="radio" name="english" value="no">no</input><br><br>
        <input type="submit" name="submit" value="Greet me now">
    </form>
    

    <script src="assets/script.js"></script>
</body>
</html>



<?php

$name = $_GET['lastName'];

echo $name;

?>