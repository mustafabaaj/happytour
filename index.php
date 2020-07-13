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
                  <h1><strong> Numar Clienti</strong></h1>
                  <?php
                    $sql = mysqli_query($link, "SELECT COUNT(*) as totalClienti FROM clienti");
                    $data = mysqli_fetch_assoc($sql);
                    $total = $data['totalClienti'];
                  ?>
                  <h2><?php echo($total) ?></h2>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5 class="fa fa-money"></h5>
                    <h1><strong>Profit</strong></h1>
                    <?php
                      $sql = mysqli_query($link, "SELECT sum(totalPlata) as total from factura");
                      $row = mysqli_fetch_assoc($sql);
                      $sum = $row['total'];
                    ?>
                    <h2><?php echo($sum) ?> Lei</h2>
                  </div>
                </div>
              </div>
    
            <div class="custom-bar-chart">
            <div class="col-md-4 col-sm-4 mb">
                <div class="custom-bar-chart">
                  <canvas id="myChart2" "></canvas>
                  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                </div>
            </div>
            <canvas id="myChart" style="height: 370px; width: 100%;"></canvas>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
            </div>
            </div>
          </div>
          <div class="col-lg-3 ds">
            <div class="panel terques-chart">
              <div class="panel-body">
                <div class="chart">
   
               
                  <?php
                    require_once "./config.php";
                    $sql = mysqli_query($link, "SELECT totalPlata FROM factura LIMIT 5");
                    $array = array();
                    $result =0;
                    while ($row = mysqli_fetch_assoc($sql)) {
                        $array[] =  intval($row['totalPlata']);
                        $result += $row['totalPlata'];
                      }
                      echo  '<div class="centered">';
                      echo  '<span>Analiza profit</span>';
                      echo  '<strong> '.$result .'</strong>';
                      echo  '</div>';
                      echo  '<br>';
                    echo '<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="'.json_encode($array).'"></div>';

                ?>
                </div>
              </div>
            </div>
            <h4 class="centered mt">Clienti Noi</h4>
            <div class="desc" style="text-align: center;">
              
                <p>
                <?php
                  $sql = mysqli_query($link, "SELECT * FROM clienti ORDER BY id DESC LIMIT 5");
                  echo '<br/>';
                    while($row = mysqli_fetch_array($sql)) {
                     echo '<a href="#">' .$row['nume'] .'</a> <br/>';
                    }
                ?>
                </p>
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
