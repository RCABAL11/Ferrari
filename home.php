
<?php include("connections/db_conn.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
	  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/fixed.css">

    <style>
		 body{
        color: white;
        font-family: 'Courier New', Courier, monospace;
        background-color: #112e42;
    }
    .narrow{
        width: 75%;
        margin: 0 auto;
        padding-top: 2rem;
        }
    .btn-md {
        border-width: medium;
        border-radius: 0;
        padding: .6rem 1.1rem;
        text-transform: uppercase;
        margin: 1rem;
        }
        .carousel-item {
            height: 100vh;
            background-size: cover;
        }
        section{
            min-height: 100vh;
            width: 400vh;
        }
        .section{
            min-width: 100vw;
            min-height: 100vh;
            background-color: var(--bg-color);
            overflow-y:hidden;
        }
        .section1{
            background-color: #112e42;
        }
		.carousel-caption{
			top: 30%;
			text-align: center;
			align-items: center;
			justify-content: center;
		}
		.carousel-caption h3{
			font-size: 30px;
			text-shadow: 2px 2px 2px #000;
			
		}
		.carousel-caption h1{
			font-size: 60px;
			font-weight: 700;
			letter-spacing: 5px;
			text-shadow: 2px 2px 2px #000;
		}
		.carousel-caption h4{
			font-size: 16px;
			letter-spacing: 3px;
			text-shadow: 2px 2px 2px #000;
		}
		.carousel-caption a{
			box-shadow: 4px 5px 5px 2px #000;
		}
		.contentab {
		    padding: 20px;
		}
		.icons a{
			position: relative;
			top: 50px;
			color: #fff;
			font-size: 30px;
		}

    </style>
</head>
<body>
<?php include 'navbar/navbar.php';?>
<!-- Home Section -->
<div id="home">

    <!-- Slider Image -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url('img/slide-9.png');">
                <div class="carousel-caption text-center">
                    <h3>Welcome to</h3>
                    <h1>Ferrari</h1>
                    <h4>Website</h4>
                    <a href="dashboard.php" class="btn btn-outline-light btn-lg">Get Started</a>
				</div>
            </div>  
					<div class="carousel-item" style="background-image: url('img/slide-7.png');"></div>  
					<div class="carousel-item" style="background-image: url('img/slide-10 .png');"></div>  			
        </div> <!-- End of inner -->
		<a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		</a>
		<a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</a>
    </div>
</div>

<section class="section">
<!--About -->
<div class="about" id="about">
    <div>
	    <img src="ferrari_logo.png">
	</div>
    <div class="contentab">
        <h1>About Us</h1>
        <p>Born of the spirit of racing, Ferrari epitomises the power of a lifelong passion and the beauty of limitless human achievement, creating timeless icons for a changing world</p>
		<div class="icons">
			<a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
			<a href="https://www.twitter.com/"><i class="fa-brands fa-twitter"></i></a>
			<a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
		</div>
	</div>
	
</div>
<!--End-->
</section>

<!--contact -->
<section class="section1">

<div class="" id="contact">
	<div class="contactContent">
	   <div class="box">
		<!-- for form box -->
		   <div class="contact form">
		     <h3>Send a Message</h3>
			   <form>
			     <div class="formBox">
				   <div class="row50">
				     <div class="inputBox">
					   <span>First Name</span>
					     <input type="text" id="fname" placeholder="Reymart">
					       </div>
					        <div class="inputBox">
					      <span>Last Name</span>
					    <input type="text" id="lname" placeholder="Cabal">
					 </div>
				   </div>
				<div class="row50">
				   <div class="inputBox">
					  <span>Email</span>
					    <input type="text" id="email" placeholder="example21@email.com">
				  	      </div>
					        <div class="inputBox">
					          <span>Mobile</span>
					        <input type="text" id="mobile" placeholder="+639 48 234 2343">
					      </div>
				        </div> 
				      <div class="row100">
				    <div class="inputBox">
					  <span>Message</span>
					    <textarea id="msg" placeholder="Write your message here..."></textarea>
					      </div>
				            </div>
				              <div class="row100">
				                <div class="inputBox">
					              <input type="submit"  onclick="message()" id="send" value="Send">
					            </div>
					          <div class="message">
					        <div class="success" id="success"> 
						  </div>
						<div class="failed" id="failed">
						 Fields Can't be Empty!
					</div>
			     </div>	  
			   </div>
			 </div>
		   </form>
		  </div>
		 </div>
		  <!-- for info box -->
		  <div class="contact info">
		     <h3>Contact Info</h3>
			    <div class="infoBox">
			      <div>
				     <span><ion-icon name="location-outline"></ion-icon></span>
				        <p>Via Abetone Inferiore n. 4, I-41053 <br>Maranello (MO)</p>
				           </div>
				              <div>
				                <span><ion-icon name="mail-outline"></ion-icon></span>
				                <a href="mailto:reymartcabal46gmail.com">info-ferrari@gmail.com</a>
				              </div>
				           <div>
				             <span><ion-icon name="call-outline"></ion-icon></span>
				             <a href="tel:+639566729906">+39 0536 949111</a>
				          </div>
			            </div>
		              </div>
		            <!-- for map box -->
		          <div class="contact map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2844.1633841091048!2d10.8626131760758!3d44.53228709513297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fe3a75a0699a7%3A0xb1a1e710282361ef!2sFerrari%20Factory!5e0!3m2!1sen!2sph!4v1713162256299!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		          </div>
		</div>
	 
	 
</div>
<!--End-->
</section>
<script>
	function logout(){
                var result = confirm("Do you want to continue?");
                if(result == false) {
                    event.preventDefault();
                }
                else{
                    
                    window.location.href="index.php";
                }
            }
</script>

<!-- Script Source -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v6.5.2/js/all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="java.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="contact.js"></script>
<!-- <script src="js/java.js"></script> -->
</body>
</html>