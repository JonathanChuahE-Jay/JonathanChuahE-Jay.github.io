//profile

function checkPassword(){
    let pass = document.getElementById("password");
    let confirm_pass = document.getElementById("confirmPassword");
    let profileSubmit = document.getElementById("profile_submit");
    let message = document.getElementById("passwordMatchMessage");
    if(pass.value === "" || confirm_pass.value === ""){
        pass.style.border = "1px solid red";
        confirm_pass.style.border = "1px solid red";
        profileSubmit.style.cursor = "not-allowed";
        profileSubmit.disabled = true;
        message.textContent = "Passwords cant be left empty";
    }else{
        if(pass.value!=confirm_pass.value){
            pass.style.border = "1px solid red";
            confirm_pass.style.border = "1px solid red";
            profileSubmit.style.cursor = "not-allowed";
            profileSubmit.disabled = true;
            message.textContent = "Passwords do not match";
        }else{
            pass.style.border = "1px solid green";
            confirm_pass.style.border = "1px solid green";
            profileSubmit.style.cursor = "pointer";
            profileSubmit.disabled = false;
            message.textContent = "";
        }
    }
}
function startPassword(){
    let pass = document.getElementById("password");
    let confirm_pass = document.getElementById("confirmPassword");
    let profileSubmit = document.getElementById("profile_submit");
    let message = document.getElementById("passwordMatchMessage");
    let oldPassword = document.getElementById("oldPassword");
    if(oldPassword.value === ""){
        pass.disabled=true;
        confirm_pass.disabled= true;
        confirm_pass.style.cursor ="not-allowed";
        pass.style.cursor ="not-allowed";
        message.textContent = "";
        profileSubmit.disabled=false;
        pass.style.border = "1px solid black";
        confirm_pass.style.border = "1px solid black";
        profileSubmit.style.cursor="pointer";
    }else{
        pass.style.cursor ="text";
        confirm_pass.style.cursor = "text";
        pass.disabled=false;
        confirm_pass.disabled= false;
        checkPassword();
    }
    
}