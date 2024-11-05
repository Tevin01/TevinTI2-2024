const formContainer = document.getElementById("form");

formContainer.addEventListener("submit", function(event) {
    event.preventDefault();
checking();   

}); 

    function checking () {
      
        
        
        var firstName = document.getElementById("prenom").value;
        var secondName = document.getElementById("nom").value;
        var mail = document.getElementById("email").value;
        var msg = document.getElementById("message").value;

        if (firstName.length >= 2 && secondName.length >= 2 && msg.length >= 50 && /@/.test(mail) && /\./.test(mail)) {
            alert("Yes.");
        } else {
            alert("Nope.");
            return;
        }
        
        
        formContainer.submit(); 
    }

    