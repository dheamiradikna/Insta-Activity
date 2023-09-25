<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/sm_5a9797d18f418.png">
	<title>Edit Data | Insta Activity</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top:20px">
		<h2>Edit Your Activity</h2>
		<span class="float-right">
        <a href="add.php?page=activity" class="btn btn-light">Back</a>
		</span>
        <hr>

        <?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id = $_GET['id'];
			
			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM insta_activity WHERE Sunday='$Sunday', Monday='$Monday', Tuesday='$Tuesday', Wednesday='$Wednesday', Thursday='$Thursday', Friday='$Friday', Saturday='Saturday'") or die(mysqli_error($koneksi));
			
			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">Tidak bisa menambahkan waktu.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
        ?>
        <?php
		//jika tombol simpan di tekan/klik
        if(isset($_POST['Submit'])) {
            $Sunday = $_POST['Sunday'];
            $Monday = $_POST['Monday'];
            $Tuesday = $_POST['Tuesday'];
            $Wednesday = $_POST['Wednesday'];
            $Thursday = $_POST['Thursday'];
            $Friday = $_POST['Friday'];
            $Saturday = $_POST['Saturday'];
			$sql = mysqli_query($koneksi, "UPDATE insta_activity SET Sunday='$Sunday', Monday='$Monday', Tuesday='$Tuesday', Wednesday='$Wednesday', Thursday='$Thursday', Friday='$Friday', Saturday='Saturday'") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="edit.php?id='.$id.'";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>
<form action="add.php?page=activity" method="post">
<div class="form-group row">
				<label class="col-sm-2 col-form-label">Sunday</label>
				<div class="col-sm-10">
					<input type="text" name="Sunday" class="form-control" size="4" value="<?php echo $data['Sunday']; ?>" readonly required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Monday</label>
				<div class="col-sm-10">
					<input type="text" name="Monday" class="form-control" value="<?php echo $data['Monday']; ?>" required>
				</div>
            </div>
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tuesday</label>
				<div class="col-sm-10">
					<input type="text" name="Tuesday" class="form-control" value="<?php echo $data['Tuesday']; ?>" required>
				</div>
            </div>
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Wednesday</label>
				<div class="col-sm-10">
					<input type="text" name="Wednesday" class="form-control" value="<?php echo $data['Wednesday']; ?>" required>
				</div>
            </div>
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Thursday</label>
				<div class="col-sm-10">
					<input type="text" name="Thursday" class="form-control" value="<?php echo $data['Thursday']; ?>" required>
				</div>
            </div>
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Friday</label>
				<div class="col-sm-10">
					<input type="text" name="Friday" class="form-control" value="<?php echo $data['Friday']; ?>" required>
				</div>
            </div>
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Saturday</label>
				<div class="col-sm-10">
					<input type="text" name="Saturday" class="form-control" value="<?php echo $data['Saturday']; ?>" required>
				</div>
			</div>
            <div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
					<a href="index.php" class="btn btn-warning">KEMBALI</a>
				</div>
            </div>
</form>
</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
</html>
