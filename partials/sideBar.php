<?php
 session_start();
?>
<aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
          <h5 class="centered"><?php echo $_SESSION['username']; ?></h5>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Clienti</span>
              </a>
            <ul class="sub">
            <li><a href="adaugaClient.php">Adauga client</a></li>
              <li><a href="responsive_table.php">Lista clienti</a></li>
              <li><a href="listaFacturi.php">Lista Facturi</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Pachete</span>
              </a>
            <ul class="sub">
            <li><a href="adaugaPachet.php">Adauga Pachete</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Agenti</span>
              </a>
            <ul class="sub">
              <li><a href="listaagenti.php">Lista angajati</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Transport</span>
              </a>
            <ul class="sub">
              <li><a href="ListaTransport.php">Lista Transport</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="raport2.php">
              <i class="fa fa-book"></i>
              <span>Raport</span>
              </a>
          </li>
          
        </ul>

      </div>
    </aside>