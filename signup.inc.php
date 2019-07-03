<?php
include_once('include/config.php');

if(isset($_POST['signupSubmit']))h
{
     $username = $_POST['usernameBox'];
     $email    = $_POST['emailBox'];
     $password = $_POST['passwordBox'];
     $confirm  = $_POST['confirmBox'];


     //Validate for data 
     $errors = [];
     $successes = [];
     if($username == '' OR $email == '' OR $password == '' OR $confirm == '' ){
          $errors[] = 'Please fill in all data';
          header("location: signup.php?error=emptyfields");
          exit;
  
     }
     //Check for user 
          //Seledct all users with the same username
          $result = mysqli_query($conn, "SELECT * from users WHERE username='{$username}'") or die(mysqli_error($conn));
          if(mysqli_num_rows($result)>0){
               //DB found a user with this username
               $errors[] = 'Username is not available, Please try a different one';
          }
          else if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
               $errors[] = 'Name can only contain letters, numbers and white spaces';
          } 

     //Check for Email
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errors[] = 'Invalid Email';
     }
                  
     //Check for password and confirm password
     if($password != $confirm){
          $errors[] = 'Password and confirm dont match';
     }
     else if (strlen($password) < 6) {
          $passwordError = 'Please enter a long password';
     }
     
     
     //Check if a user exists in the users TBL with this username -> add/save new one or not  

     if(count($errors) == 0){

          if(mysqli_query($clink, "INSERT into users values(null,'{$username}','{$email}','{$password}')")){
               $successes[] = 'User data has been successfully saved';
          }else{
               $errors[] = "Something went wrong";
          }
     }
}

?>