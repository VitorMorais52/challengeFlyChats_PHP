
function recebeEmail(){
    var email = document.getElementById("inputEmail").value;

    $.ajax({
        url: "./src/php/script.php",
        type: "POST",
        data: {email: email},  
    
    }).done(function(response) {
        console.log(response);
        if(response == false){
            alert("Email inválido ou já cadastrado");
        }
        else{
            alert("Cadastrado com sucesso");
        }
    
    }).fail(function(jqXHR, textStatus ) {
        console.log("Request failed: " + textStatus);
       
    
    }).always(function() {
        
    });
}


