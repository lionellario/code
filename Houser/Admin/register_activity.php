<?php
	
	function getUserIP() 
	{
		if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) 
		{
			if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) 
			{
				$addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
				return trim($addr[0]);
			} else {
				return $_SERVER['HTTP_X_FORWARDED_FOR'];
			}
		}
		else {
			return $_SERVER['REMOTE_ADDR'];
		}
	}
	
	function fileWriteActivity( $filepath, $activity )
	{
		$fleW = fopen($filepath, "a");
		$user_ip = getUserIP();
		$data = date("d-m-Y / h:i:s a")." ---- IP Address: ".$user_ip." ---- Activity = ".$activity."\n";
		fwrite($fleW, $data);
		fclose($fleW);
	}
	
	function fileReadActivity( $filepath )
	{
		$fleR = fopen($filepath, "r");
		$i = 1;
		while(!feof($fleR)) 
		{ 
			$line = fgets($fleR); 
			echo ToFourDigit($i)."---".$line."<br>";
			$i++;
		}
		fclose($fleR);
	}
	
	function ToFourDigit( $arg )
	{
		$len = strlen($arg);
		if( $len < 4 )
		{
			$var = addZeros( (4-$len) )."".$arg;
		}
		else
			$var = $arg;
		
		return $var;
	}
	
	function addZeros( $nbe )
	{
		$zeros = "";
		for($i=0; $i<$nbe; $i++)
			$zeros = $zeros."0";
		return $zeros;
	}
	
	function getUserIP()
	{
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];
	
		if(filter_var($client, FILTER_VALIDATE_IP))
		{
			$ip = $client;
		}
		elseif(filter_var($forward, FILTER_VALIDATE_IP))
		{
			$ip = $forward;
		}
		else
		{
			$ip = $remote;
		}
	
		return $ip;
	}
					 
?>