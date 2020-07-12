<?php

require_once "./config.php";

if(isset($_POST['saveData'])) {
    echo "here";
    $transportNou = $_POST['transport'];

    $query = "INSERT INTO tipcalatorie (`tipCalatorie`) VALUES ('$transportNou')";
    $result = mysqli_query($link,$query);
    var_dump($result);
    if($result){
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    } else {
        echo '<script> alert("Data NOT  Saved"); </script>';
    }
}

if(isset($_POST['updateAgent'])) {
    $username = $_POST['numeAgent'];
    $id = $_POST['idAgent'];
    $query = "UPDATE users set username = '$username' WHERE id = $id";
    $result = mysqli_query($link, $query);
    if($result) {
        echo '<script> alert("Data Updated"); </script>';
        header('Location: listaAgenti.php');
    } else {
        echo '<script> alert("Data NOT updated"); </script>';
    }
}

if(isset($_POST['savePachet'])) {
    $pachet = $_POST['pachet'];
    $query = "INSERT INTO cerinte (tipCerinte) VALUES ('$pachet')";

    $result = mysqli_query($link, $query);

    if($result) {
        echo '<script> alert("Data Updated"); </script>';
        header('Location: adaugaPachet.php');
    } else {
        echo '<script> alert("Data NOT updated"); </script>';
    }
}

if(isset($_POST['updatePachet'])) {
    $pachetName = $_POST['numePachet'];
    $id = $_POST['idPachet'];

    $query = "UPDATE cerinte SET tipCerinte = '$pachetName' WHERE id_tipCalatorie = $id";

    $result = mysqli_query($link, $query);

    if($result) {
        echo '<script> alert("Data Updated"); </script>';
        header('Location: adaugaPachet.php');
    } else {
        echo '<script> alert("Data NOT updated"); </script>';
    }

}

if(isset($_POST['editTransport'])) {
    $nume = $_POST['numeTransport'];
    $id = $_POST['idTransport'];

    $query = "UPDATE tipcalatorie SET tipCalatorie = '$nume' WHERE id_tipCalatorie = $id";

    $result = mysqli_query($link, $query);

    if($result) {
        echo '<script> alert("Data Updated"); </script>';
        header('Location: ListaTransport.php');
    } else {
        echo '<script> alert("Data NOT updated"); </script>';
    }
}
