<!DOCTYPE html>

<?php
session_start();
$id=$_SESSION['id'];
$name=$_SESSION['name'];
$usertype=$_SESSION['usertype'];

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cholo Ghuri</title>
    <style>
        .header_menu{
			
            width: 100%;
            height: 80px;
            border-bottom: 2px solid #efefef;
        }    
        .left_side{
            width: 20%;
            float: left;
        }
        .right_side{
            width: 70%;
            float: right;
        }
.right_side ul{
    list-style: none;
    
}
.right_side ul li{
    float: left;
    padding: 20px;
    list-style:none;
}
.right_side ul li a{
    text-decoration: none;
    font-size: 20px 
}
.maincontent{
    width: 100%;
    margin-top: 20px;
}
.left_sidebar{
    width: 20%;
    border: 2px solid#efefef;
    float: left;

}
.main_post{
    margin-left: 30px;
    width: 55%;
	
    border:1px solid black;
    float: left;
}
.right_sidebar{
    width: 20%;
    border: 1px solid pink;
    float: right;
}

.left_sidebar ul{
    margin-right: 27px;
}
.left_sidebar ul li{
    text-decoration: none;
    list-style-type: none;
    padding: 20px;
    border: 2px solid #efefef;
    text-align: center;
}

.left_sidebar ul li:hover{
    background: #efefef;
}

 .left_sidebar ul li a{
     text-decoration: none;
   
     
 }
 .main_post p{
     text-allign : center;

 }

    </style>
</head>
<body>
    <div class="header_menu">
        <div class="left_side">
            <h1>Welcome,<?php echo "$name"; ?> !</h1>
        </div>
        <div class="right_side">
            <ul>
                <li><a href="AdminHome.php">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="BlogPage.php">Blogs</a></li>
                <li><a href="#">Notification</a></li>
                <li>
                    <input type="text">
                    <button>Search</button>
                </li>
				<li>
                  <!-- <input type="submit" value="logout" name="submit"> !-->
                  <a href="Logout.php">Logout</a>
                   
                </li>
            </ul>
        </div>
    </div>

<div class="maincontent">
        <div class="left_sidebar">
           <h1 style="text-align:center">Places</h1>
            <ul>
                <li><a href="#">Saint martin</a></li>
                <li><a href="#">Cox's Bazar</a></li>
                <li><a href="#">A place</a></li>
                <li><a href="#">Another Place</a></li>
                <li><a href="#">Dhaka</a></li>
                <li><a href="#">Dhaka</a></li>
                <li><a href="#">Dhaka</a></li>
                <li><a href="#">Dhaka</a></li>
                <li><a href="#">Dhaka</a></li>
            </ul>


        </div>
        <div class="main_post">
            <p>            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi reiciendis eos odio totam molestiae rem quos animi. Esse dolor in nihil quo repudiandae consectetur exercitationem incidunt? Saepe repellat aperiam sed.
                </p>
        </div>
        <div class="right_sidebar">
            <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem reprehenderit hic ea quia dicta necessitatibus doloremque fugiat! Voluptatum nisi natus, enim laboriosam, nostrum ducimus illum voluptatibus aliquid explicabo itaque ullam!

            </p>
        </div>
</div>

</body>
</html>