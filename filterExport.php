<?php  
 //filter.php  
 if(isset($_POST["exportAgent"]))  
 {  
      session_start();
      require_once "./config.php";
      $output = '';  
      $user_id = $_SESSION["id"];
      $nume = $_POST['name'];
      $orders_list = "SELECT * FROM clienti WHERE nume='$nume' OR BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";  

      $result = mysqli_query($connect, $orders_list);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                <th>#</th>
                <th>Nume produs</th>
                <th>Id</th>
                <th>Cantitate</th>
                <th>Data</th>
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result)) 
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["order_id"] .'</td>  
                          <td>'. $row["product_title"] .'</td>  
                          <td>'. $row["product_id"] .'</td>  
                          <td>'. $row["product_cat"] .'</td>  
                          <td>'. $row["date"] .'</td>  
                          
    
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>
      <form method="post" action="categoriesExcel.php">
      <input type="hidden" name="startdata" value='.$_POST['from_date'].'>
      <input type="hidden" name="finishdata" value='.$_POST['to_date'].'>
      <input type="submit" name="export" class="btn btn-success" value="Export" />
     </form>
      ';  
      echo $output; 
 }  
 
 ?>
