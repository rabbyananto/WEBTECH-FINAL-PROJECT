<?php
session_start();
$id=$pass="";
$idE=$passE="";
$email=$emailE="";


$flag=0;

	if(isset($_POST['submit'])){

	if(empty($_POST['email']))
  		 { $email="*email required";
			
		}
	else
    	{$email=trim($_POST['email']);

			$flag=1;
	}
	if(empty($_POST['pass']))
  		 { 
			$pass="*pass required";
			$flag=0;
		}
	else
 		 { 
			$pass=trim($_POST['pass']);
			$flag=1;
        }
        
        echo "working";

if($flag==1)
{
$conn=mysqli_connect("localhost","root","","web");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql="select * from users where email='$email'";
    echo "$sql";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row['pass']==$pass)
{
	   $_SESSION['name']=$row['name'];
        $_SESSION['id']=$id;
        $_SESSION['email']=$row['email'];
		$_SESSION['usertype']=$row['usertype'];
		$_SESSION['pass']=$row['pass'];
	if($row['usertype']=="1")
	{
		

		header("location:UserHome.php");
	}
	else if($row['usertype']=="2")
		{
		header("location:AdminHome.php");
	}
	else
		echo "have issue with account";

}
mysqli_close($conn);


}
}

?>







<html>
<body>
<form action="#" method="POST">
	<div align="Center" width=100% border="1px">
			<div>
                 <h1 > PROTOTYPE OF CHOLO GHURI </h1> <hr/> 
            </div>
		
		<div >
            <label>Email:</label>
			<input type="text" placeholder="Enter Email Address" name="email"><?php echo "$emailE";?><br/><br/>
            <label>Password:</label>
			<input type="password"  placeholder="Password" name="pass"><?php echo "$passE";?> <br/><br/>
		</div>
        <br/><br/>
		<div >
			<input type="submit" value="LogIn" name="submit">
            <a  href ="Home.php" >Search<a/>
	</div>	
</body>
	<?php 
  		 include("FOOTER/footer.php");
	?>	
</form>

</html>