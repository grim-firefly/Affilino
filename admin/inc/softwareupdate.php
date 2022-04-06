<?php

//software update checker

	function UpdateChecker($softwareversion)
	{
		
		 $json = file_get_contents ("http://getecz.com/softwares/leadman/version.json");
         $array = json_decode($json, true);
         $newversion=$array['version']; 
		if($softwareversion<$newversion)
		{
			$response =$newversion;
			return $response;
		}
	}	
		
// download update
	function DownloadUpdate($link)
	{
		$remote_file_url = 'http://getecz.com/softwares/leadman/leadman'.$link.'.zip';
		$local_file = 'update.zip';
		$copy = copy( $remote_file_url, $local_file );
		if( !$copy ) {
		    echo "Sorry! Error Updating Software <br> ";
		}
		else
		{		   	
			$file = 'update.zip';
			echo "Download Updates...<br> ";
			// unzip update

			$path = pathinfo( realpath( $file ), PATHINFO_DIRNAME );
 
			$zip = new ZipArchive;
			$res = $zip->open($file);
			if ($res === TRUE) {
			    $zip->extractTo( $path );
			    $zip->close();

			   echo "Installing Updates...<br> "; 
			   
			}
			else
			{
				echo "Error! Update Failed <br> ";
			}

		}			
	}
?>