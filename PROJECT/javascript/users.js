const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");

searchBtn.onclick = ()=>{
     searchBar.classList.toggle("active");
     searchBar.focus();
     searchBtn.classList.toggle("active");
}


searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  if(searchTerm != ""){
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }


    //starting ajax
    let xhr = new XMLHttpRequest(); // creating XML object

    //Opens the users.php file to read
    xhr.open("POST", "php/search.php", true);
 
     //Reads the data from signup.php
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
             let data = xhr.response;
             usersList.innerHTML = data;
            }
        } 
 
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm); 

}

setInterval(()=>{
     //starting ajax
   let xhr = new XMLHttpRequest(); // creating XML object

   //Opens the users.php file to read
   xhr.open("GET", "php/users.php", true);

    //Reads the data from signup.php
   xhr.onload = ()=>{
       if(xhr.readyState === XMLHttpRequest.DONE){
           if(xhr.status === 200){
            let data = xhr.response;
            if(!searchBar.classList.contains("active")){ //if there is no active i.e search, then add this function
                usersList.innerHTML = data;
            }
           }
       } 

   }
   xhr.send();

}, 500); //this function will run frequently after 500ms