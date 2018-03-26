<?php

	//error_reporting(0);
		
	$email= $erremail = $pass = $errpass = $cpass = $errcpass = $name = $errname = $usertype = $errusertype = "";
	$name=$email=$pass=$cpass=$user="";
    $flag=1;
    echo "baaal";
    print "name";
    print "email";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name=trim($_POST['name']);
		$email=trim($_POST['email']);
		$pass=trim($_POST['pass']);
		$cpass=trim($_POST['cpass']);
		$usertype="User";
       
	if(isset($_POST['submit'])){

	
		/*if(!(empty($id)))
		{
			if(preg_match("/^[a-zA-z]*4/",$id))
			{
				$id="";
				$errid="Can contain only digits";
				$flag=0;
			}
		}
		else
		{
			$id="";
			$errid = "Cannot be empty";
			$flag=0;
        }*/
		
		if(!(empty($pass))){
			if(strlen($pass)<4)
			{
				$pass ="";
				$errpass = "Password must contains at least 4 characters";
				$flag=0;
			}
		}
		else
		{
			$pass="";
			$errpass = "Cannot be empty";
			$flag=0;
		}
				
		if(!(empty($cpass))){
			if($cpass!=$pass)
			{	$cpass = "";
				$errcpass = "Must be match";
				$flag=0;
			}
		}
		else
		{
			$cpass="";
			$errcpass = "Cannot be empty";
			$flag=0;
		}
		
		
		
		if($flag==1)
		{
			$conn=mysqli_connect("localhost","root","","web");

			if(!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}

    
			$sql="INSERT INTO users values('1','$name','$email','$pass','$usertype')";
			if(mysqli_query($conn,$sql))
			echo "successful";
		else
			echo "error".mysqli_error($conn);

			mysqli_close($conn);
		}
		else
			echo "fill form correctly";


		}
	}	
?>