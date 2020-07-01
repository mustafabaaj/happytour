<?php
 require_once './partials/header.php';
 session_start();
?>
    <?php require_once './partials/sideBar.php' ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Form Components</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
              <form class="form-horizontal style-form" action="submitForm.php" method="post">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Transport nou</label>
                  <div class="col-sm-10">
                    <input type="text" name="cnp" class="form-control" required>
                  </div>
                </div>
                <input type="submit" name="submit" class='btn btn-theme'></input>
              </form>
              <table class="table table-bordered table-striped table-condensed">
                
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Tip pachet</th>
                      <th class="numeric">Modifica</th>
                      <th class="numeric">Sterge</th>
       
                    </tr>
                  </thead>
                  <tbody>
                <?php
                  $sql = mysqli_query($link, "SELECT * FROM tipcalatorie");
                    while($row = mysqli_fetch_array($sql)) {
                        echo "<tr>";
                          echo "<td>{$row['id_tipCalatorie']}</td>";
                          echo "<td>{$row['tipCalatorie']}</td>";
                          ?>
                          <td><a href="editClient.php?edit=<?php echo $row['id_tipCalatorie']?>" class="btn btn-success">Edit</a></td>
                          <td><a href="deleteClient.php?delete=<?php echo $row['id_tipCalatorie']?>" class="btn btn-danger">Delete</a></td>
                          <?php
                          echo "</tr>";
                    }
                ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </section>
    </section>
    <?php require_once './partials/footer.php' ?>