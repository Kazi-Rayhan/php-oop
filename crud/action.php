<?php
include 'db.php';
session_start();


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO jonogon(name,phone,email,password) VALUES('$name','$phone','$email','$password')";
    //  echo $query;
    mysqli_query($db, $query);
    $_SESSION['message'] = "Address saved"; 
}
header('location: index.php');
