
<?php
require_once "config.php";
if(isset($_GET['delete'])){
    $Id = $_GET['delete'];
    $sql = mysqli_query($link, "DELETE FROM cerinte WHERE id_tipCalatorie = $Id");
    if(!$sql) {
      die('Nu a putut fii stearsa : ' . mysqli_error());
   }
   echo "Deleted data successfully\n";
   header("location: ./ListaTransport.php");

   mysql_close($conn);
  }
?>