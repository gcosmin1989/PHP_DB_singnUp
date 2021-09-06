<?php
include_once "includes/dbh.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Created a template 
    $sql= "SELECT * FROM users WHERE user_uid='admin'=?;";
    //Create a prepared statement
    $stmt =mysqli_stmt_init();
 
        while($row =mysqli_fetch_assoc($results)){
            echo $row['user_uid'].'<br>';
        }




    ?>
</body>
</html>