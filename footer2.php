</div>
        </div>
    </main>

 

    <!-- Required jquery and libraries -->
    <script src="<?php echo $ur['root']; ?>js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo $ur['root']; ?>js/popper.min.js"></script>
    <script src="<?php echo $ur['root']; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- cookie js -->
    <script src="<?php echo $ur['root']; ?>js/jquery.cookie.js"></script>

    <!-- Swiper slider  js-->
    <script src="<?php echo $ur['root']; ?>vendor/swiper/js/swiper.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="<?php echo $ur['root']; ?>js/main.js"></script>
    <script src="<?php echo $ur['root']; ?>js/color-scheme-demo.js"></script>


    <!-- page level custom script -->
    <script src="<?php echo $ur['root']; ?>js/app.js"></script>
    	
	    <script type="text/javascript">
	$(document).ready(function(){
		//Mengirimkan Token Keamanan
		$.ajaxSetup({
            headers : {
                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });

	    $('.data').load("data.php");
	    $("#simpan").click(function(){
	        var data = $('.form-data').serialize();
	        var jenkel1 = document.getElementById("jenkel1").value;
	        var jenkel2 = document.getElementById("jenkel2").value;
            var nama_mahasiswa = document.getElementById("nama_mahasiswa").value;
            var tanggal_masuk = document.getElementById("tanggal_masuk").value;
            var alamat = document.getElementById("alamat").value;
            var jurusan = document.getElementById("jurusan").value;

            if (nama_mahasiswa=="") {
            	document.getElementById("err_nama_mahasiswa").innerHTML = "Nama Mahasiswa Harus Diisi";
            } else {
            	document.getElementById("err_nama_mahasiswa").innerHTML = "";
            }
            if (alamat=="") {
            	document.getElementById("err_alamat").innerHTML = "Alamat Mahasiswa Harus Diisi";
            } else {
            	document.getElementById("err_alamat").innerHTML = "";
            }
            if (jurusan=="") {
            	document.getElementById("err_jurusan").innerHTML = "Jurusan Mahasiswa Harus Diisi";
            } else {
            	document.getElementById("err_jurusan").innerHTML = "";
            }
            if (tanggal_masuk=="") {
            	document.getElementById("err_tanggal_masuk").innerHTML = "Tanggal Masuk Mahasiswa Harus Diisi";
            } else {
            	document.getElementById("err_tanggal_masuk").innerHTML = "";
            }
            if (document.getElementById("jenkel1").checked==false && document.getElementById("jenkel2").checked==false) {
            	document.getElementById("err_jenkel").innerHTML = "Jenis Kelamin Harus Dipilih";
            } else {
            	document.getElementById("err_jenkel").innerHTML = "";
            }

            if (nama_mahasiswa!="" && tanggal_masuk!=""  && alamat!=""  && jurusan!=""  && (document.getElementById("jenkel1").checked==true || document.getElementById("jenkel2").checked==true)) {
            	$.ajax({
		            type: 'POST',
		            url: "form_action.php",
		            data: data,
		            success: function() {
		                $('.data').load("data.php");
		                document.getElementById("id").value = "";
		                document.getElementById("form-data").reset();
		            }, error: function(response){
		            	console.log(response.responseText);
		            }
		        });
            }
	        
	    });
	});
	  </script>
</body>

</html>
