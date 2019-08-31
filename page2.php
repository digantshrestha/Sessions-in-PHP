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
    <title>PHP Session Page2</title>
</head>
<body>
    <h2>Name : <?php echo $name?></h2>
    <h2>Email : <?php echo $email?></h2>
</body>
</html>