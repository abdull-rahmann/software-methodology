<?php
     session_start();
     include_once "config.php";
     // $uniquee_id = $_SESSION['unique_id'];
     
    $sql2 = mysqli_query($conn, "SELECT u.unique_id, u.fname, u.lname, u.img,
    p.location, p.caption, p.p_img
    FROM users AS u
    JOIN posts AS p
    ON u.unique_id = p.unique_id
    ORDER BY p.post_id DESC; ");
     $output = "";
     if(mysqli_num_rows($sql2) == 0){
        $output .= "No User Posts Are Available";
     }elseif(mysqli_num_rows($sql2) > 0){
       while($row3 = mysqli_fetch_assoc($sql2)){
        $output .= '<div class="wrap">
                                    <div class="close">
                                
                                    <img class="dp" src="php/images/'. $row3['img'] .'">
                                        <div class="details">
                                            <span>'.$row3['fname'] . " " . $row3['lname'].'</span>
                                            <p>'. $row3['location'] .'</p>
                                        </div>
                                        
                                    </div>
                                    <img src="php/posts/'. $row3['p_img'] .'" alt="">
                                    <div class="bot">
                                  <!-- <div class="bottom">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    </div>
                                    --> 
                                    <div class="bottom">
                                    <a href="#">
                                    <span class="material-symbols-outlined">
                                    favorite
                                    </span>
                                    </a>
                                    </div>
                                    <div class="bottom">
                                    <a href="comments.php">
                                    <span class="material-symbols-outlined">
                                    comment
                                   </span>
                                   </a>
                                    </div>
                                    
                                 <!--   <div class="bottom">
                                    <i class="fa fa-comment-o" aria-hidden="true"></i>
                                    </div>
                                    --> 
                                    
                                </div>
                                <p class="likes">100 Likes</p>
                                <div class="comment">
                                <p> <b> Caption :  </b>'.  $row3['caption'] .'</p>
                            </div>
                                </div>';
       }
     }

     echo $output;

?>