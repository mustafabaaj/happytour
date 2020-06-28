<?php
 require_once './partials/header.php';
?>

    <?php require_once './partials/sideBar.php' ?>
    <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Responsive Table</h4>
              <section id="unseen">
                <form class="form-horizontal style-form" action="submitForm.php" method="post">
                  <input type="submit" name="export" value="CSV Export"/>
                </form>
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th class="numeric">Nume</th>
                      <th class="numeric">Edit</th>
                      <th class="numeric">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php
                  $sql = mysqli_query($link, "SELECT * FROM users");
                    while($row = mysqli_fetch_array($sql)) {
                        echo "<tr>";
                          echo "<td>{$row['id']}</td>";
                          echo "<td>{$row['username']}</td>";
                          ?>
                          <td><a href="editClient.php?edit=<?php echo $row['cnp']?>" class="btn btn-success">Edit</a></td>
                          <td><a href="deleteClient.php?delete=<?php echo $row['cnp']?>" class="btn btn-danger">Delete</a></td>
                          <?php
                          echo "</tr>";
                    }
                ?>
                  </tbody>
                </table>
              </section>
            </div>
          </div>
        </div>
      </section>
    </section>

    <?php require_once './partials/footer.php' ?>