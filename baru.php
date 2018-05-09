<!DOCTYPE html>
<html>
<head>
	<title>judu halaman</title>
</head>
<body>
	<h1>judul paragraf</h1>
	<?php 
		$angka_a = 3;
		$angka_b = 3;
		$sub_judul ="ini adalah sub judul";

		$logika = true;
		$logika_dua = false;
		$hasil = var_dump($logika && $logika_dua);
		echo $hasil;
		if ($logika&&$logika_dua) {
			echo "ini bisa jalan";
		}else (condition) {
			# code...
		}

	 ?>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<p>
		<h2><?= $sub_judul?></h2>
	</p>
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	<?php echo $angka_a+$angka_b; 
	?>
		
	</p>
	
</body>
</html>