<?php
session_start();
require 'config/database.php';

///get signup from data if signup button was clicked

if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);  
    $lastname  = filter_var($_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);  
    $username = filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);  
    $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);  
    $createpassword = filter_var($_POST['createpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);  
    $confirmpassword = filter_var($_POST['confirmpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);    
    $avatar =$_FILES['avatar'];
    // echo $firstname, $lastname, $username, $email, $createpassword, $confirmpassword, $avatar;
    //var_dump($avatar);

    if(!$firstname)
    {
        $_SESSION['signup']="Please enter your First name";
    }
    else if(!$lastname)
    {
        $_SESSION['signup']="Please enter your Last name";
    }
    else if(!$username)
    {
        $_SESSION['signup']="Please enter your Username";
    }
    else if(!$email)
    {
        $_SESSION['signup']="Please enter your a valid Email";
    }
    else if(strlen($createpassword) < 8 || strlen($confirmpassword) <8)
    {
        $_SESSION['signup']="Password should be 8+ characters";
    }
    else if(!$avatar['name'])
    {
        $_SESSION['signup']="Please add avatar ";
    } else {
        //check if password dont match 
        if ($createpassword !== $confirmpassword){
            $_SESSION['signup']="Passwords do not match";
        }
        else {
            //hash pass
            $hashed_password = password_hash($createpassword,
            PASSWORD_DEFAULT);
            
            //check if username or email already exist in database
            $user_check_query="SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection,$user_check_query);
            if(mysqli_num_rows($user_check_result) >0 ){
                $_SESSION['signup']=" Username or Email already exist";
            } else {
                //WORK ON AVATAR
                $time = time();
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path='images/ . $avatar_name';
                
                //make sure file is an images
                $allowed_files = ['png','jpg','jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);
                if(in_array($extention, $allowed_files)){
                    //make sure image too big (1mb+)
                    if($avatar['size']<10000000) {
                        //upload avatar
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    }
                    else 
                    {
                        $_SESSION['signup'] = "File size too big, should be less than 1mb";
                    }
                }
                else {
                    $_SESSION['signup'] = "File should be png, jpg or jpeg";
                }
         }
    }
}
// echo time();
// var_dump($avatar);
//redirect back to signup page if there was any problem

    if(isset($_SESSION['signup'])){
        //pass from data back to signup page
        $_SESSION['signup-data'] = $_POST;
        header('location:' . ROOT_URL . 'signup.php');
        die();
    }else {
        //insert new user into users table 
        $insert_user_query= "INSERT INTO users SET 
        firstname='$firstname', lastname='$lastname',
        username='$username', email='$email', password='$hashed_password', avatar='$avatar_name', 
        is_admin = 0";
         $insert_user_result =mysqli_query($connection, $insert_user_query);

        if (!mysqli_errno($connection)){
            // redirect to login page with success
            $_SESSION['signup-success']="Registration successful.Please log in";  
            header('location:' . ROOT_URL . 'signin.php' );
            die();
         }
    }

} else {
    //if button wasn't clicked, bounce back to signup page
    header('location:' .ROOT_URL . 'signup.php');
    die();
}
?>