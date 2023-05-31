<?php

session_start();

	// $msisdn = $_SERVER['HTTP_MSISDN'];
	$device = $_SERVER['HTTP_USER_AGENT'];
	


date_default_timezone_set('Africa/Lagos');


if(isset($_SESSION['june.number'])) 
{
			$msisdn = $_SESSION['june.number'];
			$user = 'active';
}elseif(!empty($_GET['phone'])) 
{
	 $msisdn = $_GET['phone'];

		include_once('subscriber.php');
  		/* subscribers.php
		This script receives new subscriber data from RIM VAS server and saves in file */

// 			$file = 'test.txt';
// 			$current .= "$msisdn\n";
// // Write the contents back to the file
//   file_put_contents($file, $current);
	// Put text file here with subscribed numbers
 	$output = file_get_contents($file, true);
 
  if (strpos($output, $msisdn) === false) 
			{
				$user = 'not active';
				header('location:./subscribe.php');
		
			}
		elseif(strpos($output, $msisdn) !== false) 
			{
						$user = 'active';
		  	// initiate a session			
						$_SESSION['june.number'] 	= $msisdn;
							header('location:./index.php');
			}   

}

$ip = $_SERVER['REMOTE_ADDR'];
$device = $_SERVER['HTTP_USER_AGENT'];
$urlcode = urlencode(' '.$ip.' '.$device);
$nwdate = date('Y-m-d H:i:s');
$tfile = 'traffic.txt';

$tdata = PHP_EOL . $msisdn.', '. $ip.', '.$device.', '. $nwdate;

file_put_contents($tfile, $tdata, FILE_APPEND);

?>
