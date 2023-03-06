<?php
     
     session_start();
     
      include_once "config.php";
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

   if(!empty($email) && !empty($password)){

     //We check if users entered email or password matches any field in the table
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
    if(mysqli_num_rows($sql) > 0){ //if inputs do match
       $row = mysqli_fetch_assoc($sql);
       $status = "Active now";
       //Updating user status to active if user logged in successful
       $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']} ");
      if($sql2){
         $_SESSION['unique_id'] = $row['unique_id']; //using this session, we used user unique_id in other php file
         echo "success";
      }

    }else{
        echo "Email or Password incorrect!";
    }



   }else{
    echo "All input fields are required";
   }


?>