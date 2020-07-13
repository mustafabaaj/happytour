<?php
 require_once './partials/header.php';
?>
    <?php require_once './partials/sideBar.php' ?>
    <?php
        if(isset($_GET['edit'])){
            $cnpId = $_GET['edit'];
            $sql = mysqli_query($link, "SELECT * FROM clienti WHERE cnp = $cnpId");
            while($row = mysqli_fetch_array($sql)) {
                $cnp = $row['cnp'];
                $nume = $row['nume'];
                $prenume = $row['prenume'];
                $email = $row['email'];
                $numarTelefon = $row['numer_telefon'];
                $oras = $row['oras'];
                $ziNastere = $row['zi_nastere'];
                $strada = $row['strada'];
                $codPostal = $row['cod_postal'];
                $numarPasaport = $row['numar_pasaport'];
            }
        }
    ?>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Form Components</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
              <form class="form-horizontal style-form" action="submitForm.php" method="post">
              <input type="hidden" name="id" value="<?php echo $cnpId; ?>" required>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">CNP</label>
                  <div class="col-sm-10">
                    <input type="number" name="cnp" value= "<?php echo $cnp ?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">nume</label>
                  <div class="col-sm-10">
                    <input type="text" name="nume" value= "<?php echo $nume ?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">prenume</label>
                  <div class="col-sm-10">
                    <input type="text" name="prenume" value= "<?php echo $prenume ?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" value= "<?php echo $email ?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">numar telefon</label>
                  <div class="col-sm-10">
                    <input type="number" name="numarTelefon" value= "<?php echo $numarTelefon ?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">oras</label>
                  <div class="col-sm-10">
                    <input type="text" name="oras" value= "<?php echo $oras ?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">zi de nastere</label>
                  <div class="col-sm-10">
                    <input type="datatime" name="ziNastere" value= "<?php echo $ziNastere ?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">strada</label>
                  <div class="col-sm-10">
                    <input type="text" name="strada" value= "<?php echo $strada ?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">cod postal</label>
                  <div class="col-sm-10">
                    <input type="number" name="codPostal" value= "<?php echo $codPostal ?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">numar pasaport</label>
                  <div class="col-sm-10">
                    <input type="number" name="numarPasaport" value= "<?php echo $numarPasaport ?>" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">expirare pasaport</label>
                  <div class="col-sm-10">
                    <input type="datatime" name="expirarePasaport" value= "<?php echo $expirarePasaport ?>" class="form-control" required>
                  </div>
                </div>
                <button type="submit" name="update" class='btn btn-theme'>Update</button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </section>
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Happy tour</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="form_component.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
  </section>
  <?php require_once './partials/footer.php' ?>