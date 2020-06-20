

<?php
require_once "config.php";
if(isset($_GET['delete'])){
    $cnpId = $_GET['delete'];
    $sql = mysqli_query($link, "DELETE FROM clienti WHERE cnp = $cnpId");
    if(! $sql ) {
      die('Could not delete data: ' . mysql_error());
   }
   echo "Deleted data successfully\n";
   header("location: ./responsive_table.php");

   mysql_close($conn);
  }
?>