<?php 
       
       session_start();
     
      include_once "config.php";
      $place = mysqli_real_escape_string($conn, $_POST['place']);
      $caption = mysqli_real_escape_string($conn, $_POST['caption']);
   
      if(!empty($place) && !empty($caption)){

         //lets check if user uploads file or not
         if(isset($_FILES['image'])){ //if file is uploaded
            $img_name = $_FILES['image']['name']; //getting user uploaded image name
            $tmp_name = $_FILES['image']['tmp_name']; //this temporary name is used to save/move file in our folder


          //lets explode the img and get the last extension like jpg png 
          $img_explode = explode('.', $img_name);
          $img_ext = end($img_explode); //here we get the extension of a user uploaded image

          $extensions = ['png', 'jpeg', 'jpg']; //we store these ext in an array
          if(in_array($img_ext, $extensions) === true){ //if user upload matches our ext in any array
                $time = time(); // this will return us the current time.... 
                                //we need this time becoz wen upload user img to our folder, we rename user file with current time
                                //so all the image file will have a unique name
              //lets move the user img to our particular folder
                $new_img_name = $time.$img_name;
            
                if(move_uploaded_file($tmp_name, "posts/".$new_img_name)){ //if user ulpoad img move to our folder successfully
                 //   $post_id = rand(time(), 10000000); //creating random id for user
                       
                    //lets insert all user data inside table
                    $unique_id = $_SESSION['unique_id'];
                    $sql2 = mysqli_query($conn, "INSERT INTO posts (location, caption, p_img, unique_id)
                                        VALUES ('{$place}', '{$caption}', '{$new_img_name}', '{$unique_id}')");
                                     
                    if($sql2){
                        echo "success";
                    }else{
                        echo "Something went wrong!";
                    }
                }
                    
                }else{
                    echo "Please select an image file - jpeg, jpg, png!";
                    }

                }else{
                    echo "Please select an image file!";
                }
            
         


            }else{
        echo "All input fields are required!!!";
      }



    

?>