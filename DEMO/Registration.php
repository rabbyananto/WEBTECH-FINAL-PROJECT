<?php

	//error_reporting(0);
		
	$email= $erremail = $pass = $errpass = $cpass = $errcpass = $name = $errname = $usertype = $errusertype = "";
	$name=$email=$pass=$cpass=$user="";
    $flag=1;
    echo "working";
   
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name=trim($_POST['name']);
		$email=trim($_POST['email']);
		$pass=trim($_POST['pass']);
		$cpass=trim($_POST['cpass']);
		$usertype="1";

		print "name";
	
       
	if(isset($_POST['submit'])){

		if (empty($_POST['email'])) {
			$email="";
			$erremail = "You forgot to enter your email address";
			$flag=0;
		} 
		
		
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

		$sql0="SELECT id FROM users " ;
		if ($result=mysqli_query($conn,$sql0))
  				{
  // Return the number of rows in result set
				  $rowcount=mysqli_num_rows($result);
		         	$rowcount+=1;	  
				  }
    
			$sql="INSERT INTO users values('$rowcount','$name','$email','$pass','$usertype')";
			//have to check email duplicasy
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

   <form action="#" method="POST">
	    <div align="Center" width=33% border="1px" >
			<div>
                 <h1 > PROTOTYPE OF CHOLO GHURI </h1> <hr/> 
            </div>
             <div >
   		            <h2> SIGN UP </h2>
		            <p>Please provide the following informations to Sign up</p>
	        </div>
	        
			<br/>
            <div >
		        <label >Name : </label>
		        <input type="text" id = "name" name="name" onblur="getName()">
				<span style="color:red;">*<?php echo $errname ?></span>
				<br/>
	        </div>
			<br/>
            <div>
		        <label>Email : </label>
		        <input type="email" id = "email" name="email" onblur="getEmail()">
				<span style="color:red;">*<?php echo $erremail ?></span>
				<br/>
	        </div>
			<br/>
            <div >
		        <label >Password : </label>
		        <input type="password" id = "pass" name="pass" onblur="getPass()">
				<span style="color:red;">*<?php echo $errpass ?></span>
				<br/>
	        </div>
	        <br/>
            <div >
		        <label>Confirm Password : </label>
		        <input type="password" id = "cpass" name="cpass">
				<span style="color:red;">*<?php echo $errcpass ?></span>
				<br/>
	        </div>
	        <br/>
            <div >
		        <input type="submit" value="Sign Up" name="submit"><br/>
				
				<a href="login.php">Log in</a>
				
	        </div>
			<br/>
		</div>	
	</form>

</body>
<?php 
   include("FOOTER/footer.php");
?>
<script type="text/javascript" src='myjavascript.js'></script>
</html>




