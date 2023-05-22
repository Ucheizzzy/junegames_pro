<?php
date_default_timezone_set('Africa/Lagos');

session_start();
if(isset($_SESSION['june.number'])) 
{
			$msisdn = $_SESSION['june.number'];
			$user = 'active';
}elseif(!empty($_GET['phone'])) 
{
			$msisdn = $_GET['phone'];

	// Put text file here with subscribed numbers
	$output = file_get_contents('test.txt', true);
 
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
			}   

}
// else 
// {
// 			//echo getenv(DOMAIN_NAME);
// 			$traffic = $_GET['tcid'];
// 			$msisdn = $_SERVER['HTTP_MSISDN'];
// 			$device = $_SERVER['HTTP_USER_AGENT'];
// 			$urlcode = urlencode(' '.$tcid.' '.$device);
// 			//$date = date('m-d');

// 			$msisdn = str_replace(' ', '', $msisdn);
// 			$msisdn= '234'. substr($msisdn, -10,10);

// 	// Put text file here with subscribed numbers
// 	$output = file_get_contents('test.txt', true);
 
//   if (strpos($output, $msisdn) === false) 
// 			{
// 				$user = 'not active';
// 				header('location:./subscribe.php');
		
// 			}
// 		elseif(strpos($output, $msisdn) !== false) 
// 			{
// 						$user = 'active';
// 		  	// initiate a session			
// 						$_SESSION['june.number'] 	= $msisdn;
// 			}   
   
// }

$ip = $_SERVER['REMOTE_ADDR'];
$device = $_SERVER['HTTP_USER_AGENT'];
$urlcode = urlencode(' '.$ip.' '.$device);
$nwdate = date('Y-m-d H:i:s');
$tfile = 'traffic.txt';

$tdata = PHP_EOL . $msisdn.', '. $ip.', '.$device.', '. $nwdate;

file_put_contents($tfile, $tdata, FILE_APPEND);

?>
