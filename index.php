<?php
require_once './partials/header.php';
require_once './partials/sideBar.php';
?>

    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <div class="border-head">
              <h3>Clienti</h3>
            </div>
            <div class="row mt">
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5 class="fa fa-user"></h5>
                  </div>
                  <h1><strong> Numer Clienti</strong></h1>
                  <?php
                    $sql = mysqli_query($link, "SELECT id FROM clienti ORDER BY id DESC LIMIT 1");
                      while($row = mysqli_fetch_array($sql)) {
                      echo "<h2>{$row['id']}</h2>";
                   }
                  ?>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5 class="fa fa-money"></h5>
                    <h1><strong>Profit</strong></h1>
                    <h2>25$</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="custom-bar-chart">

            <canvas id="myChart" style="height: 370px; width: 100%;"></canvas>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
            </div>
          </div>
          <div class="col-lg-3 ds">
            <div class="panel terques-chart">
              <div class="panel-body">
                <div class="chart">
                  <div class="centered">
                    <span>Analiza profit</span>
                    <strong>890,00 lei</strong>
                  </div>
                  <br>
                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                </div>
              </div>
            </div>
            <h4 class="centered mt">Clienti Noi</h4>
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted>Acum 7 ore</muted>
                  <br/>
                  <a href="#">Petre alex</a> <br/>
                </p>
              </div>
            </div>
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  <?php require_once './partials/footer.php' ?>