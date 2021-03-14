<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Praktikum 1</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
    <div class="kotak">
		<div class="container-fluid kotak1">
			<div class="row">
				<div class="col-md-6 p-2 kotak2">
						<p class="p1">Form <br> Nilai Siswa (Array)</p>
				</div>
				<div class="col-md-6">
					<form role="form" method="post" action="admin.php" >
						<div class="form-group">
							 
							<label for="nama">
								Nama Lengkap
							</label>
							<input type="text" class="form-control" name="nama" required>
						</div>
						
						<div class="form-group">
							 
							<label for="nim">
								NIM
							</label>
							<input type="number" class="form-control" name="nim" required>
						</div>

						<div class="form-group">
							<label for="matkul">
								Mata Kuliah 
							</label>
							<br>
							<select name="matkul" id="matkul">
								<option value="Dasar Pemrograman">Dasar Pemrograman</option>
								<option value="Pemrograman Web">Pemrograman Web</option>
								<option value="Basis Data">Basis Data</option>
								<option value="Algoritma Dasar">Algoritma Dasar</option>
							</select>
						</div>

						<div class="form-group">
							<label for="nilai_tugas">
								Nilai Tugas/Praktikum
							</label>
							<input type="number" class="form-control" name="nilai_tugas" required>
						</div>

						<div class="form-group">
							<label for="nilai_uts">
								Nilai UTS
							</label>
							<input type="number" class="form-control" name="nilai_uts" required>
						</div>

						<div class="form-group">
							<label for="nilai_uas">
								Nilai UAS
							</label>
							<input type="number" class="form-control" name="nilai_uas" required>
						</div>

						<div class="checkbox">
							 
							<label>
								<input type="checkbox" name="proses" value="Berhasil" required> Form sudah benar
							</label>
						</div> 
						<button type="submit" class="btn btn-primary">
							Simpan
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
