// Toggle Password Visibility
var state = false;
function toggleEye(){
    if(state){
        document.getElementById("psw").setAttribute("type", "password");
        document.getElementById("eye").style.color = "#7a797e";
        state = false;
    } else {
        document.getElementById("psw").setAttribute("type", "text");
        document.getElementById("eye").style.color = "#5887ef";
        state = true;
    }
}

function toggleEye2(){
    if(state){
        document.getElementById("re_pass").setAttribute("type", "password");
        document.getElementById("eye2").style.color = "#7a797e";
        state = false;
    } else {
        document.getElementById("re_pass").setAttribute("type", "text");
        document.getElementById("eye2").style.color = "#5887ef";
        state = true;
    }
    }

function toggleEye3(){
    if(state){
        document.getElementById("password").setAttribute("type", "password");
        document.getElementById("eye3").style.color = "#7a797e";
        state = false;
    } else {
        document.getElementById("password").setAttribute("type", "text");
        document.getElementById("eye3").style.color = "#5887ef";
        state = true;
    }
}

function cart_func(){
    alert("PLease Login to use this function!");
}

// Scroll to top button
function topfunction(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// var logoutBtn = document.getElementById("logoutBtn");
// var cicrle_logoutbtn = document.getElementById("cicrle_logoutbtn");
// var Account_Signin = document.getElementById("Account_Signin");
// var cartLink = document.getElementById("cartLink");

// // If User Logged In
// if (localStorage["LogInState"] === "LoggedIn") {
//     // display LOGOUT button
//     logoutBtn.setAttribute("style", "display: block;") &&
//     cicrle_logoutbtn.setAttribute("hidden");
//     // change SIGNIN button into ACCOUNT button
//     Account_Signin.innerHTML = "My Account";
//     Account_Signin.setAttribute("data-text", "MyAccount"); 
    
//     // if user trying to access "login/register/forgotPassword page" even though they have logged in
//     // navigate the user to my account page 
//     let theURL = window.location.href; 
//     if(
//         theURL.search("Login_box.html") !== -1 ||
//         theURL.search("register_acc.html") !== -1 ||
//         theURL.search("forgotPass.html") !== -1 
        
//     ){
//         let myaccountURL = theURL;
//         myaccountURL.replace("Login_box.html", "");
//         myaccountURL.replace("register_acc.html", "");
//         myaccountURL.replace("forgotPass.html", "") ;
//         myaccountURL = myaccountURL + "my-account.html";
//         window.location.replace(myaccountURL);
//     }
// }

// if (localStorage.LogInState === null || localStorage.LogInState === "notLoggedIn"){
//     cartLink.setAttribute("style","pointer-events: none; display: inline-block;");
// }

// function logout() {
//     localStorage["LogInState"] = "notLoggedIn";
// }