<?php
include_once 'config.php';
session_start();
if(isset($_POST['submit']))
{
   $url_cnp = mysqli_real_escape_string($link,$_POST['cnp']);
   $sql = "SELECT * FROM clienti WHERE cnp='$url_cnp'";
   $result = mysqli_query($link,$sql);

   if((mysqli_num_rows($result)>=1)){
      echo "this user exists";
   }else{
     $id_agent = $_SESSION['id'];
     $cnp = $_POST['cnp'];
     $nume = $_POST['nume'];
     $prenume = $_POST['prenume'];
     $email = $_POST['email'];
     $numarTelefon = $_POST['numarTelefon'];
     $oras = $_POST['oras'];
     $ziNastere = $_POST['ziNastere'];
     $apartament = $_POST['apartament'];
     $localitate = $_POST['localitate'];
     $oras = $_POST['oras'];
     $strada = $_POST['strada'];
     $codPostal = $_POST['codPostal'];
     $numarPasaport = $_POST['numarPasaport'];
     $numerVisa = $_POST['numerVisa'];
   //   $pozaPasaport = $_POST['pozaPasaport'];
   //   $pozaViza = $_POST['pozaViza'];

   if($_POST['cnp'] !== '' && $_POST['nume'] !== '' && $_POST['prenume'] !== '' && $_POST['email'] !== '' && $_POST['numarTelefon'] !== '' && $_POST['oras'] !== '' && $_POST['ziNastere'] !== '' && $_POST['strada'] !== '' && $_POST['codPostal'] !== '' && $_POST['numarPasaport'] !== ''){
     $sql = "INSERT INTO clienti (id_agent ,cnp,nume,prenume, email, numer_telefon, oras ,zi_nastere,apartament ,localitate, strada, cod_postal, numar_pasaport, numarVisa)
     VALUES ($id_agent,'$cnp','$nume','$prenume','$email','$numarTelefon ','$oras','$ziNastere','$apartament','$localitate','$strada','$codPostal','$numarPasaport','$numerVisa')";
   }else {
      echo 'one filed is missing';
      return;
   }
     if (mysqli_query($link, $sql)) {
        echo "New record has been added successfully !";
        header("Location: ./adaugaClient.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
     mysqli_close($link);
   }
}

if (isset($_POST['update'])) {
   $id = $_POST['id'];
   $cnp = $_POST['cnp'];
   $nume = $_POST['nume'];
   $prenume = $_POST['prenume'];
   $email = $_POST['email'];
   $numarTelefon = $_POST['numarTelefon'];
   $oras = $_POST['oras'];
   $ziNastere = $_POST['ziNastere'];
   $strada = $_POST['strada'];
   $codPostal = $_POST['codPostal'];
   $numarPasaport = $_POST['numarPasaport'];
   $expirarePasaport = $_POST['expirarePasaport'];

   mysqli_query($link, "UPDATE clienti SET cnp='$cnp',nume='$nume' ,prenume='$prenume', email='$email', numer_telefon='$numarTelefon', oras='$oras' ,zi_nastere='$ziNastere', strada='$strada', cod_postal='$codPostal', numar_pasaport='$numarPasaport', expirare_pasaport='$expirarePasaport' WHERE cnp=$id");
   if (mysqli_query($link, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
   header('location: responsive_table.php');
}

if(isset($_POST['invoice']))
{
   $numeAgent = $_POST['numeAgent'];
   $numarMembri = $_POST['numarMembri'];
   $numarZile = $_POST['numarZile'];
   $tipcerinte = $_POST['tipcerinte'];
   $tipCaltorie = $_POST['tipCaltorie'];
   $tipPachet = $_POST['tipPachet'];
   $stare = $_POST['stare'];
   $zbor = $_POST['zbor'];
   $visa = $_POST['visa'];
   $asigurare = $_POST['asigurare'];
   $pachetSosire = $_POST['pachetSosire'];
   $destinatie = $_POST['destinatie'];
   $comentariu = $_POST['comentariu'];
   $lastUpdate = $_POST['lastUpdate'];
   $dataPlecare = $_POST['dataPlecare'];
   $dataSosire = $_POST['dataSosire'];
   $pozaPasaport = $_POST['pozaPasaport'];
   $avans = $_POST['avans'];
   $totalPlata = $_POST['totalPlata'];
   $numarPersoane = $_POST['numarPersoane'];
   $numarFamilie = $_POST['numarFamilie'];
   $adulti = $_POST['adulti'];
   $copii = $_POST['copii'];
   // if($_POST['cnp'] !== '' && $_POST['nume'] !== '' && $_POST['prenume'] !== '' && $_POST['email'] !== '' && $_POST['numarTelefon'] !== '' && $_POST['oras'] !== '' && $_POST['ziNastere'] !== '' && $_POST['strada'] !== '' && $_POST['codPostal'] !== '' && $_POST['numarPasaport'] !== '' && $_POST['expirarePasaport'] !== ''){
      $sql = "INSERT INTO factura (numeAgent,numarMembri,numarZile,tipcerinte, tipCaltorie, tipPachet, stare ,	zbor, visa, asigurare, pachetSosire,destinatie, comentariu, lastUpdate, dataPlecare, dataSosire, pozaPasaport, avans, totalPlata, numarFamilie, numarPersoane, adulti, copii)
      VALUES ('$numeAgent','$numarMembri','$numarZile','$tipcerinte','$tipCaltorie','$tipPachet ','$stare','$zbor ','$visa','$asigurare','$pachetSosire','$destinatie','$comentariu','$lastUpdate','$dataPlecare','$dataSosire','$pozaPasaport ','$avans','$totalPlata ','$numarFamilie','$numarPersoane','$adulti','$copii')";
   // }else {
   //    echo 'one filed is missing';
   //    return;
   // }
      if (mysqli_query($link, $sql)) {
        echo "New record has been added successfully !";
        header("Location: ./adaugaClient.php");
      } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
      }
      mysqli_close($link);
}

if(isset($_POST["export"])){
   header('Content-Type: text/csv; charset=utf-8');
   header('Content-Disposition: attachment; filename=clienti.csv');
   $output = fopen("php://output","w");
   fputcsv($output,array('cnp','nume','prenume','email', 'numer_telefon', 'oras' ,'zi_nastere', 'strada', 'cod_postal', 'numar_pasaport', 'expirare_pasaport','1','2','3'));
   $query = "SELECT * FROM clienti";
   $result = mysqli_query($link, $query);
   while($row = mysqli_fetch_array($result)) {
      fputcsv($output, $row);
   }
   fclose($output);
}

?>