<?php
    include_once'dbh.php';

    $first =mysqli_escape_string($conn, $_POST['first']);
    $last =mysqli_escape_string($conn, $_POST['last']);
    $email =mysqli_escape_string($conn, $_POST['email']);
    $username =mysqli_escape_string($conn, $_POST['username']);
    $password =mysqli_escape_string($conn, $_POST['pwd']);

    $sql ="INSERT into users(user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first','$last', '$email', '$username', '$password')";
    $result = mysqli_query($conn, $sql);
   
    header("Location: ../index.php?signup=success");
    ?>