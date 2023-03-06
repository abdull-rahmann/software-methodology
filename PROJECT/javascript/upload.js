const form = document.querySelector(".upload form"),
uploadBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");


form.onsubmit = (e)=>{
    e.preventDefault(); //prevents from from submitting
}

uploadBtn.onclick = ()=>{
   //starting ajax
   let xhr = new XMLHttpRequest(); // creating XML object

   //Opens the upload.php file to read
   xhr.open("POST", "php/upload.php", true);

    //Reads the data from upload.php
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

