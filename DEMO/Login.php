

<?php 
   include("HEADER/header.php");
?>
<form action="#" method="POST">
		<div >
            <label>Email:</label>
			<input type="text" placeholder="Enter Email Address" name="email"><br/><br/>
            <label>Password:</label>
			<input type="password"  placeholder="Password" name="pass"> <br/><br/>
		</div>
        <br/><br/>
		<div >
			<input type="submit" value="Log In" name="login">
            <a  href ="Home.php" >Search<a/>
</form>
<?php 
   include("FOOTER/footer.php");
?>
