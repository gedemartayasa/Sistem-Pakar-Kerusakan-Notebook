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
<?php
  include ('navbar.php');
?>
<main role="main">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="image" src="assets/image/test.jpg" alt="First slide">
        <div class="container ">
          <div class="carousel-caption text-center">
            <h1>SISTEM PAKAR</h1>
            <p>Pendeteksian Kerusakan pada Notebook Tidak Menyala Menggunakan Metode Forward Chaining</p>
            <p><button type="button" class="btn btn-lg btn-success" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
          </div>
        </div>
      </div>
    </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Identitas User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nama :</label>
                <input type="text" name="nama" class="form-control" id="input-ame" placeholder="isikan nama anda" required autofocus >
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Umur :</label>
                <input type="number" name="umur" class="form-control col-sm-8" placeholder="isikan umur anda" required >
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-info">Lanjut ></button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<footer>
  <p>Copyright @2022 All right reserved | I Gede Martayasa </p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</html>