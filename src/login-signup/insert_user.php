<?php 

    include("includes/connection.php");

    if(isset($_POST['signup'])){
        $first_name = htmlentities(mysqli_real_escape_string($con,$_POST['$first_name']));

        $last_name = htmlentities(mysqli_real_escape_string($con,$_POST['$last_name']));

        $password = htmlentities(mysqli_real_escape_string($con,$_POST['$user_password']));

        $email = htmlentities(mysqli_real_escape_string($con,$_POST['$user_email']));

        $username = strtolower($first_name . "_" .$last_name."_".$newgid);

        $birthday = htmlentities(mysqli_real_escape_string($con,$_POST['$user_birthday']));

        $status = "verified";

        $posts = "no";

        $newgid = sprintf('%05d' , rand(0,9999999));


        $check_username_query = "select user_name from users where user_email='$email' ";
        $run_username = mysqli_query($con,$check_username_query);

        if(strlen($password) <9){
            echo"<script>alert('password should be minimum 9 characters')</script>";
            exit();
        }


        // $check_email = "select * from users where user_email='$email'";

        // $run_email = mysqli_query($check_email);


        // $check = mysqli_num_rows($run_email);


        // if($check ==1){
        //     echo "<script>alert('email already exists, please try another email')</script>";


        //     echo "<script>window.open('index.php','_self')</script>";
        //     exit();
        // }


        $rand = rand(1,3); //Random number between 1 - 3


        if($rand ==1){
            $profile_pic = "doggo.png";
        }
        else if($rand==2){
            $profile_pic = "doggo.png";
        }
        else if($rand==3){
            $profile_pic ="doggo.png";
        }



        $insert = "insert into users (f_name,l_name,user_name,describe_user,user_password,user_email,user_birthday,user_image,user_cover,user_reg-date,status,post,recovery_account)
            
        values(
            '$first_name','$last_name','$username','Welcome to my page','$password','$email','$birthday','$profile_pic','...',NOW(),$status,$post ,'Lets recover
            )";

            $query = mysqli_query($con , $insert);

            if($query){
                echo "<script>window.open('index.php','_self')</script>";
            }



        




    }



?>