
$.getJSON(
    "../php/listEmails.php",
    function(data){
       
       data.forEach(element => {
         document.getElementById("content-data").innerHTML += `<div class="item">${element}</div>`;
       });
       
    }
);
