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

<section class="wrap">
    <form method="get" action="">
        <p>
            <label for="firstName">First Name :</label>
            <input type="" name="firstName" id="firstName">
        </p>

        <p>
            <label for="lastName">Last Name :</label>
            <input type="" name="lastName">
        </p>

        <p>
            <label for="firstName">email :</label>
            <input type="" name="email" id="email">
        </p>
        
        <p>
            <label for="gender">Gender : </label>
           <ul> 
                <li> <input type="radio" name="gender" value="woman">woman</input> </li>
                <li> <input type="radio" name="gender" value="man">man</input> </li>
           </ul>
        </p>

        <p>
            <label for="country">Country :</label>
            <input type="" name="country">
        </p>
        
        <p>
            <label for="subject">Subject : </label>

            <select name="subject">
                <option value="other">--Please choose an option--</option>
                <option value="refund">refund</option>
                <option value="infos">informations</option>
                <option value="order">make an order</option>
                
                
            </select>
        </p>

        <p>
            <textarea rows="5" cols="50" name="comment" form="usrform" id='textArea'>Enter text here...</textarea>
        </p>
        
        <p>
            <input type="submit" name='submit' id="submit">

        </p>

    </form>
</section>




    <?php

$name = $_GET['lastName'];
$fName = $_GET['firstName'];
$gender = $_GET['gender'];
$country = $_GET['country'];



if(isset($_GET['subject'])){ 
    $subject = $_GET['subject']; 
  }
  if(isset($_GET['comment'])){ 
    $subject = $_GET['comment']; 
  }
echo $comment;
if ($name == null || $fName == null || $gender == null || $country == null || $comment == null ){
    echo 'please fill in your name';
}


    ?>

<script src="assets/script.js"></script>
</body>
</html>
