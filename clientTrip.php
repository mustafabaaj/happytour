<?php
 require_once './partials/header.php';
?>

    <?php require_once './partials/sideBar.php' ?>

    <?php

            if(isset($_GET['plata'])){
                $cnpId = $_GET['plata'];
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
        <h3><i class="fa fa-angle-right"></i> Factura</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="col-lg-12">
                <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right">Factura</i> </h4>
                <form class="form-horizontal style-form" action="submitForm.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $cnpId; ?>">
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nume agent</label>
                        <div class="col-sm-10">
                            <input name="numeAgent" value="<?php echo $_SESSION['username']; ?>" class="col-form-label" readonly></input>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">CNP</label>
                        <div class="col-sm-5">
                            <label name="cnp" class="col-form-label"><?php echo $cnp ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">nume complet</label>
                        <div class="col-sm-5">
                            <label name="nume complet"><?php echo $nume . " ". $prenume ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">numar pasaport</label>
                        <div class="col-sm-5">
                            <label  name="numarPasaport"><?php echo $numarPasaport ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Numar membri</label>
                        <div class="col-sm-5">
                            <input type="number" name="numarMembri" value="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Numar zile</label>
                        <div class="col-sm-5">
                            <input type="number" name="numarZile" value= "" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tipul cerințelor</label>
                        <div class="col-sm-5">
                            <select id="cars" name="tipcerinte">
                                <option>Selectati</option>
                                <option>Pachet sosire + zbor + visa</option>
                                <option>Pachet sosire + zbor</option>
                                <option>Pachet sosire + visa</option>
                                <option>visa + zbor</option>
                                <option>Pachet sosire</option>
                                <option>zbor</option>
                                <option>visa</option>
                                <option>Group</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">tip de călătorie</label>
                        <div class="col-sm-5">
                            <select id="cars" name="tipCaltorie">
                                <option>Selectati</option>
                                <option>Avion</option>
                                <option>Vapor</option>
                                <option>autocar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Pachete</label>
                        <div class="col-sm-5">
                            <select id="cars" name="tipPachet">
                                <option>Selectati</option>
                                <option>Family pack</option>
                                <option>single pack</option>
                                <option>Copule pack</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Status</label>
                        <div class="col-sm-5">
                            <select id="cars" name="stare">
                                <option>Selectati</option>
                                <option>Confirmat</option>
                                <option>Ne platit</option>
                                <option>In progres</option>
                                <option>Inchis</option>
                                <option>Inchis fara confirmare</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Zbor</label>
                        <div class="col-sm-5">
                            <input type="checkbox" name="zbor" value="Zbor" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Visa</label>
                        <div class="col-sm-5">
                            <input type="checkbox" name="visa" value="Visa" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Asigurare</label>
                        <div class="col-sm-5">
                            <input type="checkbox" name="asigurare" value="Asigurare" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Pachet sosire</label>
                        <div class="col-sm-5">
                            <input type="checkbox" name="pachetSosire" value="Pachet sosire" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Destinatie</label>
                        <div class="col-sm-5">
                        <select id="cars" name="destinatie">
                        <option>Selectati</option>
                        <?php
                        $sql = mysqli_query($link, "SELECT * FROM apps_countries");
                        while($row = mysqli_fetch_array($sql)) {
                            $tara = $row['country_name'];
                           echo '<option>'."$tara".'</option>';
                        }
                        ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Comentariu</label>
                        <div class="col-sm-5">
                            <input type="textarea" name="comentariu"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Update</label>
                      <div class="col-md-3 col-xs-11">
                        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="" class="input-append date dpYears">
                          <input type="text" readonly="" name="lastUpdate" value="2020-05-14" size="16" class="form-control">
                          <span class="input-group-btn add-on">
                            <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                        </div>
                        <span class="help-block">Select date</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Data plecare</label>
                      <div class="col-md-3 col-xs-11">
                        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="" class="input-append date dpYears">
                          <input type="text" readonly="" name="dataPlecare" value="2020-05-14" size="16" class="form-control">
                          <span class="input-group-btn add-on">
                            <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                        </div>
                        <span class="help-block">Select date</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Data Sosire</label>
                      <div class="col-md-3 col-xs-11">
                        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="" class="input-append date dpYears">
                          <input type="text" readonly="" name="dataSosire" value="" size="16" class="form-control">
                          <span class="input-group-btn add-on">
                            <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                        </div>
                        <span class="help-block">Select date</span>
                      </div>
                    </div>
                    <div class="row mt">
                        <div class="col-lg-12">
                            <label class="control-label col-md-3">Image Upload</label>
                            <div class="col-md-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-theme02 btn-file">
                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i>Selectati imagine</span>
                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                    <input type="file" name="pozaPasaport" class="default" />
                                    </span>
                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Avans</label>
                        <div class="col-sm-5">
                            <input type="text" name="avans" value="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Total plata</label>
                        <div class="col-sm-5">
                            <input type="text" name="totalPlata" value="" class="form-control">
                        </div>
                    </div>
                    <h4 class="mb"><i class="fa fa-angle-right"></i>Informati despre calatorie</h4>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Numar familie</label>
                        <div class="col-sm-5">
                            <input type="text" name="numarFamilie" value="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Numar persoane</label>
                        <div class="col-sm-5">
                            <input type="text" name="numarPersoane" value="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Adulti</label>
                        <div class="col-sm-5">
                            <input type="text" name="adulti" value="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Copii</label>
                        <div class="col-sm-5">
                            <input type="text" name="copii" value="" class="form-control">
                        </div>
                    </div>
                    <button type="submit" name="invoice" class='btn btn-theme'>Factura</button>
                </form>
                </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <?php require_once './partials/footer.php' ?>
