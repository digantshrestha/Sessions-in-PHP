<?php 

    session_start();

    $name = isset($_SESSION["name"]) ? $_SESSION["name"] : "Guest";
    $email = isset($_SESSION["email"]) ? $_SESSION["email"] : "Not subscribed";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions Page1</title>
</head>
<body>
    <h5>Thank you <?php echo $name; ?>. You have subscribed using <?php echo $email; ?>.</h5>
    <a href="page2.php">Go to page 2</a>    
</body>
</html>