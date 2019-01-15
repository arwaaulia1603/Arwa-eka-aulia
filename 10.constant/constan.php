<?php 

// define('NAMA', 'Arwa Eka Aulia');
// echo NAMA;

// echo "<br>";

// const UMUR = 16;
// echo UMUR;

// class Coba {
// 	const NAMA = 'Arwa Eka';
// }

// echo Coba::NAMA;



// echo __FILE__;


//  function coba() {
//  	return __FUNCTION__;
//  }

// ECHO coba();

 class Coba {
 	public $kelas = __CLASS__;
 }

$obj = new 	Coba;
echo $obj->kelas;








 ?>