<?php
// created by ajith jojo
// admin related functions 

//create admin
	function CreateAdmin($conn,$name,$email,$password)
	{		
		$datetoday = date('Y-m-d'); 
		if($name==NULL || $email==NULL || $password==NULL)
		{
			$response ='error';
			return $response;
		}
		else{
			$password=md5(sha1($password));
			mysqli_query($conn,"INSERT INTO `admins` (`name`,`email`,`password`,`created`,`status`) VALUES
			('$name','$email','$password','$datetoday','1')"); 

				$response ='success';
				return $response;
		}
	}


//get admin details
	function GetAdmin($conn,$aid)
	{
		$sqlq = mysqli_query($conn,"SELECT * FROM `admins` WHERE `aid`=$aid");
        $rowadmins =mysqli_fetch_array($sqlq);        
		$admins['name'] = $rowadmins['name']; 
		$admins['email'] = $rowadmins['email']; 
		$admins['password'] = $rowadmins['password']; 
		$admins['created'] = $rowadmins['created']; 
		$admins['status'] = $rowadmins['status']; 
		return $admins;
	}	

//admin login
	function AdminLogin($conn,$email,$pass,$rem)
	{
		//encrypting new pasword
		$password=md5(sha1($pass));

		$query =mysqli_query($conn,"SELECT * FROM `admins` WHERE email ='$email'and password ='$password'");	
		$rowcounts = mysqli_num_rows($query);	
			if($rowcounts==1)
			{
				$row =mysqli_fetch_array($query);		
				$stat=$row['status'];
				if($stat==1)
				{
					$_SESSION['admin'] = $row['aid'];

					$response ='success';
					return $response;
					if($rem==1)
					{
						setcookie('aid',$row['aid'], time() + (86400 * 365), "/");
					}
				}
			}
			else
			{
				$response ='error';
				return $response;	 	 		
			}
	}
	

//forget password
	function ForgetPassword($conn,$email)
	{			
		if($email!=NULL)
		{
			//generate new password
			$newpass = rand(111111,999999);
			
			//encrypting new pasword
			$password=md5(sha1($newpass));

			
			//updating new password into database
			mysqli_query($conn,"UPDATE `admins` SET `password` = '$password' WHERE `admins`.`email` = $email");	
			//sending email to user with new password
			$msg = "Your new password is :" . $newpass;
			$headers .= 'From: <noreply@getecz.com>' . "\r\n";
			mail($email,"Password Reset",$msg,$headers);	
			
			//response
			$response ='success';
			return $response;

		}
		else
		{
			$response ='error';
			return $response;
		}

	}

//logout
	function AdminLogout($conn)
	{
		session_destroy();		
		setcookie("aid", "", time() - 3600);
		echo"<script> window.setTimeout(function() { window.location.href = './index'; }, 0);</script>";
	}

//get admins list
	function GetAdminList($conn)
	{
		$sqlq = mysqli_query($conn,"SELECT * FROM `admins` ");
    	$data =array();
        while($row =mysqli_fetch_assoc($sqlq))
        {
            $data[] = $row; 
        }    
        return $data;
	}


//change password
	function ChangePassword($conn,$aid,$newpass,$rpass)
	{		
		if($aid!=NULL)
		{
			if($newpass==$rpass)
			{
				$password=md5(sha1($newpass));
				mysqli_query($conn,"UPDATE `admins` SET `password` = '$password' WHERE `admins`.`aid` = $aid");
				$response ='success';
				return $response;
			}
			else
			{
				$response ='pwmiss';
				return $response;
			}
		}
		else
		{
			$response ='error';
			return $response;
		}
	}


//delete admin
	function DeleteAdmin($conn,$aid)
	{
		mysqli_query($conn,"DELETE FROM admins WHERE aid ='$aid'"); 
	}	
?>
