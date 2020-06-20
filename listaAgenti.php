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
                  <!-- <thead>
                    <tr>
                      <th>cnp</th>
                      <th>Nume</th>
                      <th class="numeric">Prenume</th>
                      <th class="numeric">Email</th>
                      <th class="numeric">Numar Telefon</th>
                      <th class="numeric">Oras</th>
                      <th class="numeric">Zi De Nastere</th>
                      <th class="numeric">Strada</th>
                      <th class="numeric">Cod Postal</th>
                      <th class="numeric">Numar pasaport</th>
                      <th class="numeric">Expirare pasaport</th>
                      <th class="numeric">Nr.Facuta</th>
                      <th class="numeric">Edit</th>
                      <th class="numeric">Delete</th>
                    </tr>
                  </thead> -->
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Client ID</th>
                      <th class="numeric">Nume</th>
                      <th class="numeric">Numar Telefon</th>
                      <th class="numeric">Agent</th>
                      <th class="numeric">Comentariu</th>
                      <th class="numeric">Status</th>
                      <th class="numeric">Edit</th>
                      <th class="numeric">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php
                  $sql = mysqli_query($link, "SELECT * FROM clienti");
                    while($row = mysqli_fetch_array($sql)) {
                        echo "<tr>";
                          echo "<td>{$row['cnp']}</td>";
                          echo "<td>{$row['nume']}</td>";
                          echo "<td class='numeric'>{$row['prenume']}</td>";
                          echo "<td class='numeric'>{$row['email']}</td>";
                          echo "<td class='numeric'>{$row['numer_telefon']}</td>";
                          echo "<td class='numeric'>{$row['oras']}</td>";
                          echo "<td class='numeric'>{$row['zi_nastere']}</td>";
                          echo "<td class='numeric'>{$row['strada']}</td>";
                          echo "<td class='numeric'>{$row['cod_postal']}</td>";
                          echo "<td class='numeric'>{$row['numar_pasaport']}</td>";
                          echo "<td class='numeric'>{$row['expirare_pasaport']}</td>";
                          ?>
                          <td><a href="clientTrip.php?plata=<?php echo $row['cnp']?>" class="btn btn-primary" ><?php echo $row['id_numerFactura'] ?></a></td>
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