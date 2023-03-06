const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");


form.onsubmit = (e)=>{
    e.preventDefault(); //prevents from from submitting
}

continueBtn.onclick = ()=>{
   //starting ajax
   let xhr = new XMLHttpRequest(); // creating XML object

   //Opens the signup.php file to read
   xhr.open("POST", "php/login.php", true);

    //Reads the data from signup.php
   xhr.onload = ()=>{
       if(xhr.readyState === XMLHttpRequest.DONE){
           if(xhr.status === 200){
            let data = xhr.response;
              if(data == "success"){
                location.href = "first.php";
              }else{
                errorText.style.display = "block";
                errorText.textContent = data;
              }
           }
       } 

   }

   //we have to send form data through ajax to php
   let formData = new FormData(form); //create new formData Object
   xhr.send(formData); //sending the form data to php
}

