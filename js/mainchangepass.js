function check(){
if(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/.test(newpass)){
    document.getElementById("error").style.color = "green";
    document.getElementById("error").innerHTML = "Password successfully changed!"
}
else{
    alert("Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters")
}
}