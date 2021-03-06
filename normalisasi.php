<!DOCTYPE html>
<html lang="en">
<?php
    include('koneksi.php');
?>

<head>
  <title>SPK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>
  <style>
    .card-body {
      background-color: #fff !important;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto snip1135">
        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link" href="idataeskul.php"></a> -->
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Input Data
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="idataeskul.php">Data Eskul</a>
            <a class="dropdown-item" href="idatanilai.php">Data Nilai</a>
            <a class="dropdown-item" href="idatabobot.php">Data Bobot</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link" href="idataeskul.php"></a> -->
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            View Data
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="vdataeskul.php">Data Siswa</a>
            <a class="dropdown-item" href="vdatanilai.php">Data Nilai</a>
            <a class="dropdown-item" href="vdatabobot.php">Data Bobot</a>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="matrikskeputusan.php">Hitung ARAS</a></li>
    </div>
  </nav>

  <div class="container">
    <div class="card m-5">
      <div class="card-body">
        <ul class="nav nav-tabs nav-justified">
        
          <li class="nav-item">
            <a class="nav-link" href="matrikskeputusan.php">Matriks Keputusan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="nilaibobot.php">Nilai Bobot</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="normalisasi.php">Normalisasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perangkingan.php">Perangkingan</a>
          </li>
        </ul>
        <br>
        <div class="panel panel-info">
          <div class="panel-body">
            
          <!-- <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Alternatif</th>
                  <th>event</th>
                  <th>kreatif</th>
                  <th>Nilai bakat</th>
                  <th>Nilai prestasi Masuk</th>
                </tr>
              </thead>
              <br>
              <h4>Matriks Keputusan</h4>
              <?php

                      $sql="SELECT MAX(event), MAX(kreatif), MAX(bakat), MAX(prestasi) FROM tb_nilai";
                      $result=mysqli_query($konek_db,$sql); //row melihat dari sql
                      while($row=mysqli_fetch_array($result)){
                          $Maxevent    = $row[0];
                          $Maxkreatif  = $row[1];
                          $Maxbakat    = $row[2];
                          $Maxprestasi = $row[3];
                          
                          
                      }
                      echo "
                          <tr>
                                <td>Optimal</td>
                                <td>".$Maxevent."</td>
                                <td>".$Maxkreatif."</td>
                                <td>".$Maxbakat."</td>
                                <td>".$Maxprestasi."</td>
                                
                                </tr>
                      ";

                        $sql="SELECT alternatif,event,kreatif,bakat,prestasi FROM tb_nilai";
                        $result=mysqli_query($konek_db,$sql);
                            while($row=mysqli_fetch_array($result)){
                                    echo "      
                                  <tr>  
                                        <td>".$row[0]."</td>  
                                        <td>".$row[1]."</td>
                                        <td>".$row[2]."</td>
                                        <td>".$row[3]."</td>
                                        <td>".$row[4]."</td>
                                        
                                        </tr>   
                              "; 

                    }


                       $sql="SELECT SUM(event), SUM(kreatif), SUM(bakat), SUM(prestasi) FROM tb_nilai";
                              $result=mysqli_query($konek_db,$sql); //row melihat dari sql
                              while($row=mysqli_fetch_array($result)){
                                  $Sumevent     = $row[0];
                                  $Sumkreatif   = $row[1];
                                  $Sumbakat     = $row[2];
                                  $Sumprestasi  = $row[3];
                                      
                              }
                              $Sumeventop    = $Sumevent+$Maxevent;
                              $Sumkreatifop  = $Sumkreatif+$Maxkreatif;
                              $Sumbakatop    = $Sumbakat+$Maxbakat;
                              $Sumprestasiop = $Sumprestasi+$Maxprestasi;
                             
                                          echo "
                                        <tr>
                                              <td><b>Jumlah</b></td>
                                              <td>".$Sumeventop."</td>
                                              <td>".$Sumkreatifop."</td>
                                              <td>".$Sumbakatop."</td>
                                              <td>".$Sumprestasiop."</td>                     
                                              </tr>                                                   
                                    ";
                    ?>
        
            </table> -->




            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Alternatif</th>
                  <th>Kegiatan Event</th>
                  <th>Kreatifitas</th>
                  <th>Penyaluran Bakat</th>
                  <th>Prestasi</th>
                </tr>
              </thead>
              <br>
              <h4>Normalisasi R</h4>
              <?php


                              
                        $sql="SELECT MAX(event), MAX(kreatif), MAX(bakat), MAX(prestasi) FROM tb_nilai";
                        $result=mysqli_query($konek_db,$sql); //row melihat dari sql
                        while($row=mysqli_fetch_array($result)){
                            $Maxevent    = $row[0]/$Sumeventop;
                            $Maxkreatif  = $row[1]/$Sumkreatifop;
                            $Maxbakat    = $row[2]/$Sumbakatop;
                            $Maxprestasi = $row[3]/$Sumprestasiop;
                            
                        }
                        echo "
                            <tr>
                                  <td>Optimal</td>
                                  <td>".$Maxevent."</td>
                                  <td>".$Maxkreatif."</td>
                                  <td>".$Maxbakat."</td>
                                  <td>".$Maxprestasi."</td>
                                  </tr>
                        ";


                        $sql="SELECT alternatif, event, kreatif, bakat, prestasi FROM tb_nilai";
                        $result=mysqli_query($konek_db,$sql) or die(mysql_error()); //row melihat dari sql 
                        while($row = mysqli_fetch_array($result)){  
                            $alternatif   =$row[0];                        
                            $bevent       =$row[1]/$Sumeventop;
                            $bkreatif     =$row[2]/$Sumkreatifop;
                            $bbakat       =$row[3]/$Sumbakatop;
                            $bprestasi    =$row[4]/$Sumprestasiop;
                            echo "      
                              <tr>                  
                                    <td>".$alternatif."</td>      
                                    <td>".$bevent."</td>
                                    <td>".$bkreatif."</td>
                                    <td>".$bbakat."</td>
                                    <td>".$bprestasi."</td>
                                    </tr>   
                          ";        
                    }
                    
                    ?>
            </table>
            <br>
              <h4>Normalisasi D</h4>

            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                <th>Kegiatan Event</th>
                  <th>Kreatifitas</th>
                  <th>Penyaluran Bakat</th>
                  <th>Prestasi</th>
                </tr>
              </thead>
              <?php

                  $sql="SELECT B_event, B_kreatif, B_bakat, B_prestasi FROM tb_bobot";
                  $result=mysqli_query($konek_db,$sql); //row melihat dari sql
                  while($row=mysqli_fetch_array($result)){
                      $Bobotevent    = $row[0];
                      $Bobotkreatif  = $row[1];
                      $Bobotbakat    = $row[2];
                      $Bobotprestasi = $row[3];
                      
                  }
                  echo "
                      <tr>
                            
                            <td>".$Bobotevent."</td>
                            <td>".$Bobotkreatif."</td>
                            <td>".$Bobotbakat."</td>
                            <td>".$Bobotprestasi."</td>
                            </tr>
                  ";


                          
                ?>
            </table>

            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Alternatif</th>
                  <th>Kegiatan Event</th>
                  <th>Kreatifitas</th>
                  <th>Penyaluran Bakat</th>
                  <th>Prestasi</th>
                  <th>Jumlah (S)</th>
                  
                  
                </tr>
              </thead>
              
              <?php


                    $sql="SELECT MAX(event), MAX(kreatif), MAX(bakat), MAX(prestasi) FROM tb_nilai";
                    $result=mysqli_query($konek_db,$sql); //row melihat dari sql
                    while($row=mysqli_fetch_array($result)){
                        $Maxevent        = $row[0]/$Sumeventop*$Bobotevent;
                        $Maxkreatif      = $row[1]/$Sumkreatifop*$Bobotkreatif;
                        $Maxbakat        = $row[2]/$Sumbakatop*$Bobotbakat;
                        $Maxprestasi     = $row[3]/$Sumprestasiop*$Bobotprestasi ;
                        $Optimals        = $Maxevent+$Maxkreatif+$Maxbakat+$Maxprestasi;
                        $Optimalk        = $Optimals/$Optimals;
                       
                    }
                    echo "
                        <tr>
                              <td>Optimal</td>
                              <td>".$Maxevent."</td>
                              <td>".$Maxkreatif."</td>
                              <td>".$Maxbakat."</td>
                              <td>".$Maxprestasi."</td>
                              <td>".$Optimals."</td>
                              
                              
                              </tr>
                    ";


                    $sql="SELECT alternatif, event, kreatif, bakat, prestasi FROM tb_nilai";
                    $result=mysqli_query($konek_db,$sql) or die(mysql_error()); //row melihat dari sql 
                    while($row = mysqli_fetch_array($result)){  
                        $alternatif   =$row[0];                        
                        $bevent       =$row[1]/$Sumeventop*$Bobotevent;
                        $bkreatif     =$row[2]/$Sumkreatifop*$Bobotkreatif;
                        $bbakat       =$row[3]/$Sumbakatop*$Bobotbakat;
                        $bprestasi    =$row[4]/$Sumprestasiop*$Bobotprestasi;
                        $jumlahs      =$bevent+$bkreatif+$bbakat+$bprestasi;    
                        $jumlahk      =$jumlahs/$Optimals;   
                        
                        echo "      
                          <tr>                  
                                <td>".$alternatif."</td>      
                                <td>".$bevent."</td>
                                <td>".$bkreatif."</td>
                                <td>".$bbakat."</td>
                                <td>".$bprestasi."</td>
                                <td>".$jumlahs."</td>
                               
                                
                                </tr>   
                      ";        
                }


               
                    ?>
            </table>


            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Alternatif</th>
                  <th>Nilai S</th>
                  <th>Nilai K</th>
                  
                </tr>
              </thead>
              <br>
              <h4>Nilai S dan K</h4>
              <?php


                              
                        $sql="SELECT MAX(event), MAX(kreatif), MAX(bakat), MAX(prestasi) FROM tb_nilai";
                        $result=mysqli_query($konek_db,$sql); //row melihat dari sql
                        while($row=mysqli_fetch_array($result)){
                          $Maxevent    = $row[0]/$Sumeventop*$Bobotevent;
                          $Maxkreatif  = $row[1]/$Sumkreatifop*$Bobotkreatif;
                          $Maxbakat    = $row[2]/$Sumbakatop*$Bobotbakat;
                          $Maxprestasi = $row[3]/$Sumprestasiop*$Bobotprestasi ;
                          $Optimals    = $Maxevent+$Maxkreatif+$Maxbakat+$Maxprestasi;
                          $Optimalk    = $Optimals/$Optimals;
                            
                            
                        }
                        echo "
                            <tr>
                                  <td>Optimal</td>
                                  <td>".$Optimals."</td>
                                  <td>".$Optimalk."</td>
                                 
                                  </tr>
                        ";


                        $sql="SELECT alternatif, event, kreatif, bakat, prestasi FROM tb_nilai";
                        $result=mysqli_query($konek_db,$sql) or die(mysql_error()); //row melihat dari sql 
                        while($row = mysqli_fetch_array($result)){  
                          $alternatif   =$row[0];                        
                          $bevent       =$row[1]/$Sumeventop*$Bobotevent;
                          $bkreatif     =$row[2]/$Sumkreatifop*$Bobotkreatif;
                          $bbakat       =$row[3]/$Sumbakatop*$Bobotbakat;
                          $bprestasi    =$row[4]/$Sumprestasiop*$Bobotprestasi;
                          $jumlahs      =$bevent+$bkreatif+$bbakat+$bprestasi;    
                          $jumlahk      =$jumlahs/$Optimals; 
                           
                            echo "      
                              <tr>                  
                                    <td>".$alternatif."</td> 
                                    <td>".$jumlahs."</td>
                                    <td>".$jumlahk."</td>
                                    
                                    </tr>   
                          ";        
                    }
                    
                    ?>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>