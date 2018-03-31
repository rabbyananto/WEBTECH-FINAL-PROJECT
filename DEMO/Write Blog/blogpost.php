<?php
    require('../config.php');
    session_start();
    if ( $_SESSION['logged_in'] != 1 ) {
         $_SESSION['message'] = "You must log in";
         header("location: ../oops/oops.php"); 
    }
    else {
        // storing session value in variable
        $id = $_SESSION['id'];
        $first_name = $_SESSION['first_name'];
        $last_name = $_SESSION['last_name'];
        $email = $_SESSION['email'];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty(isset($_POST['submit_blog']))){
            $title = $_POST['blog_header'];
            $pst_date = date("Y/m/d");
            $delt = 0;
            $owner = $id;
            $blg_txt = $_POST['blog_text'];
            $sql = "INSERT INTO posts (post_title, post_date, deleted ,owner_id, post_text)
             VALUES ('$title','$pst_date ', '$del','$owner', '$blg_txt')";

            if (mysqli_query($conn, $sql)) {
                 echo "New record created successfully";
                 header('Location: Blog.php');
             } else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
        }
    }
?>