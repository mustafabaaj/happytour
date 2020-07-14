

<?php
require_once "config.php";
if(isset($_GET['delete'])){
    $cnpId = $_GET['delete'];
    $sql = mysqli_query($link, "DELETE FROM clienti WHERE cnp = $cnpId");
    if(! $sql ) {
      die('Nu a fost sters: ' . mysql_error());
   }
   echo "Deleted data successfully\n";
   header("location: ./responsive_table.php");

   mysql_close($conn);
  }

  if(isset($_GET['stergeFactura'])){
    $cnpId = $_GET['stergeFactura'];
    $sql = mysqli_query($link, "DELETE FROM factura WHERE id = $cnpId");
    if(! $sql ) {
      die('Nu a fost sters: ' . mysql_error());
   }
   echo "Deleted data successfully\n";
   header("location: ./listaFacturi.php");

   mysql_close($conn);
  }
?>