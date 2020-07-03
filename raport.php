<?php  

require_once './partials/header.php';
require_once './partials/sideBar.php';
require_once "./config.php";
 require_once './partials/header.php';
?>

    <?php require_once './partials/sideBar.php' ?>
    <section id="main-content">
      <section class="wrapper">
           <br /><br />  
           <div class="container" style="">  
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                     <table class="table table-bordered">  
                          <tr>  
                              <th>#</th>
                              <th>Nume produs</th>
                              <th>Id</th>
                              <th>Cantitate</th>
                              <th>trx id</th>
                              <th>Adresa</th>
                              <th>Data</th>
                          </tr>  
                     <?php  
                      $query = "SELECT * FROM clienti";  
                      $result = mysqli_query($link, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                               <td><?php echo $row["id_agent"]; ?></td>  
                               <td><?php echo $row["cnp"]; ?></td>  
                               <td><?php echo $row["nume"]; ?></td>  
                               <td><?php echo $row["prenume"]; ?></td>  
                               <td><?php echo $row["oras"]; ?></td>  
                               <td><?php echo $row["gender"]; ?></td>  
                               <td><?php echo $row["data_inregistrare"]; ?></td> 
                          </tr>  
                     <?php  
                     }  
                     ?>  
                     </table>  
                     <form method="post" action="execl.php">
                         <input type="submit" name="export" class="btn btn-success" value="Export" />
                    </form>
                </div>  
           </div>  
           <section/>
           <section/>
 </html>  
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>

 


