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
                  <input type="submit" name="exportAgent" value="CSV Export"/>
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
                          <td><button type="button" class="btn btn-success editbtn">Edit</button></td>
                          <td><a href="stergeAgent.php?delete=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
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


    <!--EDIT MODAL-->
    <div class="modal fade" id="editAgent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Agent</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="insert.php" method="post">
          <input type="hidden" name="idAgent" id="idAgent">

            <div class="form-group">
              <label >Modifica nume agent</label>
              <input type="text" name="numeAgent" class="form-control" id="numeAgent"  placeholder="Modifica Numele agentului">
            </div>

            <button type="submit" name="updateAgent" class="btn btn-primary">Submit</button>
          </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <?php require_once './partials/footer.php' ?>

    <script>
    $(document).ready(function(){
      $('.editbtn').on('click',function () {
        $('#editAgent').modal('show');

        $tr = $(this).closest('tr');

        var data =$tr.children("td").map(function () {
          return $(this).text();
        }).get();

        console.log(data);

        $('#idAgent').val(data[0]);
        $("#numeAgent").val(data[1]);
      });
    })
    </script>
