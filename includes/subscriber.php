<?php

		$msisdn = $_GET["msisdn"];
		$date = date("Y-m-d h:i:s");
		if (empty($msisdn)){ 
			  die();
				}
		$day = date('m-d');
		$file = 'sub-'. $day .'.txt';
		$data = PHP_EOL .$msisdn;
		file_put_contents($file, $data, FILE_APPEND);	

?>