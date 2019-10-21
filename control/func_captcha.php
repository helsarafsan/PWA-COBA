<?php
if(!isset($_SESSION)){
     session_start();
}
//menentukan kode captcha. Disini saya pakai angka acak sebanyak 4 angka.
$angka_acak = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
$_SESSION['kode_captcha'] = $angka_acak;

//atur header
header("Pragma: no-cache");
header('Content-type: image/jpeg');

//tentukan ukuran gambar
$width = 80;
$height = 30;

//inisialisasi gambar
$my_image = imagecreatetruecolor($width, $height);

//fungsi warna
function warna_acak($jenis_warna = 0){
	global $my_image;
	if ($jenis_warna == 0){  //warna background
		return imagecolorallocate($my_image, rand(210, 255), rand(210, 255), rand(210, 255));
	}else if ($jenis_warna == 1){  //warna noise
		return imagecolorallocate($my_image, rand(10, 100), rand(10, 100), rand(10, 100));
	}else if ($jenis_warna == 2){  //warna teks
		return imagecolorallocate($my_image, rand(0, 80), rand(0, 80), rand(0, 80));
	}
}

//menentukan warna latar. Disini warna latarnya saya acak.
imagefill($my_image, 0, 0, warna_acak());

// tambahkan noise - bintik-bintik. Sobat bisa pakai ini bisa juga tidak.
for ($c = 0; $c < 50; $c++){
	$x = rand(0,$width-1);
	$y = rand(0,$height-1);
	imagesetpixel($my_image, $x, $y, warna_acak(1));
}

//tambah garis menyilang
for ($hor = (rand(1, round($height / 2)) -$height); $hor < $width; $hor+=12){
	$warna = warna_acak(1);
	for ($ver = 0; $ver < $height; $ver++){
		imagesetpixel($my_image, ($hor + $ver), $ver, $warna);
	}
}

for ($hor = (rand(1, round($height / 2)) -$height); $hor < $width; $hor+=12){
	$warna = warna_acak(1);
	for ($ver = 0; $ver < $height; $ver++){
		imagesetpixel($my_image, ($hor + $ver), ($height - $ver), $warna);
	}
}

//menentukan (mengacak) posisi kode captcha pada gambar.
$x = rand(5,30);
$y = rand(2,6);

//buat gambar - sekalian mengacak posisi teks
$x = rand(5,30);
$y = rand(0,15);
imagestring($my_image, 9, $x, $y, substr($angka_acak, 0, 1), warna_acak(2));
$x += 12;
$y = rand(0,15);
imagestring($my_image, 9, $x, $y, substr($angka_acak, 1, 1), warna_acak(2));
$x += 12;
$y = rand(0,15);
imagestring($my_image, 9, $x, $y, substr($angka_acak, 2, 1), warna_acak(2));
$x += 12;
$y = rand(0,15);
imagestring($my_image, 9, $x, $y, substr($angka_acak, 3, 1), warna_acak(2));

imagejpeg($my_image);
imagedestroy($my_image);

?> 