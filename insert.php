<?php

require_once "./config.php";

if(isset($_POST['saveData'])){
    echo "here";
$transportNou = $_POST['transport'];

$query = "INSERT INTO tipcalatorie (`tipCalatorie`) VALUES ('$transportNou')";
$result = mysqli_query($link,$query);
var_dump($result);
if($result){
    echo '<script> alert("Data Saved"); </script>';
    header('Location: index.php');
}else{
    echo '<script> alert("Data NOT  Saved"); </script>';
}
}