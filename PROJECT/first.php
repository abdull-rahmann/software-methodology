
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
     <section class="form post">
         <header> 
            Realtime Fast Chat
            <a href="users.php" class="butt"><i class="fab fa-telegram-plane"></i></a>   
        </header>  
         <!-- <button><i class="fab fa-telegram-plane"></i></button> -->
         
         <div class="page">
         

       
          
           
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

 <script src="javascript/posts.js"></script>

</body>
</html>