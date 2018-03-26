<?php
   
   

	//error_reporting(0);
		
	$id = $errid = $pass = $errpass = $cpass = $errcpass = $name = $errname = $usertype = $errusertype = "";
	$name=$id=$pass=$cpass=$user="";
	$flag=1;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name=trim($_POST['name']);
		$id=trim($_POST['id']);
		$pass=trim($_POST['pass']);
		$cpass=trim($_POST['cpass']);
		$usertype="User";
	
	if(isset($_POST['submit'])){

	
		if(!(empty($id)))
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
		}
		
		if(!(empty($pass))){
			if(strlen($pass)<8)
			{
				$pass ="";
				$errpass = "Password must contains at least 8 characters";
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
		
		if (empty($usertype)) 
		{
			 $errusertype = "User_Type is required";
			 $flag=0;
		}
		
		if($flag==1)
		{
			$conn=mysqli_connect("localhost","root","","web");

			if(!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}

    
			$sql="INSERT INTO user values('$id','$name','$pass','$usertype')";
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

<html>
<body>
<center>
<form action="#" method="POST">
				<div>
					<h3>REGISTRATION</h3>
					Id<br/><input type="text" name="id" value="<?php echo $id ?>"><span style="color:red;">*<?php echo $errid ?></span><br/>
					Password<br/><input type="password" name="pass" value="<?php echo $pass ?>"><span style="color:red;">*<?php echo $errpass ?></span><br/>
					Confirm Password<br/><input type="password" name="cpass" value="<?php echo $cpass ?>"><span style="color:red;">*<?php echo $errcpass ?></span><br/>
					Name<br/><input type="text" name="name" value="<?php echo $name ?>" ><span style="color:red;">*<?php echo $errname ?></span><br/>
					User Type<hr/>
				
					<span style="color:red;">*<?php echo $errusertype ?></span>
					<hr/>
					<input type="submit" name="submit" value="Sign Up">
					<a href="login.php">Sign In</a>
					</div>
				                           
	
</form>
</center>
</body>
</html>