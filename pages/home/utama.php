<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	header("Location: ./utama_cari.php?id=$_GET[cari]");   
}
?>
<style type="text/css">
	.ban{
		float: left;
	    margin: 0px;
		width: 50px;
		height: 50px;
	}
</style>
<link rel="stylesheet" type="text/css" href="assets/css/card.css">
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card text-center">
				<div class="card-header ">
					<img src="assets/img/logo/rskg.png" class="ban">
					<h5 class="card-title">SISTEM INFORMASI MANAJEMEN KETERSEDIAN KAMAR</h5>
					<hr>
					<p>
						Sistem Informasi <b>Ketersediaan Tempat Tidur</b> RS. Khusus Ginjal ny. R.A. Habibie.
						<ul>
							<li>1. Rumah Sakit melakukan entry data ketersediaan tempat tidur minimal sebanyak 2 (dua) kali dalam sehari yaitu pukul 06.00 pagi dan pukul 18.00 sore oleh pihak Rumah Sakit sesuai dengan format yang sudah ditentukan</li>
							<li>2. Data yang telah di entry pada sistem ini akan tampil pada aplikasi SIRANAP 2.1</li>
							<li>3. Data yang telah di entry pada sistem ini akan tampil pada aplikasi FASKES BPJS</li>
							<li>4. Data yang telah di entry pada sistem ini akan tampil pada aplikasi Mobile JKN</li>
						</ul>
					</p>
					<hr>
					<label>Powered By Teknlogi Informasi RS. Khusus Ginjal Ny. R.A. Habibie</label>
					<hr>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div id="modal-content" class="modal-content"></div>
	</div>
</div>

<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/dragula.min.js"></script>
<script src="assets/js/card.js"></script>