<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <title>Sistem Pakar</title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include ('navbar.php'); ?>
    
    <main class="batas-atas">
        <div class="card text-white bg-info mb-3">
          <h5 class="card-header">Diagnosa</h5>
          <div class="card-body text-left ukuran-20">
            <form method="post" action="solusi.php" enctype="multipart/form-data" role="form">
                <?php
                include ('koneksi.php');
                session_start();
                echo "<p>Nama : ".$_SESSION['nama']."</p>";
                echo "<p>Umur : ".$_SESSION['umur']."</p>";
                    
                    if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                    }   
                ?>
                <hr>
                <p>Gejala Kerusakan :</p>
                <?php
                 include "fungsi.php";
                 solusi($kode);  
                ?>
        
                <hr>
                <?php
                $sql = "SELECT * from tb_solusi WHERE kode_solusi='$kode'";
                $data = mysqli_query($connect,$sql);
                $row = mysqli_fetch_assoc($data);

                if ($row['isi_solusi']=="ERROR") {
                     echo "<center><p><strong style='color:red'>SISTEM TIDAK MENEMUKAN JAWABAN !</strong></p></center><hr>";

                }
                
                else{
                    echo "<p>Hasil Diagnosa : <strong style='color:green'>".$row['isi_solusi']."</strong></p>";
                }
                
                ?>
            </form>
            <br>
            <div class="text-center">
                <a style="margin-bottom: 10px;" href="hapus-session.php" class="btn btn-outline-light col-sm-2">Akhiri</a>
            </div>
          </div>         
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
