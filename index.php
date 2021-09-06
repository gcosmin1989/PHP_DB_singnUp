<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect to a Database in PHP</title>
</head>
<body>
    <h1>Database</h1>

    <form action="includes/signup.php" Method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="lastname">
    <br>
    <input type="email" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="username" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">Submit</button>
    </form>
   
</body>
</html>