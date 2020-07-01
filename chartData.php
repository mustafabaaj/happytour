<?php
    require_once "./config.php";
    $sql = mysqli_query($link, "SELECT MONTH(data_inregistrare) MONTH, COUNT(*) COUNT FROM `clienti`GROUP BY MONTH(data_inregistrare)");
    $array = array();
    while ($row = mysqli_fetch_array($sql)) {
        $array = array($row['MONTH'] => $row['COUNT']);
    }
    echo json_encode($array);
?>
