<?php
require_once("./config.php");
require_once './partials/header.php';
require_once './partials/sideBar.php';
?>


<body>
<nav class="navbar ">
        <div class="container-fluid">
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
            <table class="table table-striped table-hover" id="tableRaport">
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
                    $query = "";
                    $name = $_POST['name'];
                    $oras = $_POST['oras'];
                    if(isset($_POST['gender'])) {
                        $gender = $_POST['gender'];
                    } else {
                        $gender = "null";
                    }
                    $from = $_POST['from_data'];
                    $to = $_POST['to_data'];
                    $newDate = $from ? date("Y-m-d", strtotime($from)) : "" ;
                    $toDate = $to ? date("Y-m-d", strtotime($to)) : "";
                    if($name != "" || $oras != "" || $gender != "null" || $newDate != ""){
                        $query = "SELECT * FROM clienti WHERE nume = '$name' OR oras = '$oras' OR gender = '$gender' OR
                        data_inregistrare BETWEEN '$newDate' AND '$toDate'";
                    } else {
                        $query = "SELECT * FROM clienti";
                    }
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
                             }
                            }
                        }
            ?>


        </div>
        </tbody>
    </table>
    <input type="submit" name="exportAgent" value="CSV Export" onclick="download_table_as_csv('tableRaport')" class="btn btn-success"/>
    </div>
</body>
</html>
<?php require_once './partials/footer.php' ?>

<script>
    function download_table_as_csv(table_id) {
    // Select rows from table_id
    var rows = document.querySelectorAll('table#' + table_id + ' tr');
    // Construct csv
    var csv = [];
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll('td, th');
        for (var j = 0; j < cols.length; j++) {
            var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ')
            data = data.replace(/"/g, '""');
            row.push('"' + data + '"');
        }
        csv.push(row.join(','));
    }
    var csv_string = csv.join("\n");
    // Download it
    var filename = 'export_' + table_id + '_' + new Date().toLocaleDateString() + '.csv';
    var link = document.createElement('a');
    link.style.display = 'none';
    link.setAttribute('target', '_blank');
    link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));
    link.setAttribute('download', filename);
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
</script>