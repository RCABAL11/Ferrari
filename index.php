<?php include("connections/db_conn.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login form</title>
		
    </head>
    <style>
        body{
            background-image: url(img/slide-10.png);
            background-size: cover;
            font-family: 'Courier New', Courier, monospace;
        }
        .loginbox{
            width: 310px;
            height: 400px;
            background-color: transparent;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(5px);
            color: white;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 50px 30px;
            border-radius: 5px;
            
            }
            .loginbox label{
                margin: 0;
                padding: 0;
                font-weight: bold;
            }
            .loginbox input[type="text"], input[type="password"]
            {
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 40px;
                width: 100%;
                color: white;
                font-size: 16px;
                margin:5px;
                padding: 0;
                display: flex;
            }
            .loginbox input[type="button"], button
            {
                width: 100%;
                border: none;
                outline: none;
                height: 40px;
                background: #fb2525;
                color: white;
                font-size: 18px;
                font-weight: 700;
                border-radius: 20px;
                margin-top: 20px;
                margin-bottom: 20px;
                }
        .logo img{
            position: relative;
            top: -30px;
            left: 86px;
            width: 70px;
            height: 70px;
            padding-top: -10px;
        }
        .loginbox button{
            background-color: grey;
            color: black;
            box-shadow: 2px 2px 2px #000;
            color: #fff;
        }
        .loginbox button:hover{
            background-color: #000;
            color: #fff;
            box-shadow: 2px 2px 2px #fff;
            transition: 1s;
        }
        .loginbox p, label, button{
            text-shadow: 2px 2px 2px #000;
        }
        .loginbox p{
            font-size: 10px;
        }
        .sidelogo img{
            position: absolute;
            width: 80px;
            height: 80px;
            right: 8px;
            border-radius: 50%;
        }
    </style>
    <body>
        <div class="sidelogo">
            <img src="img/logo-3.png">
        </div>
        <div class="loginbox">
            <div class="logo">
                <img src="ferrari_logo.png">
            </div>
               <form action="/home.php" method="post">
                   <label>Username:</label>
                   <input type="text" name="username" placeholder="Enter Username" id="uname" required>
                   <label>Password:</label>
                   <input type="password" name="password" placeholder="Enter Password" id="upass" required>
                   <button type="button" onclick="enter()">Login</button>
				   <br>
				   <p>This account is EXCLUSIVE for REYMART CABAL only</p>
               </form>
        </div>
		<div>
		  
		</div>
        <!-- <script src="js/java.js"></script> -->
        <script>
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
        </script>
    </body>
</html>