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
             
              <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#listatransport">
              Adauga transport nou
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
                  $sql = mysqli_query($link, "SELECT * FROM tipcalatorie");
                    while($row = mysqli_fetch_array($sql)) {
                        echo "<tr>";
                          echo "<td>{$row['id_tipCalatorie']}</td>";
                          echo "<td>{$row['tipCalatorie']}</td>";
                          ?>
                          <td><button type="button" class="btn btn-success editbtn">Edit</button></td>
                          <td><a href="stergeTransport.php?delete=<?php echo $row['id_tipCalatorie']?>" class="btn btn-danger">Delete</a></td>
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
    <div class="modal fade" id="listatransport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adauga Transport</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="insert.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Adauga Transport</label>
              <input type="text" name="transport" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adauga">
            </div>
            <button type="submit" name="saveData" class="btn btn-primary">Submit</button>
          </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


     <!-- Edit modal -->
     <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adauga Transport</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="insert.php" method="post">
          <input type="hidden" name="transport" id="tipCalatorie">

            <div class="form-group">
              <label >Adauga Transport</label>
              <input type="text" name="transport" class="form-control" id="tipCalatorie"  placeholder="Modifica">
            </div>
            
            <button type="submit" name="updateData" class="btn btn-primary">Submit</button>
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
        $('#editmodal').modal('show');

        $tr = $(this).closest('tr');

        var data =$tr.children("td").map(function () {
          return $(this).text();
        }).get();

        console.log(data);

        $('#tipCalatorie').val(data[0]);
      });
    })
    </script>