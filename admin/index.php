<?php

//include 'auth.php';
$ur['title'] = "Admin";
$datapage = "";
include '../header.php';
?>

<div class="main-container">
<div class="container">
		<div class="card">
		<div class="card-header border-0 bg-none">

        <form method="post" class="form-data" id="form-data">  
        	<div class="row">
        		<div class="col-sm-3">
        			<div class="form-group">
						<label>Nama Mahasiswa</label>
						<input type="hidden" name="id" id="id">
						<input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" required="true">
						<p class="text-danger" id="err_nama_mahasiswa"></p>
					</div>
        		</div>
	            <div class="col-sm-3">
	            	<div class="form-group">
						<label>Jurusan</label>
						<select name="jurusan" id="jurusan" class="form-control" required="true">
							<option value=""></option>
							<option value="Sistem Informasi">Sistem Informasi</option>
							<option value="Teknik Informatika">Teknik Informatika</option>
						</select>
						<p class="text-danger" id="err_jurusan"></p>
					</div>
	            </div>
	            <div class="col-sm-3">
	            	<div class="form-group">
						<label>Tanggal Masuk</label>
						<input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required="true">
						<p class="text-danger" id="err_tanggal_masuk"></p>
					</div>
	            </div>
	            <div class="col-sm-3">
	            	<div class="form-group">
						<label>Jenis Kelamin</label><br>
						<input type="radio" name="jenkel" id="jenkel1" value="Laki-laki" required="true"> Laki-laki
						<input type="radio" name="jenkel" id="jenkel2" value="Perempuan"> Perempuan
					</div>
					<p class="text-danger" id="err_jenkel"></p>
	            </div>
			</div>
			
			<div class="form-group">
				<label>Alamat</label>
				<textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
				<p class="text-danger" id="err_alamat"></p>
			</div>
			
			<div class="form-group">
				<button type="button" name="simpan" id="simpan" class="btn btn-primary">
					<i class="fa fa-save"></i> Simpan
				</button>
			</div>
        </form>
    </div>
    <div class="card-body p-0">
       <div class="table-responsive">
		      <div class="data"></div>
	     </div>
	  </div>
    </div>
 







<?php


include '../footer2.php';
?>
