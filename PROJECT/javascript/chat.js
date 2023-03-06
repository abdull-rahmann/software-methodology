const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault(); //prevents from from submitting
}

sendBtn.onclick = ()=>{
    //starting ajax
   let xhr = new XMLHttpRequest(); // creating XML object

   //Opens the signup.php file to read
   xhr.open("POST", "php/insert-chat.php", true);

    //Reads the data from signup.php
   xhr.onload = ()=>{
       if(xhr.readyState === XMLHttpRequest.DONE){
           if(xhr.status === 200){
           inputField.value = "" //once mssge inserted into db then leave the input field blank
           scrollToBottom()
           }
       } 

   }

   //we have to send form data through ajax to php
   let formData = new FormData(form); //create new formData Object
   xhr.send(formData); //sending the form data to php
}


chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}



setInterval(()=>{
    //starting ajax
  let xhr = new XMLHttpRequest(); // creating XML object

  //Opens the users.php file to read
  xhr.open("POST", "php/get-chat.php", true);

   //Reads the data from signup.php
  xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
           let data = xhr.response;
           chatBox.innerHTML = data;
          if(!chatBox.classList.contains("active")){
            scrollToBottom();
          }
          }
      } 

  }
  //we have to send form data through ajax to php
  let formData = new FormData(form); //create new formData Object
  xhr.send(formData); //sending the form data to php


}, 500); //this function will run frequently after 500ms

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}