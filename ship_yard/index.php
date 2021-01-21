<?php
	include("shipyard_class.php");

	$perahu_motor = new perahu_motor("Captian Budi","KM Baruna", "KM00B", "Suzuki", "Premium", "2002");
	$perahu_layar = new perahu_layar("Captian Ahmad","Pynisi", "PYZZ0", "Tidak bermesin", "Tidak ada bahan bakar", "1999");
	$kapal_pesiar = new kapal_pesiar("Captian J&K","Carnival Freedom", "ZRK-01", "Diesel", "MDF", "2007");

	$perahu_motor->detail();
	$perahu_layar->detail();
	$kapal_pesiar->detail();

	$perahu_motor->maju(12);
	$perahu_layar->maju(15);
	$kapal_pesiar->maju(20);
?>