$('form.login100-form').submit(function(event) {
    event.preventDefault();
	var email1 = $(this).serializeArray()[0].value;
    console.log(email1);
    var pass3 = $(this).serializeArray()[1].value;
	console.log(pass3);

    function loopid(){
    $.get("http://localhost:15743/api/accounts")
    .done(function(result)   {
        console.log(result);
        for(var i=0;i<result.length;i++){
        if(email1 == result[i].email && pass3 == result[i].password){
            document.getElementById("error").style.color = "green";
            document.getElementById("error").innerHTML = "Successfully registered!";
        }
        else{
            document.getElementById("error").style.color = "red";
            document.getElementById("error").innerHTML = "Email or password is incorrect or does not match";
        }
       }
    })
    }
});
