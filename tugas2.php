<?php

class alat_tulis {

	public $barang;
	public $merk;
	public $harga;

	// function tampilkan_nama_barang() {
	// 	return " Penghapus";
	// }
	// function merk_barang() {
	// 	return " Joyko";
	// }
	// function harga_barang() {
	// 	return " Rp.2000";
	// }
	public function getcetak(){
		return " $this->barang,$this->merk,$this->harga";
	}
}

	// $alat_tulis = new alat_tulis();

	// echo $alat_tulis->tampilkan_nama_barang();

	// echo $alat_tulis->merk_barang();

	// echo $alat_tulis->harga_barang();

	$alat_tulis1 = new alat_tulis();
	$alat_tulis1->barang="Pulpen";
	$alat_tulis1->merk="Kenko";
	$alat_tulis1->harga="Rp.3500";
	echo "Barang 1: " . $alat_tulis1->getcetak();

	echo "<br>";

	$alat_tulis2 = new alat_tulis();
	$alat_tulis2->barang="Pensil";
	$alat_tulis2->merk="Staedtler";
	$alat_tulis2->harga="Rp.5000";
	echo "Barang 2: " . $alat_tulis2->getcetak();

	echo "<br>";

	$alat_tulis3 = new alat_tulis();
	$alat_tulis3->barang="Pensil Warna";
	$alat_tulis3->merk="Faber Castell";
	$alat_tulis3->harga="Rp.50000";
	echo "Barang 3: " . $alat_tulis3->getcetak();

	echo "<br>";

	$alat_tulis4 = new alat_tulis();
	$alat_tulis4->barang="Spidol";
	$alat_tulis4->merk="Snowman";
	$alat_tulis4->harga="Rp.10000";
	echo "Barang 4: " . $alat_tulis4->getcetak();

	?>