<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if (!function_exists('interval')) {
	
	function interval($tgl_donasi, $masa_donasi){

        $selisih = strtotime($masa_donasi) - strtotime($tgl_donasi);
        $hari = $selisih/(60*60*24);

		return $hari;
	}
}