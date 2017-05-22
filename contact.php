<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Contacts:Online BookStore</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<ul>
			<li><span aria-hidden="true"></span>
				<img src="images/Picture1.png" alt=" " width="60" height="50"/>
				Fast and Easy Book Shopping</li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.php"><img src="images/logo3.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form>
				<div class="search">
					<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="section_room">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">Computer Science<a href="purchase.php"></option>
						<option value="AX">Electrical & Electr.<a href="purchase.php"></option>
						<option value="AX">Electronics & Comm.<a href="purchase.php"></option>
						<option value="AX">Mechanical Engg.<a href="purchase.php"></option>
						<option value="AX">Biotech Engg.<a href="purchase.php"></option>
						<option value="AX">Civil Engg.<a href="purchase.php"></option>
						<option value="AX">BBM/MBA/BHEM<a href="purchase.php"></option>
						<option value="AX">Others<a href="purchase.php"></option>
					</select>
				</div>
				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
					
				</li>
				<li><a class="fb" href="https://www.facebook.com/pes.univ"></a></li>
				<li><a class="twi" href="https://twitter.com/pesuniversity"></a></li>
				<li><a class="insta" href="https://www.instagram.com/pesuniversity/"></a></li>
				<li><a class="you" href="https://www.youtube.com/user/PESUniversity"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item "><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#upload">Upload </a>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Purchase <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="purchase.php">Computer Science</a></li>
											<li><a href="purchase.php">Electrical & Electr.</a></li>
											<li><a href="purchase.php">Electronics & Comm.</a></li>
											<li><a href="purchase.php">Mechanical Engg.</a></li>
											<li><a href="purchase.php">Biotech Engg.</a></li>
											<li><a href="purchase.php">Civil Engg.</a></li>
											<li><a href="purchase.php">BBM/MBA/BHEM</a></li>
											<li><a href="purchase.php">Others</a></li>
										</ul>
									</div>
									
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="purchase.php"><img src="images/woo.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="#" class="use1" data-toggle="modal" data-target="#myModal4">LogIn / Register</a></li>
					<li class=" menu__item menu__item--current"><a class="menu__link" href="contact.php">contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
	<div class="top_nav_right">
			<div class="cart box_1">
						<a href="checkout.php">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Contact</h3>
	</div>
</div>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-grids">
				<div class="col-md-4 contact-grid text-center animated wow slideInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						<h4>Address</h4>
						<p>PES University,100 Feet Ring Road,BSK III stage,<span>Bangalore -560085</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInUp" data-wow-delay=".5s">
					<div class="contact-grid2">
						<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						<h4>Call Us</h4>
						<p>8026721983<span>8026722108</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInRight" data-wow-delay=".5s">
					<div class="contact-grid3">
						<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						<h4>Email</h4>
						<p><a href="mailto:admissions@pes.edu">admissions@pes.edu</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="map wow fadeInDown animated" data-wow-delay=".5s">
				<h3 class="tittle">View On Map</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15554.346573837704!2d77.5343263!3d12.9342678!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x694d74f6ac640acf!2sPES+University!5e0!3m2!1sen!2sin!4v1440762252643"></iframe>
			</div>
			<h3 class="tittle">Contact Form</h3>
			<form>
				<div class="contact-form2">
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit" >
				</div>
			</form>
		</div>
	</div>
	
<!-- //contact -->

<!-- //product-nav -->
<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
			
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
			
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.php"><img src="images/logo3.jpg" alt=" " /></a></h2>
			
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft" align="right">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
				</div>
				
				<div class="col-md-4 sign-gd-two" align="right">
					<h4>Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : PES University,100 Feet Ring Road,BSK III stage,<span>Bangalore -560085.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:admissions@pes.edu">admissions@pes.edu</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : 8026721983, 8026722108</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right"></p>
</div>
<!-- //footer -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Register</h3>
										<form>

											<div class="sign-up">
												<h4>Name <span style="color:red;">*</span>:</h4>
												<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Mobile Number <span style="color:red;">*</span>:</h4>
												<input type="text" value="" maxlength="10" pattern="[0-9]{10}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Email <span style="color:red;">*</span>:</h4>
												<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Password <span style="color:red;">*</span>:</h4>
												<input type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Confirm Password <span style="color:red;">*</span>:</h4>
												<input type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="required">	
											</div>

											<div class="sign-up">
												<h4>Profession <span style="color:red;">*</span>:</h4>
												<br/>
												<select id="country" onchange="change_country(this.value)" class="frm-field required">
												<option value="null">Student</option>
												<option value="AX">Faculty</option>
												</select>	
											</div>
											<br/>				
											<div class="sign-up">
											<h4>Department <span style="color:red;">*</span>:</h4>
											<br/>
											<select id="country" onchange="change_country(this.value)" class="frm-field required">
											<option value="null">Computer Science</option>
											<option value="AX">Electrical & Electr.</option>
											<option value="AX">Electronics & Comm.</option>
											<option value="AX">Mechanical Engg.</option>
											<option value="AX">Biotech Engg.</option>
											<option value="AX">Civil Engg.</option>
											<option value="AX">BBM/MBA/BHEM</option>
											<option value="AX">Others</option>
											</select>	
											</div>
											<br/>				
											<div class="sign-up">
												<input type="submit" value="Add me!!" >
											</div>								
										</form>
									</div>
									<div class="login-right">
										<h3>Sign In</h3>
										<form>
											<div class="sign-in">
												<h4>Email <span style="color:red;">*</span>:</h4>
												<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password <span style="color:red;">*</span>:</h4>
												<input type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="Let's Go!!" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<!--upload-->
			<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>BOOK DETAILS</h3>
										<form method="POST" action="Upload_db.php">
											<fieldset class="form-group">
    											<label for="exampleInputFile">Book's Image:</label>
    											<input type="file" class="form-control-file" id="exampleInputFile">
    											<small class="text-muted"></small>
  											</fieldset>
  											<br>
											<div class="sign-up">
												<h4>Book Name<span style="color:red;">*</span>:</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Author and Edition<span style="color:red;">*</span>:</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Months <span style="color:red;">*</span>:</h4>
												<input type="number" min="1" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<br>

											<div class="sign-up">
												<h4>Price <span style="color:red;">*</span>:</h4>
												<input type="text" min="10" maxlength="4" pattern="[0-9]+"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<br>
											
											<div class="sign-in">
												<a href="#"><input type="submit" value="UPLOAD" ></a>
											</div>
										</form>
									</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>CONTACT DETAILS</h3>
										<form method="POST" action="Contact.php">
											
											<div class="sign-up">
												<h4>Name<span style="color:red;">*</span>:</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Contact No.<span style="color:red;">*</span>:</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Email <span style="color:red;">*</span>:</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<div class="sign-up">
												<label for="address">Enter your address</label>
            									<textarea name="address" id="address" rows=3 cols=38 onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
            									</textarea>
											</div>
											<br>
											<div class="sign-up">
												<h4>Category <span style="color:red;">*</span>:</h4>
												<select id="cost" class="frm-field required">
												<option value="null">Free!!<a href="purchase.php"></option>
												<option value="AX">Rent <a href="purchase.php"></option>
												<option value="AX">Sell<a href="purchase.php"></option>
												</select>		
											</div>
											
											<div class="sign-up">
												<a href="#" data-toggle="modal" data-target="#upload"><input type="submit" value="SUBMIT" >
											</div>
									<div class="clearfix"></div>

								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!--//upload-->



</body>
</html>
