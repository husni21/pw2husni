<?php 
   class mobil{
   	public $pemilik;
   	public $merek;
   	public $warna;

   	function hidupkan mobil(){
   		return "hidupkan_mobil";
   	}
   	function matikan mobil(){
   		return "matikan_mobil";
   	}
   }
   	$mobl_husni=new mobil();
   	$mobl_husni->pemilik ="husni";
   	$mobl_husni->merek ="husni";
   	$mobl_husni->warna ="hitam";

   	echo $mobl_husni->pemilik;
   	echo "<br>";
   	echo $mobl_husni->merek;
   	echo "<br>";
   	echo $mobl_husni->warna;
   	echo "<br>";

   	echo $mobl_husni->hidupkan_mobil();
   	echo "<br>";

   	echo $mobl_husni->matikan_mobil();
   	echo "<br>";
   
 ?>