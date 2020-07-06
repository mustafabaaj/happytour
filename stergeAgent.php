
<?php
require_once "config.php";
if(isset($_GET['delete'])){
    $Id = $_GET['delete'];
    $sql = mysqli_query($link, "DELETE FROM users WHERE id = $Id");
    if(! $sql ) {
      die('Nu a putut fii stearsa : ' . mysql_error());
   }
   echo "Deleted data successfully\n";
   header("location: ./listaagenti.php");

   mysql_close($conn);
  }
?>