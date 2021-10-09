<?php
include '../function/database.php';
$db = new database();

?>
<!doctype html>
<html lang="en">
    <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          
          <link href="assets/img/Custom-Icon-Design-Mono-Business-2-Coffee.ico" rel="icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
          <title>Kopiku</title>
    </head>
  <body>

      <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Kopiku</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </nav>
                <br> 
                <div class="container">
	<div class="col-md-12">
		<table id="example" class="table table-striped" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kopi</th>
					<th>Harga</th>
				</tr>
			</thead>
			<?php
			$no = 1;
			foreach ($db->tampil_data() as $x ) {
			?>
				<tbody>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $x['nama_barang']; ?></td>
						<td><?php echo $x['harga']; ?></td>
					</tr>
				</tbody>
			<?php
			}
			?>
			<tfoot>
				<tr>
        <th>No</th>
					<th>Nama Kopi</th>
					<th>Harga</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>     
          <form action="../controllers/Controller.php?aksi=create_transaksi" method="POST">
            <div class="form-group">
              <label for="barang_nama">Masukan Kopi</label>
              <input type="text"  id="text" name="barang_nama" class="form-control" placeholder="Masukan Nama Kopimu">
              <label for="barang_harga">Masukan Harga</label>
              <input type="number"  id="text" name="barang_harga" class="form-control" placeholder="Masukan Harga Kopimu">
              <small id="text" class="form-text text-muted">Secangkir Kopi untuk ketenangan</small>
            </div>
            <input class="btn btn-primary" href="respon.php" type="submit" value="Pesan">
            <div class= "btn">
                <a id="back" class= "btn btn-primary" href="home.php">Back</a>
            </div>
          </form>

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              <!-- Vendor JS Files -->
              <script src="assets/vendor/aos/aos.js"></script>
              <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
              <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
              <script src="assets/vendor/php-email-form/validate.js"></script>
              <script src="assets/vendor/purecounter/purecounter.js"></script>
              <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
              <script src="assets/vendor/typed.js/typed.min.js"></script>
              <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

              <!-- Template Main JS File -->
              <script src="assets/js/main.js"></script>

  </body>
</html>