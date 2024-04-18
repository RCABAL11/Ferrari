function enter(){
	var uname=document.getElementById("uname").value;
	var upass=document.getElementById("upass").value;
	
	if(uname == "cabalpogi" && upass == "143"){
		var result = confirm("Successfully Login");
		if(result == true) {
	    window.location.href="home.php";
		}
		
	}
	if(uname != "cabalpogi" && upass == "143"){
		alert("Incorrect Username");
	}
	if(uname == "cabalpogi" && upass != "143"){
		alert("Incorrect Password")
	}
}

function logout(){
	var result = confirm("Do you want to continue?");
	if(result == false) {
		 event.preventDefault();
	}
	else{
		
		window.location.href="index.php";
	}
}


function message(){
		var fname=document.getElementById("fname").value;
		var lname=document.getElementById("lname").value;
		var email=document.getElementById("email").value;
		var mobile=document.getElementById("mobile").value;
		var msg=document.getElementById("msg").value;
		
		if(fname === "" || lname === "" || email === "" || mobile === "" || msg === ""){
			
		alert('Fields Can`t be Empty!');
		}
		
		else{
			alert('Your Message is Successfully Sent!');
		}
	}
	  