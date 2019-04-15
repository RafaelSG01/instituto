<?php

if (!function_exists('uploadIEGM')) {

  function uploadIEGM($file, $path) {

		if (is_null($file)){
			dd('não tem arquivo');
		}

		$filename = md5(date('m/d/Y h:i:s', time())).".".$file->getClientOriginalExtension();
		$file->move(public_path($path), $filename);

		return $filename;

  }

}