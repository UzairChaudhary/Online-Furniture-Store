
	var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
	const patterns ={
        firstName : /[a-zA-Z]{3,9}/,
        lastName : /[a-zA-Z]{3,9}/,
		username : /[a-zA-Z]([0-9a-zA-Z]){5,17}/,
		email: /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{1,5})$/,
		tel: /[0-9]{11}/
	}
    let button = document.getElementById('submitButton');
    button.onclick = function validate(event){
        let res = true;
        var fname = document.getElementById("fname").value;
        console.log(patterns.firstName.test(fname));
        if (patterns.firstName.test(fname)) {
            var msg="first name matches";
            document.getElementById("ferror").innerHTML=msg;
            document.getElementById("ferror").style.color = "lightgreen";
        }
        else if (fname.length == 0) {
            var msg="first Name cant be empty";
            document.getElementById("ferror").innerHTML=msg;
            document.getElementById("ferror").style.color = "darkred";
            res = false;
        }
        else{
            var msg="first Name should be of atleast 3 to 8 characters";
            document.getElementById("ferror").innerHTML=msg;
            document.getElementById("ferror").style.color = "darkred";
            res = false;
        }
        var lname = document.getElementById("lname").value;
        if (patterns.lastName.test(lname)) {
            var msg="last Name matches";
            document.getElementById("lerror").innerHTML=msg;
            document.getElementById("lerror").style.color = "lightgreen";
        }
        else if (lname.length == 0) {
            var msg="last Name cant be empty";
            document.getElementById("lerror").innerHTML=msg;
            document.getElementById("lerror").style.color = "darkred";
            res = false;
        }
        else{
            var msg="last Name should be of atleast 3 to 8 characters";
            document.getElementById("lerror").innerHTML=msg;
            document.getElementById("lerror").style.color = "darkred";
            res = false;
        }
        var uName = document.getElementById("username").value;
        console.log(uName);
        console.log(patterns.username);
        if (patterns.username.test(uName)) {
            var msg="User Name is Valid";
            document.getElementById("UserNameError").innerHTML=msg;
            document.getElementById("UserNameError").style.color = "lightgreen";
            console.log("Valid");
        }
        else{
            var msg="User Name should contain atleast 6-16 characters";
            document.getElementById("UserNameError").innerHTML=msg;
            document.getElementById("UserNameError").style.color = "darkred";
            res = false;
        }
        var email1 = document.getElementById("email").value;
        if (patterns.email.test(email1)) {
            var msg="Email is matched";
            document.getElementById("EmailError").innerHTML=msg;
            document.getElementById("EmailError").style.color = "lightgreen";
            console.log("Valid");
        }
        else{
            var msg="Email is not valid";
            document.getElementById("EmailError").innerHTML=msg;
            document.getElementById("EmailError").style.color = "darkred";
            res = false;
        }
        var phone=document.getElementById("phone").value;
        console.log(phone);
        if (patterns.tel.test(phone)){
                    var msg="Phone number is valid";
                    document.getElementById("phoneerror").innerHTML=msg;
                    document.getElementById("phoneerror").style.color = "lightgreen";
        }
        else if(phone==""){
                    var msg="empty";
                    document.getElementById("phoneerror").innerHTML=msg;
                    document.getElementById("phoneerror").style.color = "#D3D3D3";
                    res = false;
                }
        else{
                    var msg="Enter valid Number";
                    
                    document.getElementById("phoneerror").innerHTML=msg;
                    document.getElementById("phoneerror").style.color ="darkred";
                    res = false;
        }
        var pw = document.getElementById("password").value;
        var cpw = document.getElementById("confirm_password").value;
        if (pw.length <= 4) {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Password cannot be empty or less than 4 characters';
            res = false;
        }
        if (pw.normalize() !== cpw.normalize()) {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matching';
            res = false;
        }
        if (!(res))
            event.preventDefault();
    }
	
