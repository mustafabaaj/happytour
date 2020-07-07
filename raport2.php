<?php
require_once("./config.php");
require_once './partials/header.php';
require_once './partials/sideBar.php';
?>


<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <h3>Hfiltering</h3>
        </div>
</nav>
    <div class="container">
        <h3 style="text-align: center; font-weight:bold;">Filter Clienti</h3>
        <div class="row">
        <form action="raport2.php" class="form-horizontal" method="POST">
            <div class="form-group">
                <label class="col-lg-2 control-label">Nume</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" name="name" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Oras</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" name="oras" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Gender</label>
                <div class="col-lg-4">
                <input type="radio" class="form-control" name="gender" value="male" >Male
                <input type="radio" class="form-control" name="gender" value="female" >Female
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">Din Data</label>
                <div class="col-lg-4">
                    <input type="text" name="from_data" id="from" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Pana in data</label>
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
                        <th>Nume</th>
                        <th>Prenume</th>
                        <th>Email</th>
                        <th>Oras</th>
                        <th>Gender</th>
                        <th>Data incepere</th>
                    </tr>
                </thead>
            <tbody>
            <?php
                if(isset($_POST['submit'])){

                    $name = $_POST['name'];
                    $oras = $_POST['oras'];
                    if(isset($_POST['gender'])) {
                        $gender = $_POST['gender'];
                    } else {
                        $gender = "";
                    }
                    // $course = $_POST['course'];
                    $from = $_POST['from_data'];
                    $to = $_POST['to_data'];
                    $newDate = date("Y-m-d", strtotime($from));
                    $toDate = date("Y-m-d", strtotime($to));

                    // if($name != ""){
                        $query = "SELECT * FROM clienti WHERE nume = '$name' OR oras = '$oras' OR gender = '$gender' OR data_inregistrare ='$newDate' AND data_inregistrare <= '$toDate'";

                        $data = mysqli_query($link, $query);
                        if(mysqli_num_rows($data) > 0){
                            while($row = mysqli_fetch_assoc($data)){
                                $id = $row['id'];
                                $nume = $row['nume'];
                                $prenume = $row['prenume'];
                                $email = $row['email'];
                                $oras = $row['oras'];
                                $gender = $row['gender'];
                                $data_inregistrare = $row['data_inregistrare'];
                            ?>
                            <tr>
                            <td><?php echo $id; ?></td>
                                <td><?php echo $nume; ?></td>
                                <td><?php echo $prenume; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $oras; ?></td>
                                <td><?php echo $gender; ?></td>
                                <td><?php echo $data_inregistrare; ?></td>
                             </tr>
                             <?php
                            //  }
                        // } else {
                            ?>
                            <tr>
                            <?php
                            $sql = mysqli_query($link, "SELECT * FROM clienti");
                            while($row =  mysqli_fetch_array($sql)){
                                $id = $row['id'];
                                $nume = $row['nume'];
                                $prenume = $row['prenume'];
                                $email = $row['email'];
                                $oras = $row['oras'];
                                $gender = $row['gender'];
                                $data_inregistrare = $row['data_inregistrare'];
                                
                            ?>
                            <tr>
                               
                             </tr>
                         </tr>
                         <?php
                            }
                        }
                    }
                }
            ?>
            

        </div>
        </tbody>
    </table>
    <form class="form-horizontal style-form" action="submitForm.php" method="post">
            <input type="submit" name="exportAgent" value="CSV Export" class="btn btn-success"/>
    </form>
    </div>
</body>
</html>
