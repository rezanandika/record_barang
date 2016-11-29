<?php

if ( ! function_exists('image_resize')){
	function image_resize($fileurl = '', $ext = '', $rsz_percent = 0, $rsz_width = 0, $rsz_height = 0){
		$filepath = getcwd().'/'.str_replace(base_url(), '', $fileurl);
		list($width, $height) = getimagesize($filepath);

		if($rsz_percent != 0){
			$newwidth 	= $width * ($rsz_percent / 100);
			$newheight 	= $height * ($rsz_percent / 100);
		}

		if($rsz_width != 0) $newwidth 	= $rsz_width;
		if($rsz_height != 0) $newheight = $rsz_height;

		$imageQuality = 80;
		$savePath 	= '';
		$saveUrl 	= base_url();
		$f = explode('.', $filepath);
		foreach ($f as $i => $v) {
			if($i < count($f)-1){
				$savePath 	.= $v;
				$saveUrl 	.= $v;
			}
		}

		$saveUrl = str_replace(getcwd(), '', $saveUrl);

		$savePath .= '-'.$newwidth.'x'.$newheight;
		$saveUrl  .= '-'.$newwidth.'x'.$newheight;

		switch($ext)
		{
			case 'image/jpg':
			case 'image/jpeg':
			$savePath .= '.jpg';
			$saveUrl .= '.jpg';
			$source = imagecreatefromjpeg($filepath);
			break;
			case 'image/gif':
			$savePath .= '.gif';
			$saveUrl .= '.gif';
			$source = imagecreatefromgif($filepath);
			break;
			case 'image/png':
			$savePath .= '.png';
			$saveUrl  .= '.png';
			$source = imagecreatefrompng($filepath);
			break;
			default:
			$img = false;
			break;
		}

		if(!file_exists($savePath)){
			$thumb = imagecreatetruecolor($newwidth, $newheight);


			imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

			// Output
			switch($ext){
				case 'image/jpg':
				case 'image/jpeg':
				if (imagetypes() & IMG_JPG) {
					imagejpeg($thumb, $savePath, $imageQuality);
				}
				break;

				case 'image/gif':
				if (imagetypes() & IMG_GIF) {
					imagegif($thumb, $savePath);
				}
				break;

				case 'image/png':
					// *** Scale quality from 0-100 to 0-9
				$scaleQuality = round(($imageQuality/100) * 9);

					// *** Invert quality setting as 0 is best, not 9
				$invertScaleQuality = 9 - $scaleQuality;

				if (imagetypes() & IMG_PNG) {
					imagepng($thumb, $savePath, $invertScaleQuality);
				}
				break;

					// ... etc

				default:
					// *** No extension - No save.
				break;
			}
			imagedestroy($thumb);
		}
		imagedestroy($source);

		return $saveUrl;
	}
}

if ( ! function_exists('parse_size')){
	function parse_size($size) {
		$unit = preg_replace('/[^kmgtpezy]/i', '', $size); // Remove the non-unit characters from the size.
		$size = preg_replace('/[^0-9\.]/', '', $size); // Remove the non-numeric characters from the size.
		if ($unit) {
			// Find the position of the unit in the ordered string which is the power of magnitude to multiply a kilobyte by.
			return round($size * pow(1024, stripos('kmgtpezy', $unit[0])));
		}
		else {
			return round($size);
		}
	}
}
if ( ! function_exists('beauty_size')){
	function beauty_size($size) {
		$size = preg_replace('/[^0-9\.]/', '', $size); // Remove the non-numeric characters from the size.
		$division = pow(1024, stripos('bkmgtpezy', $size));
		$after 	  = array( 'b', 'kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb');
		return $size / $division . ' ' .$after[$division];
	}
}

if ( ! function_exists('max_size_upload')){
	function max_size_upload(){
		$post_max 	= parse_size(ini_get('post_max_size'));
		$upload_max = parse_size(ini_get('upload_max_filesize'));

		if ($upload_max > 0 && $upload_max < $post_max) {
			return $upload_max;
		}
		return $post_max;
	}
}

if ( ! function_exists('genpass')){
	function genpass($pass = ''){
		$CI = & get_instance();
		$key = $CI->config->item('encryption_key');
		return sha1(md5($key.$pass.$key));
	}
}

if ( ! function_exists('base_url_admin')){
	function base_url_admin($uri = '', $protocol = NULL){
		return get_instance()->config->base_url($uri, $protocol).'index.php/';
	}
}

if ( ! function_exists('array_sosmed')){
	function array_sosmed(){
		return array('facebook', 'twitter', 'youtube', 'google-plus', 'instagram');
	}
}
if ( ! function_exists('generate_id')){
	function generate_id($extra = ''){
		$user_id = get_instance()->session->userdata('id');
		return sha1($extra . date('Y-m-d H:i:s') . $user_id . rand(0, 100000));;
	}
}

if ( ! function_exists('date_format_ext')){
	// source : http://php.net/manual/en/function.strftime.php
	function date_format_ext($sqldate = '', $type = 1, $datetime = false, $separator = '/') {
		$date = '-';
		if($sqldate != ''){

			$tglconvert = strtotime($sqldate);
			$tgl = date('d', $tglconvert);
			$bln = date('m', $tglconvert);
			$thn = date('Y', $tglconvert);

			$jam = date('H', $tglconvert);
			$menit = date('i', $tglconvert);

			if($type == 1){
				// 30/Nov/2015
				$arr_bln = array('', 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des');
				$bln = $arr_bln[(int)$bln];
			}else if($type == 2){
				// 30/November/2015
				$arr_bln = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
				$bln = $arr_bln[(int)$bln];
			}else{
				// 30/11/2015
				
			}
			$date = $tgl.$separator.$bln.$separator.$thn;
			if($datetime == true) $date .= $jam.':'.$menit;
		}

		return $date;
	}
}
?>