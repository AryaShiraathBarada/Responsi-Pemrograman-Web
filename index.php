<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="js/calculator.js"></script>
	<title>Arya Barada</title>

</head>
<body>
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
				<li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
				<li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>

	<header>
		<div class="container">
			<h1><a href="belajar.html">ARYA SHIRAATH BARADA</a></h1>
			<ul>
				<li class="active"><a href="">HOME</a></li>
				<li><a href="calculator/calculator.html">CALCULATOR</a></li>
				<li><a href="calendar/calendar.php">CALENDAR</a></li>
			</ul>
		</div>
	</header>

	<section class="banner">
		<h2>Welcome To My Website</h2>
	</section>

	<section class="about">
		<div class="container">
			<h3>DATA NILAI MAHASISWA</h3>
		</div>
	</section>
	<div class="biodata">
		<table name="form1" method="post" width="10%" border="1" align="center">
			<tr style="color: white;">
				<td>NIM</td>
				<td><input name="nim" type="text" id="nim"></td>
			</tr>
			<tr style="color: white;">
				<td>NAMA</td>
				<td><input name="nama" type="text" id="nama"></td>
			</tr>
			<tr style="color: white;">
				<td>Kelas</td>
				<td><select name="kelas" id="kelas">
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
				</select></td>
			</tr>
			<tr style="color: white;">
				<td>Nilai</td>
				<td><input name="nilai" type="text" id="nilai"></td>
			</tr>
			<tr style="color: white;">
				<td colspan="2">
					<input type="submit" name="Submit" value="Kirim">
					<input type="reset" name="Submit2" value="Batal">
				</td>
			</tr>
		</table>
		<?php
			if(isset($_POST['Submit'])){
				$nim = $_POST['nim'];
				$nama = $_POST['nama'];
				$kelas = $_POST['kelas'];
				$nilai = $_POST['nilai'];

				$fp = fopen("TxtFile/isinilai.txt","a+");
				fputs($fp,"$nim | $nama | $kelas | $nilai\n");
				fclose($fp);
			}
		?>
		<?php
			$fp = fopen("TxtFile/isinilai.txt", "r");
			echo "<tabel border=1>";

				while ($isi = fgets($fp,80)){
				$pisah = explode("|", $isi);
				echo "<tr><td>NIM</td></tr> : $pisah[0] | </td</tr>";
				echo "<tr><td>NAMA</td></tr> : $pisah[1] | </td</tr>";
				echo "<tr><td>Kelas</td></tr> : $pisah[2] | </td</tr>";
				echo "<tr><td>Nilai</td></tr> : $pisah[3] | </td</tr><tr><td>&nbsp;<hr></td>&nbsp;<hr></td></tr>";
			}
		echo "</tabel>";
		?>
	</div>

	<section class="about">
		<div class="container">
			<h3>CALCULATOR</h3>
		</div>
	</section>

	<div class="calculator">
		<div class="main">
			<form name="form">
				<input class="textarea" name="textarea">
			</form>
			<table>
				<tr>
					<td><input class="button" type="button" value="C" onclick="clean()"></td>
					<td><input class="button" type="button" value="<" onclick="backspace()"></td>
					<td><input class="button btn-yellow" type="button" value="/" onclick="input(' / ')"></td>
					<td><input class="button btn-yellow" type="button" value="x" onclick="input(' * ')"></td>
				</tr>
				<tr>
					<td><input class="button" type="button" value="7" onclick="input(7)"></td>
					<td><input class="button" type="button" value="8" onclick="input(8)"></td>
					<td><input class="button" type="button" value="9" onclick="input(9)"></td>
					<td><input class="button btn-yellow" type="button" value="-" onclick="input(' - ')"></td>
				</tr>
				<tr>
					<td><input class="button" type="button" value="4" onclick="input(4)"></td>
					<td><input class="button" type="button" value="5" onclick="input(5)"></td>
					<td><input class="button" type="button" value="6" onclick="input(6)"></td>
					<td><input class="button btn-yellow" type="button" value="+" onclick="input(' + ')"></td>
					</tr>
				<tr>
					<td><input class="button" type="button" value="1" onclick="input(1)"></td>
					<td><input class="button" type="button" value="2" onclick="input(2)"></td>
					<td><input class="button" type="button" value="3" onclick="input(3)"></td>
					<td rowspan=2><input style="height:106px;" class="button btn-yellow" type="button" value="=" onclick="equal()"></td>
				</tr>
				<tr>
					<td><input class="button" type="button" value="0" onclick="input(0)"></td>
					<td><input class="button" type="button" value="00" onclick="input('00')"></td>
					<td><input class="button" type="button" value="." onclick="input('.')"></td>
					</tr>
			</table>
		</div>
	</div>

	<section class="about">
		<div class="container">
			<h3>CALENDAR</h3>
		</div>
	</section>

	<div class="calendar" align="center">
		<?php
			date_default_timezone_set('Asia/Tokyo');
			$day = date("d");
			$month = date("m");
			$year = date("Y");
			$daytotal = date("t",mktime(0,0,0,$month,$day,$year));

			switch($month){
				case 1:
					$name_month = "January";
					break;
				case 2:
					$name_month = "Febuary";
					break;
				case 3:
					$name_month = "March";
					break;
				case 4:$name_month = "April";
					break;
				case 5:
					$name_month = "May";
					break;
				case 6:
					$name_month = "June";
					break;
				case 7:
					$name_month = "July";
					break;
				case 8:
					$name_month = "August";
					break;
				case 9:
					$name_month = "September";
					break;
				case 10:
					$name_month = "October";
					break;
				case 11:
					$name_month = "November";
					break;
				case 12:
					$name_month = "December";
					break;
			}
			echo "<tabel>";
			echo "<center><h1>$day - $name_month - $year</h1></center>";
		?>
		
		<br><table style="border:2px solid" align="center" cellpadding="10" bgcolor="black">
			<tr bgcolor="#FFA400">
				<td align=center>Minggu</td>
				<td align=center>Senin</td>
				<td align=center>Selasa</td>
				<td align=center>Rabu</td>
				<td align=center>Kamis</td>
				<td align=center>Jumat</td>
				<td align=center>Sabtu</td>
			</tr>
			
			<?php
				$s = date("w",mktime(0,0,0,$month,1,$year));
				
				for($ds=1;$ds<=$s;$ds ++){
					echo"<td></td>";
				}
	        
				for($d=1;$d<=$daytotal;$d++){
					if(date("w",mktime(0,0,0,$month,$d,$year))==0){
						echo"<tr>";
					}
					$backgound = '#494949';
					$default_collor = "white";
					if(date("l",mktime(0,0,0,$month,$d,$year))=="Sunday"){
						$backgound = '#D43131';
					}
					echo"<td bgcolor=$backgound align=center valign=middle><span style=\"color:$default_collor\">$d</span></td>";
					if(date("w",mktime(0,0,0,$month,$d,$year))==6){
						echo"</tr>";
					}
				}
	        	echo'</table>';
	      	?>
		<br>
	</div>
	<section class="about">
		<div class="container">
			<h3>:v</h3>
		</div>
	</section>
</body>
</html>