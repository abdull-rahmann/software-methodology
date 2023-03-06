const usersList = document.querySelector(".post .page");


setInterval(()=>{
     //starting ajax
   let xhr = new XMLHttpRequest(); // creating XML object

   //Opens the first.php file to read
   xhr.open("GET", "php/first.php", true);

    //Reads the data from signup.php
   xhr.onload = ()=>{
       if(xhr.readyState === XMLHttpRequest.DONE){
           if(xhr.status === 200){
            let data = xhr.response;
           usersList.innerHTML = data;
           }
       } 

   }
   xhr.send();

}, 500); //this function will run frequently after 500ms