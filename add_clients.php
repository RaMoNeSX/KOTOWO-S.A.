<?php
session_start();

$imie = $_POST['fname'];
$nazwisko = $_POST['lname'];
$email = $_POST['email'];
$nick = $_POST['nick'];
$pass = $_POST['pass'];

if($imie and $nazwisko and $email and $nick and $pass) {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kotowo";
   
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
   
    $sql = "INSERT INTO zawodnicy(ID, imie, nazwisko, email, pseudonim, haslo) VALUES (null, '$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$_POST[nick]', '$_POST[pass]')";
    
    $res = mysqli_query($conn, $sql);
    
    if($conn->query($sql) === TRUE) {
        header("Location: przywitanie.php");
    }

    mysqli_close($conn);
}
?>