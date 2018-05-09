<?php 
   class mobil{
   	public $pemilik;
   	public $merek;
   	public $warna;

   	function hidupkan_mobil($p){
   		return "hidupkan mobil".$this->pemilik=$p;
   	}
   	function matikan_mobil(){
   		return "matikan mobil";
   	}
   }
   	$mobil_husni=new mobil();

   	$mobil_husni->pemilik ="husni";
   	$mobil_husni->merek ="kuda nil";
   	$mobil_husni->warna ="hitam";

   	echo $mobil_husni->pemilik;
   	echo "<br>";
   	echo $mobil_husni->merek;
   	echo "<br>";
   	echo $mobil_husni->warna;
   	echo "<br>";

   	echo $mobil_husni->hidupkan_mobil('pa,ong lagi ngepot');
   	echo "<br>";

   	echo $mobil_husni->matikan_mobil();
   	echo "<br>";
   
 ?>