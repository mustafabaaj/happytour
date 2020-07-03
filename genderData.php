<?php
    require_once "./config.php";
    $male="SELECT * FROM clienti WHERE gender='male'";
    $result_male=$link->query($male);
    $num_males=mysqli_num_rows($result_male);
    $female="SELECT * FROM clienti WHERE gender='female'";
    $result_female=$link->query($female);
    $num_females=mysqli_num_rows($result_female);

    $data=array();
    $data[0]=$num_males;
    $data[1]=$num_females;


    $result_male->close();
    $result_female->close();
    $link->close();

    print json_encode($data);
?>
