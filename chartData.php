<?php
    require_once "./config.php";
    $sql = mysqli_query($link, "SELECT MONTH(data_inregistrare) MONTH, COUNT(*) COUNT FROM `clienti`GROUP BY MONTH(data_inregistrare)");
    $array = array(
        array("January" => 0),
        array("February" => 0),
        array("March" => 0),
        array("April" => 0),
        array("May" => 0),
        array("June" => 0),
        array("July" => 0),
        array("August" => 0),
        array("September" => 0),
        array("October" => 0),
        array("November" => 0),
        array("December" => 0)
    );
    while ($row = mysqli_fetch_array($sql)) {
        $monthName = date("F", mktime(0, 0, 0, $row["MONTH"], 10));
        $array[$row['MONTH'] - 1] =  array($monthName => $row['COUNT']);
    }
    echo json_encode($array);
?>
