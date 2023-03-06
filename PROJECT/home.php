<?php
    session_start();
    if(!isset( $_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php
    include_once "header.php";
?>
<body>
    
 <div class="wrapper">
     <section class="users home">
    
        <header>
      
            <?php
            include_once "php/config.php";
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
            ?>
          
            <div class="content">
           
             <img src="php/images/<?php echo $row['img'] ?>" alt="">
             <div class="details">
                 <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                 <p><?php echo $row['status'] ?></p>
             </div>
            </div>
            <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
        </header>
        <div class="heads">
            <h3>PROFILE POSTS</h3>
        </div>
        <div class="post-section">
        

            

          
       
        </div>
     </section>
          
     <div class="add">
             <a href="first.php"><span class="material-symbols-outlined homes">
                home
                </span></a>   
               <a href="post.php"><span class="material-symbols-outlined homes">
                    add
                    </span></a> 
      <!--     <a href="post.php" class="bet"><i class="fa fa-plus"></i></a>  -->
          <a href="home.php"><span class="material-symbols-outlined homes">
                person
                </span> </a> 
           </div>

 </div>

 <script src="javascript/users.js"></script>
 <script src="javascript/home.js"></script>

</body>
</html>