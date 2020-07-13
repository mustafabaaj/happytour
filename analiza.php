<?php
    require_once "./config.php";
    $sql = mysqli_query($link, "SELECT totalPlata FROM factura");
    $array = array();
    while ($row = mysqli_fetch_assoc($sql)) {
        $array[] =  $row['totalPlata'];
    }
    echo json_encode($array);
?>
