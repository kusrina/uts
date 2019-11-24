<html>
<head>
	<title>Made By Kita</title>
	<style type="text/css">
		body{
			background: url('kutub.jpg');
		}

		/*tampilan semua font*/
		#tes{
			font-family: sans-serif;
		}

		/*tampilan header*/
		#tes2{
			font-family: sans-serif;
			color: #191970;
			font-size: 24px;
		}

		/*tampilan tabel utama*/
		.wrap{
			width: 1210px;
			margin: auto;
		}

		/*tampilan box logo*/
		.wrap .boxLogo{
			background: #AFEEEE;
			height: 140px;
			width: 300px;
			border-style: groove;
			border-width: 2px;
			float: left;
		}

		/*tampilan semua gambar*/
		img{
			display: block;
			margin: auto;
		}

		/*tampilan box judul*/
		.wrap .boxJudul{
			background: #00BFFF;
			height: 120px;
			width: 890px;
			border-style: groove;
			border-width: 2px;
			float: left;
			color: black;
			font-family: Housemate;
			font-size: 21px;
			padding-top: 20px;
			padding-right: 10px;

		}

		/*tampilan tanggal*/
		.tanggal{
			font-size: 17px;
			font-family: sans-serif;
			font-style: italic;
			color: white;
			text-align: right;
			padding right: 7px;
		}

		/*tampilan box list*/
		.wrap .boxList{
			background: #00BFFF;
			height: 450px;
			width: 300px;
			border-style: groove;
			border-width: 2px;
			float: left;
		}

		/*inisialisasi semua link*/
		.link,
		.link:link{
			font-family: sans-serif;
			color: black;
		}
		.link:active{
			font-family: sans-serif;
			color: black;
		}
		.link:visited{
			font-family: sans-serif;
			color: black;	
		}

		/*tampilan box isi*/
		.boxIsi{
			background: #ADE8E6;
			height: 420px;
			width: 900px;
			border-style: groove;
			border-width: 2px;
			padding-top: 30px;
			float: left;
		}

		/*tampilan semua tulisan*/
		.tulisan{
			font-family: sans-serif;
			color: black;		
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="boxLogo">
			<img src="logoMabyta.png" height="140" width="200">
		</div>

		<div class="boxJudul">
			<center>
			<h1>Made By Kita</h1>
			</center>
			<div class="tanggal">
				<?php
					$tgl=date('l, d-m-Y');
					echo $tgl;
				?>
			</div>
		</div>

		<div class="boxList">
			<ul>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=home">Home</a></li>
				<hr>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=pendaftaran">Pendaftaran</a></li>
				<hr>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=beratBadan">Mengukur Berat Badan Ideal</a></li>
				<hr>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=usia">Menghitung Kategori Usia</a></li>
				<hr>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=pp">Menghitung Persegi Panjang</a></li>
				<hr>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=segitiga">Menghitung Segitiga</a></li>
				<hr>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=mhs">Daftar Mahasiswa</a></li>
				<hr>
			</ul>
		</div>

		<div class="boxIsi">
			<?php
			if (@$_GET['op'] == "home"){
			?>

			<center>
				<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
					<div class="tulisan">
						<h2>Assalamu'alaikum Warahmatullahi Wabarakatuh</h2>
						<table>
							<tr><td>Nama</td><td>:</td><td>Citra Ayu Kusrina</td></tr>
							<tr><td>NIM</td><td>:</td><td>11180910000035</td></tr>
							<tr><td>Program Studi</td><td>:</td><td>Teknik Informatika (3B)</td></tr>
						</table>
					</div>
				</form>
			</center>

			<?php
			}

			else if (@$_GET['op'] == "pendaftaran"){
				?>

				<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=pendaftaran">
					<div class="tulisan">
						<h2><center>Form Pendaftaran</center></h2>
						<font color="black">
						<table>
							<tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama" size="30"></td></tr>
							<tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempat" size="30"></td></tr>
							<tr><td>Tanggal Lahir</td><td>:</td><td><select name="tanggal">
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
							<select name="bulan">
								<option value="Januari">01</option>
								<option value="Februari">02</option>
								<option value="Maret">03</option>
								<option value="April">04</option>
								<option value="Mei">05</option>
								<option value="Juni">06</option>
								<option value="Juli">07</option>
								<option value="Agustus">08</option>
								<option value="September">09</option>
								<option value="Oktober">10</option>
								<option value="November">11</option>
								<option value="Desember">12</option>
							</select>
							<select name="tahun">
								<option value="1972">1972</option>
								<option value="1973">1973</option>
								<option value="1974">1974</option>
								<option value="1975">1975</option>
								<option value="1976">1976</option>
								<option value="1977">1977</option>
								<option value="1978">1978</option>
								<option value="1979">1979</option>
								<option value="1980">1980</option>
								<option value="1981">1981</option>
								<option value="1982">1982</option>
								<option value="1983">1983</option>
								<option value="1984">1984</option>
								<option value="1985">1985</option>
								<option value="1986">1986</option>
								<option value="1987">1987</option>
								<option value="1988">1988</option>
								<option value="1989">1989</option>
								<option value="1990">1990</option>
								<option value="1991">1991</option>
								<option value="1992">1992</option>
								<option value="1993">1993</option>
								<option value="1994">1994</option>
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
							</select></td></tr>
							<tr><td>Alamat</td><td>:</td><td><textarea name="alamat" rows="2" cols="22"></textarea></td></tr>
							<tr><td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="sex" value="lklk">Laki-laki<input type="radio" name="sex" value="pr">Perempuan</td></tr>
							<tr><td>Asal Sekolah</td><td>:</td><td><input type="text" name="sekolah" size="30"></td></tr>
							<tr><td>Nilai UAN</td><td>:</td><td><input type="text" name="nilai" size="30"></td></tr>
							<tr><td></td><td></td><td><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Hapus">
						</table>
						</font>
					</div>
				</form>

				<?php
			}

			else if (@$_GET['op'] == "beratBadan"){
				?>

				<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=beratBadan">
					<div class="tulisan">
						<h2><center>Pengukur Berat Badan Ideal</center></h2>
						<font color="black">
							<table>
								<tr><td>Masukkan Tinggi Badan Anda</td><td>:</td><td><input type="text" name="tb"></td><td>cm</td></tr>
								<tr><td>Masukkan Berat Badan Anda</td><td>:</td><td><input type="text" name="bb"></td><td>kg</td></tr>
								<tr><td></td><td></td><td><input type="submit" name="Submit" value="Submit"></td></tr>
							</table>
						</font>
					</div>
				</form>

				<?php
			}

			else if (@$_GET['op'] == "usia"){
				?>

				<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=usia">
					<div class="tulisan">
						<h2><center>Penentu Kategori Usia</center></h2>
						<font color="black">
							<table>
								<tr><td>Masukkan Usia Anda</td><td>:</td><td><input type="text" name="yo"></td><td>tahun</td></tr>
								<tr><td></td><td></td><td><input type="submit" name="Submit" value="Submit"></td></tr>
							</table>
						</font>
					</div>
				</form>

				<?php
			}

			else if (@$_GET['op'] == "pp"){
				?>

				<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=pp">
					<div class="tulisan">
						<h2><center>Penghitung Luas Persegi Panjang</center></h2>
						<font color="black">
							<table>
								<tr><td>Masukkan Panjang Persegi</td><td>:</td><td><input type="text" name="panjang"></td><td>cm</td></tr>
								<tr><td>Masukkan Lebar Persegi</td><td>:</td><td><input type="text" name="lebar"></td><td>cm</td></tr>
								<tr><td></td><td></td><td><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Reset"></td></tr>
							</table>
						</font>
					</div>
				</form>

				<?php
			}

			else if (@$_GET['op'] == "segitiga"){
				?>

				<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=segitiga">
					<div class="tulisan">
						<h2><center>Penghitung Luas Segitiga</center></h2>
						<font color="black">
							<table>
								<tr><td>Masukkan Alas Segitiga</td><td>:</td><td><input type="text" name="alas"></td><td>cm</td></tr>
								<tr><td>Masukkan Tinggi Segitiga</td><td>:</td><td><input type="text" name="tinggi"></td><td>cm</td></tr>
								<tr><td></td><td></td><td><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Reset"></td></tr>
							</table>
						</font>
					</div>
				</form>

				<?php
			}	

			else if (@$_GET['op'] == "mhs"){
				?>

				<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "universitas";
					$connection = mysqli_connect($servername, $username, $password, $dbname);
					if (!$connection){
						die("Connection Failed:".mysql_connect_error());
					}
					$query = mysqli_query($connection,"SELECT * FROM mhs");
					?>

					<form action="" method="post">
						<div class="tulisan">
							<h2><center>Daftar Mahasiswa</center></h2>
							<font color="black">
								<center>
									<table border="1" cellpadding="2" cellspacing="0">
				                        <tr>
				                            <th>NIM</th>
				                            <th>Nama</th>
				                            <th>Tempat Lahir</th>
				                            <th>Tanggal Lahir</th>
				                            <th>Jurusan</th>
				                            <th>IPK</th>
				                        </tr>
				                        <?php if(mysqli_num_rows($query)>0){ ?>
				                        <?php
				                            $no = 1;
				                            while($data = mysqli_fetch_array($query)){
				                        ?>
				                        <tr>
				                            <td><?php echo $data["nim"];?></td>
				                            <td><?php echo $data["nama"];?></td>
				                            <td><?php echo $data["tempat_lahir"];?></td>
				                            <td><?php echo $data["tanggal_lahir"];?></td>
				                            <td><?php echo $data["prodi"];?></td>
				                            <td><?php echo $data["ipk"];?></td>
				                        </tr>
				                        <?php $no++; } ?>
				                        <?php } ?>
				                    </table>
								</center>
							</font>
						</div>
					</form>
					<?php
			}	

			if (@$_GET['show'] == "pendaftaran"){
				$namaLengkap = $_POST['nama'];
				$tempatLahir = $_POST['tempat'];
				$tanggalLahir = $_POST['tanggal'];
				$bulanLahir = $_POST['bulan'];
				$tahunLahir = $_POST['tahun'];
				$alamatAnda = $_POST['alamat'];
				$kelaminAnda = $_POST['sex'];
				$asalSekolah = $_POST['sekolah'];
				$nilaiUAN = $_POST['nilai'];

				echo "<table id='tes'>";
				echo "<center><h2 id='tes2'>Form Pendaftaran</h2></center>";
				echo "<tr><td>Nama Lengkap</td><td>:</td><td>".$namaLengkap."</td></tr>";
				echo "<tr><td>Tempat Lahir</td><td>:</td><td>".$tempatLahir."</td></tr>";
				echo "<tr><td>Tanggal Lahir</td><td>:</td><td>".$tanggalLahir."-".$bulanLahir."-".$tahunLahir."</td></tr>";
				echo "<tr><td>Aalamat</td><td>:</td><td>".$alamatAnda."</td></tr>";
				echo "<tr><td>Jenis Kelamin</td><td>:</td><td>".$kelaminAnda."</td></tr>";
				echo "<tr><td>Asal Sekolah</td><td>:</td><td>".$asalSekolah."</td></tr>";
				echo "<tr><td>Nilai UAN</td><td>:</td><td>".$nilaiUAN."</td></tr>";
				echo "<tr><td>Terima Kasih Sudah Mengisi Form</td></td>";
				echo "</table>";
			}

			elseif (@$_GET['show'] == "beratBadan"){
				$tinggi = $_POST['tb'];
				$berat = $_POST['bb'];
				$persen = ($tinggi-100)*0.1;
				$ideal = ($tinggi-100)-$persen;

				if ($berat <= $ideal+2 && $berat >= $ideal-2){
					echo "<center><h2 id='tes2'>Pengukur Berat Badan Ideal</h2></center>";
					echo "<p id='tes'>Berat Badan Anda Ideal.</p>";
				}	

				else {
					echo "<center><h2 id='tes2'>Pengukur Berat Badan Ideal</h2></center>";
					echo "<p id='tes'>Berat Badan Anda Tidak Ideal.</p>";
				}
			}

			elseif (@$_GET['show'] == "usia"){
				$usia = $_POST['yo'];
				if ($usia >= 0 && $usia <= 5.5){
					echo "<center><h2 id='tes2'>Penentu Kategori Usia</h2></center>";
					echo "<p id='tes'>Status Usia Anda: Balita.</p>";
				}
				else if ($usia > 5.5 && $usia <= 16.5){
					echo "<center><h2 id='tes2'>Penentu Kategori Usia</h2></center>";
					echo "<p id='tes'>Status Usia Anda: Anak-anak.</p>";
				}
				else if ($usia > 16.5 && $usia <= 50.5){
					echo "<center><h2 id='tes2'>Penentu Kategori Usia</h2></center>";
					echo "<p id='tes'>Status Usia Anda: Dewasa.</p>";
				}
				else if ($usia > 50.5){
					echo "<center><h2 id='tes2'>Penentu Kategori Usia</h2></center>";
					echo "<p id='tes'>Status Usia Anda: Tua.</p>";
				}
				else{
					echo "<center><h2 id='tes2'>Penentu Kategori Usia</h2></center>";
					echo "<p id='tes'>Anda belum lahir.</p>";
				}
			}

			elseif (@$_GET['show'] == "pp"){
				function luas_pp($panjang,$lebar){
					$hasil = $panjang*$lebar;
					echo "<center><h2 id='tes2'>Penghitung Luas Persegi Panjang</h2></center>";
					echo "<p id='tes'>Panjang Persegi Panjang adalah <b>".$panjang."</b></p>";
					echo "<p id='tes'>Lebar Persegi Panjang adalah <b>".$lebar."</b></p>";
					echo "<p id='tes'>Luas Persegi Panjang adalah <b>".$hasil."</b></p>";
				}
				$panjang = $_POST['panjang'];
				$lebar= $_POST['lebar'];
				luas_pp($panjang, $lebar);
			}

			elseif (@$_GET['show'] == "segitiga"){
				function segitiga($alas,$tinggi){
					$hasil = ($alas/2)*$tinggi;
					echo "<center><h2 id='tes2'>Penghitung Luas Segitiga</h2></center>";
					echo "<p id='tes'>Panjang Alas Segitiga adalah <b>".$alas."</b></p>";
					echo "<p id='tes'>Lebar Tinggi Segitiga adalah <b>".$tinggi."</b></p>";
					echo "<p id='tes'>Luas Segitiga adalah <b>".$hasil."</b></p>";
				}
				$alas = $_POST['alas'];
				$tinggi= $_POST['tinggi'];
				segitiga($alas, $tinggi);
			} ?>
		</div>
	</div>
</body>
</html>