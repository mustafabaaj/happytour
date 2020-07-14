<?php
 require_once './partials/header.php';
?>

    <?php require_once './partials/sideBar.php' ?>
    <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i>Lista Facturi</h4>
              <section id="unseen">
                <form class="form-horizontal style-form pull-right" style="margin-bottom:20px" action="submitForm.php" method="post">
                  <input type="submit" name="exportFacturi" value="CSV Export" class="btn btn-success"/>
                </form>
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Nume Agent</th>
                      <th class="numeric">Numar Membri</th>
                      <th class="numeric">Numar Zile</th>
                      <th class="numeric">Tip Cerinta</th>
                      <th class="numeric">Tip Calatorie</th>
                      <th class="numeric">Tip Pachet</th>
                      <th class="numeric">Stare</th>
                      <th class="numeric">Zbor</th>
                      <th class="numeric">Visa</th>
                      <th class="numeric">Asigurare</th>
                      <th class="numeric">Pachet Sosire</th>
                      <th class="numeric">Destinatie</th>
                      <th class="numeric">Comentariu</th>
                      <th class="numeric">Ultima modificare</th>
                      <th class="numeric">Data Plecare</th>
                      <th class="numeric">Data Sosire</th>
                      <th class="numeric">Avans</th>
                      <th class="numeric">Total plata</th>
                      <th class="numeric">Numar familie</th>
                      <th class="numeric">Numar Persoane</th>
                      <th class="numeric">Adulti</th>
                      <th class="numeric">Copii</th>
                      <th class="numeric">Sterge</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php
                  $sql = mysqli_query($link, "SELECT * FROM factura");
                    while($row = mysqli_fetch_array($sql)) {
                        echo "<tr>";
                          echo "<td>{$row['id']}</td>";
                          echo "<td>{$row['numeAgent']}</td>";
                          echo "<td>{$row['numarMembri']}</td>";
                          echo "<td class='numeric'>{$row['numarZile']}</td>";
                          echo "<td class='numeric'>{$row['tipcerinte']}</td>";
                          echo "<td class='numeric'>{$row['tipCaltorie']}</td>";
                          echo "<td class='numeric'>{$row['tipPachet']}</td>";
                          echo "<td class='numeric'>{$row['stare']}</td>";
                          echo "<td class='numeric'>{$row['zbor']}</td>";
                          echo "<td class='numeric'>{$row['visa']}</td>";
                          echo "<td class='numeric'>{$row['asigurare']}</td>";
                          echo "<td class='numeric'>{$row['pachetSosire']}</td>";
                          echo "<td class='numeric'>{$row['destinatie']}</td>";
                          echo "<td class='numeric'>{$row['comentariu']}</td>";
                          echo "<td class='numeric'>{$row['lastUpdate']}</td>";
                          echo "<td class='numeric'>{$row['dataPlecare']}</td>";
                          echo "<td class='numeric'>{$row['dataSosire']}</td>";
                          echo "<td class='numeric'>{$row['avans']}</td>";
                          echo "<td class='numeric'>{$row['totalPlata']}</td>";
                          echo "<td class='numeric'>{$row['numarFamilie']}</td>";
                          echo "<td class='numeric'>{$row['numarPersoane']}</td>";
                          echo "<td class='numeric'>{$row['adulti']}</td>";
                          echo "<td class='numeric'>{$row['copii']}</td>";
                          ?>
                          <td><a href="deleteClient.php?stergeFactura=<?php echo $row['id']?>" class="btn btn-danger">Sterge</a></td>
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