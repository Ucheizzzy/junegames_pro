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

			if (strpos($output, 'INACTIVE') !== false) 
			{
			$user = 'not active';
				header('location:./subscribe.php');
			}
			elseif (strpos($output, 'ACTIVE') !== false)
			{
			$user = 'active';
			// initiate a session			
						$_SESSION['june.number'] 	= $msisdn;
					
			}   

}



?>
