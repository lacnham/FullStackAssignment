var email = document.getElementById("email");
var password = document.getElementById("password");
    
function check(){
    if(password.value == "password"){
        // alert("Login successfully")
        location.href = "my-account.html";
        return false;
    } else {
        alert("Wrong password!");
        location.reload();
    }
}


var displayemail = document.getElementById("DisplayEmail");
function displayInputEmail(){
    const emailvalue = document.getElementById("email").value;
    displayemail.setAttribute("value", "emailvalue");
}
