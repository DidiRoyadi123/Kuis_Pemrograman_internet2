<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Member</title>
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Tambah</h1>
	<a class="btn btn-sm btn-info" href="tblrental.php">Kembali</a>
	<br><br>
	<form action="Proses.php" method="post">
		<label>ID Rental</label>
		<br>
		<input class="form-control" type="number" name="rental_id">
		<br>
		<label>ID mobil</label>
		<br>
		<input class="form-control" type="number" name="mobil_id"><br>
		<br>
		<label>ID member</label>
		<br>
		<input class="form-control" type="number" name="member_id">
		<br>
		<label>Lama Rental</label>
		<input class="form-control" type="text" name="lama_rental">
		<br>
		<br>
		
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-success" type="submit" name="submit_rental">Submit</button>
		
	</form>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="images/home/hero.png" class="img-fluid" alt="">
    </div>
  </div>
</div>

	
</body>
<?php
include 'footer.html';
?>
</html>