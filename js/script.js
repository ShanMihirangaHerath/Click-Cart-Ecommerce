function register(){
    var fname = document.getElementById("f_name");
    var lname = document.getElementById("l_name");
    var email = document.getElementById("email");
    var pass = document.getElementById("password");
    var c_pass = document.getElementById("conf_password");

    // Check if password and confirmation password match
    if(pass.value !== c_pass.value){
        alert("Passwords do not match!");
        return;
    }

    var dataForm = new FormData();
    dataForm.append("f_name", fname.value);
    dataForm.append("l_name", lname.value);
    dataForm.append("email", email.value);
    dataForm.append("password", pass.value);
    dataForm.append("conf_password", c_pass.value);

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            var response = xhr.responseText;
            if(response == "Registration Successful !"){
                alert("Registration Successful");
                window.location = "login.php";
            } else {
                alert(response);
            }
        }
    }
    xhr.open("POST", "registerProcess.php", true);
    xhr.send(dataForm);
}

function login(){
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var remember = document.getElementById("rememberme");

    var dataForm = new FormData();
    dataForm.append("email", email.value);
    dataForm.append("password", password.value);
    dataForm.append("rememberme", remember.value);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            var response = xhr.responseText;
            if(response == "Login Successful !"){
                alert("Login Successful");
                window.location = "index.php";
            } else {
                alert(response);
            }
    
        }
    }
    xhr.open("POST", "loginProcess.php", true);
    xhr.send(dataForm);
}

function signout(){
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            var response = xhr.responseText;
            if(response == "Signout Successful !"){
                alert("Signout Successful");
                window.location = "login.php";
            } else {
                alert(response);
            }
        }
    }
    xhr.open("GET", "signoutProcess.php", true);
    xhr.send();
}