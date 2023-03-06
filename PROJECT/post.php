<?php
    include_once "header.php";
?>
<body>
    
 <div class="wrapper">
     <section class="form upload">
         <header>
         <a href="first.php" class="backk-icon"><i class="fas fa-arrow-left"></i></a>   
          NEW POST</header>
         <form action="#" enctype="multipart/form-data" autocomplete="off">
             <div class="error-txt"></div>
             <div class="name-details">
                 
            </div>
                <div class="field input">
                    <label>Location </label>
                    <input type="text"  name = "place" placeholder="Enter your Pic Location" required>
                </div>
                <div class="field input">
                    <label>Caption </label>
                    <input type="text"  name = "caption" placeholder="Enter Your Caption" required>
                    
                </div>
                <div class="field image">
                    <label>Choose Upload Pic</label>
                    <input type="file"  name = "image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Upload">
                </div>
            
         </form>
        
     </section>
 </div>

 
 <script src="javascript/upload.js"></script>

</body>
</html>