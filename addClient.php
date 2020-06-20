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
                  <label class="col-sm-2 col-sm-2 control-label">CNP</label>
                  <div class="col-sm-10">
                    <input type="number" name="cnp" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">nume</label>
                  <div class="col-sm-10">
                    <input type="text" name="nume" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">prenume</label>
                  <div class="col-sm-10">
                    <input type="text" name="prenume" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">numar telefon</label>
                  <div class="col-sm-10">
                    <input type="number" name="numarTelefon" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">oras</label>
                  <div class="col-sm-10">
                    <input type="text" name="oras" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">zi de nastere</label>
                  <div class="col-sm-10">
                    <input type="datatime" name="ziNastere" class="form-control" required>
                  </div>
                </div>
                <h4 class="mb"><i class="fa fa-angle-right"></i>Detali Adresa</h4>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Apartament</label>
                  <div class="col-sm-10">
                    <input type="text" name="strada" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Localitate/Sector</label>
                  <div class="col-sm-10">
                    <input type="number" name="codPostal" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Oras</label>
                  <div class="col-sm-10">
                    <input type="number" name="numarPasaport" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tara</label>
                  <div class="col-sm-10">
                    <input type="number" name="numarPasaport" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Cod postal</label>
                  <div class="col-sm-10">
                    <input type="datatime" name="expirarePasaport" class="form-control" required>
                  </div>
                </div>
                <h4 class="mb"><i class="fa fa-angle-right"></i>Detali Documente</h4>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Numer pasaport</label>
                  <div class="col-sm-10">
                    <input type="datatime" name="expirarePasaport" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Numer visa</label>
                  <div class="col-sm-10">
                    <input type="datatime" name="expirarePasaport" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Atașa pasaport </label>
                  <div class="col-sm-10">
                    <input type="datatime" name="expirarePasaport" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Atașa Visa </label>
                  <div class="col-sm-10">
                    <input type="datatime" name="expirarePasaport" class="form-control" required>
                  </div>
                </div>
                <input type="submit" name="submit" class='btn btn-theme'></input>
              </form>
            </div>
          </div>
        </div>
      </section>
    </section>
    <?php require_once './partials/footer.php' ?>