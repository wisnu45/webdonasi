<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if (!function_exists('interval')) {
	
	function interval($tgl1, $tgl2){
        
        $tgl1 = new dateTime($tgl_donasi);
        $tgl2 = new dateTime($masa_donasi);

        $selisih = strtotime($tgl2) -  strtotime($tgl1);
        $hari = $selisih/(60*60*24);

        return $hari;
	}
}