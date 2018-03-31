<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Josefin+Sans:400,600" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
    
    <script type="text/javascript">
	function checkblank()
	{
		if(document.getElementById('bh').value==""){
			alert('please enter Title of the blog');
			document.getElementById('bh').style.border="red";
			return false;
		}
		if(document.getElementById('bt').value==""){
			alert('Blog Cant be emepty');
			document.getElementById('bt').style.border="red";
			return false;
		}
	}
	</script>
</head>
<body>

<div class="menu">
<div class="right">
	<ul>
		<li><a href="../Welcome/welcome.php">Home</a></li>
		<li><a href="../Home/Home.php">Profile</a></li>
		<li><a href="../Write Blog/Blog.php">Blog</a></li>
		<li><a href="#">Settings</a>
		<ul>
			<li>
			<a href="../Search/search.php">Search</a>
			<a href="../Reset Password/ResetPass.php">Password Settings</a>
			</li>
		</ul>
		</li>
		<li><a href="#">Log Out</a></li>
	</ul>
</div>
<div class="left"></div>
</div>
<div class="Body">
	<div class="wblog">
	<a href="#">Write Blog</a>
		
	</div>
	<div class="lblog">
	<a href="../Read Own Blog/SBlog.php">Blog List</a>
		
	</div>
	<div class="wBlog">
		<form action="blogpost.php" method="POST" onsubmit="return checkblank()">
			<input type="text" placeholder="Blog Title" name="blog_header">
			<textarea maxlength="1000" name="blog_text" id="" cols="100" rows="30" placeholder="Write Blog within 25 lines"></textarea>
			
			<div class="p1">
			<input type="submit" value="Submit Blog" name="submit_blog">
			</div>
		</form>
	</div>

</div>
</body>
</html>