<?php
    include_once "header.php";
?>

<body>
    
 <div class="wrapper">
     <section class="form login">
         <header>Share Me Chat</header>
         <form action="#">
             <div class="error-txt"></div>
            
                     
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name = "email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name = "password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>
              
                <div class="field button">
                    <input type="submit" value="Sign Up">
                </div>
            
         </form>
         <div class="link">Don't have an Account? <a href="index.php">Sign Up</a></div>
     </section>
 </div>
          
 <script src="javascript/pass-show-hide.js"></script>
 <script src="javascript/login.js"></script>


</body>
</html>