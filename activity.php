<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/sm_5a9797d18f418.png">
	<title>Create Data | Insta Activity</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>
	<body>
	<div class="container" style="margin-top:20px">
		<h2>Time on Instagram
		<span class="float-right">
		<a href="add.php?page=activity" class="btn btn-dark">Back</a>
		</span>
		</h2>
		
		<hr/>
	</h3>
	<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
	$Sunday = $_POST['Sunday'];
	$Monday = $_POST['Monday'];
	$Tuesday = $_POST['Tuesday'];
	$Wednesday = $_POST['Wednesday'];
	$Thursday = $_POST['Thursday'];
	$Friday = $_POST['Friday'];
	$Saturday = $_POST['Saturday'];

		
		if(mysqli_num_rows($cek) == 0){
			$sql = mysqli_query($koneksi, "INSERT INTO insta_activity(Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday) VALUES('$Sunday', '$Monday', '$Tuesday', '$Wednesday', '$Thursday', '$Friday', '$Saturday')") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menambahkan data."); document.location="add.php";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
			}
		}
	}
	?>
	<form action="add.php?page=save" method="post">
	<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sunday</label>
				<div class="col-sm-10">
					<input type="text" name="Sunday" class="form-control" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Monday</label>
				<div class="col-sm-10">
					<input type="text" name="Monday" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tuesday</label>
				<div class="col-sm-10">
					<input type="text" name="Tuesday" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Wednesday</label>
				<div class="col-sm-10">
					<input type="text" name="Wednesday" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Thursday</label>
				<div class="col-sm-10">
					<input type="text" name="Thursday" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Friday</label>
				<div class="col-sm-10">
					<input type="text" name="Friday" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Saturday</label>
				<div class="col-sm-10">
					<input type="text" name="Saturday" class="form-control" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="Save">
				</div>
			</div>
	</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>