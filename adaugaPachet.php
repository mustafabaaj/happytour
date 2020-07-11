<?php
 require_once './partials/header.php';
 session_start();
?>
<?php require_once './partials/sideBar.php' ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Pachete</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Adauga pachet</h4>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#listaPachet">
              Adauga Pachet nou
            </button>

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
                  $sql = mysqli_query($link, "SELECT * FROM cerinte");
                    while($row = mysqli_fetch_array($sql)) {
                        echo "<tr>";
                          echo "<td>{$row['id_tipCalatorie']}</td>";
                          echo "<td>{$row['tipCerinte']}</td>";
                          ?>
                          <td><button type="button" class="btn btn-success editbtn">Edit</button></td>
                          <td><a href="deleteClient.php?delete=<?php echo $row['tipCerinte']?>" class="btn btn-danger">Delete</a></td>
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

     <!-- Modal -->
     <div class="modal fade" id="listaPachet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adauga Pachet</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="insert.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Adauga Pachet</label>
              <input type="text" name="pachet" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp" placeholder="Adauga Pachet Nou">
            </div>
            <button type="submit" name="editPachet" class="btn btn-primary">Submit</button>
          </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

        <!--EDIT MODAL-->
        <div class="modal fade" id="editPachet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Pachet</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="insert.php" method="post">
          <input type="hidden" name="idPachet" id="idPachet">

            <div class="form-group">
              <label >Modifica nume pachet</label>
              <input type="text" name="numePachet" class="form-control" id="numePachet"  placeholder="Modifica Numele Pachetului">
            </div>

            <button type="submit" name="updatePachet" class="btn btn-primary">Submit</button>
          </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <script>
    $(document).ready(function(){
      $('.editbtn').on('click',function () {
        $('#editPachet').modal('show');

        $tr = $(this).closest('tr');

        var data =$tr.children("td").map(function () {
          return $(this).text();
        }).get();

        console.log(data);

        $('#idPachet').val(data[0]);
      });
    })
    </script>

    <?php require_once './partials/footer.php' ?>
