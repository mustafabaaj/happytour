<?php
$server = "localhost";
$user ="root";
$pass="root";
$dbname ="filter";

$conn = mysqli_connect($server, $user,$pass,$dbname);

if(!$conn){
    die("Conection Faild!!." . mysqli_connect_error());

}else{
    echo "all good";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raport</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#from" ).datepicker();
        } );
        $( function() {
            $( "#to" ).datepicker();
        } );
  </script>
  </script>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <h3>Hfiltering</h3>
        </div>
</nav>
    <div class="container">
        <h3 style="text-align: center; font-weight:bold;">php filter</h3>
        <div class="row"> 
        <form action="raport2.php" class="form-horizontal" method="POST">
            <div class="form-group">
                <label class="col-lg-2 control-label">Name</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" name="name" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Gender</label>
                <div class="col-lg-4">
                <input type="radio" class="form-control" name="gender" value="Male" >Male 
                <input type="radio" class="form-control" name="gender" value="Female" >Female
                <input type="radio" class="form-control" name="gender" value="Other" >Other
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">Gender</label>
                <div class="col-lg-4">
                <select name="course" class="form-control">
                    <option>Select</option>
                    <option value="B.A">B.A</option>
                    <option value="B.COM">B.COM</option>
                    <option value="B.SC">B.SC</option>

                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">from</label>
                <div class="col-lg-4">
                    <input type="text" name="from_data" id="from" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">to</label>
                <div class="col-lg-4">
                    <input type="text" name="to_data" id="to" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label"></label>
                <div class="col-lg-4">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
        </div>
        <div class="row">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>From</th>
                        <th>To</th>
                    </tr>
                </thead>
            <tbody>
            <?php
                if(isset($_POST['submit'])){

                    $name = $_POST['name'];
                    $gender = $_POST['gender'];
                    $course = $_POST['course'];
                    $from = $_POST['from_data'];
                    $to = $_POST['to_data'];

                    if($name != "" || $gender != "" || $course != "" || $from != "" || $to != ""){
                        $query = "SELECT * FROM records WHERE name = '$name' OR gender = '$gender' OR course = '$course' ";
                        
                        $data = mysqli_query($conn, $query);
                        if(mysqli_num_rows($data) > 0){
                            while($row = mysqli_fetch_assoc($data)){
                                $id = $row['id'];
                                $name = $row['name'];
                                $gender = $row['gender'];
                                $course = $row['course'];
                                $email = $row['email'];
                                $from = $row['from_date'];
                                $to = $row['to_date'];
                            }
                            ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $gender; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $course; ?></td>
                                <td><?php echo $from; ?></td>
                                <td><?php echo $to; ?></td>
                             </tr>
                             <?php
                        } else {
                            ?>
                            <tr>
                            <td> Record Not found</td>
                         </tr>
                         <?php
                        }
                    }
                } 
            ?>
          
        </div>
        </tbody>
    </table>
    </div>
</body>
</html>