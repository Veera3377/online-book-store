<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<html>
<head>
<title>Online Book Store</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pignose css -->
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
					<option value="AX">Electrical and Electr.<a href="purchase.php"></option>
						<option value="AX">Electronics and Comm.<a href="purchase.php"></option>
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
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a class="dropdown-toggle menu__link" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#upload">Upload </a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="clearfix"></div>
								</div>
							</ul>
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
											<li><a href="purchase.php">Biotechnology Engg.</a></li>
											<li><a href="purchase.php">Civil Engg.</a></li>
											<li><a href="purchase.php">BBM/MBA/BHEM</a></li>
											<li><a href="purchase.php">Others</a></li>
										</ul>
									</div>
								
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<img src="images/woo.jpg" alt=" "/>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="#" class="use1" data-toggle="modal" data-target="#myModal4">LogIn / Register</a></li>
					<li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
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
<div class="banner-grid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="images/ba1.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/ba2.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/ba3.jpg" alt="Dummy Image" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
					<ul class="script-group">
						<li><div class="inner-script"><img class="img-responsive" src="images/baa1.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="images/baa2.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="images/baa3.jpg" alt="Dummy Image" /></div></li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="images/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="images/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="images/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="images/btn_next.png" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>
<!-- //banner -->
<!-- content -->
<div class="new_arrivals">
	<div class="container">
		<h3><span>Book </span>Store</h3>
		<p>Books give a soul to the universe,wings to the mind,flight to the imagination and life to everything..</p>
		<div class="new_grids">
			<div class="col-md-4 new-gd-left">
				<img src="images/wed1.jpg" alt=" " />
				<div class="wed-brand simpleCart_shelfItem">
					<h4><B>Your own BookStore</B></h4>
					<br>
					<p>Rarely available books</p>
					
				</div>
			</div>
			<div class="col-md-4 new-gd-middle">
				<div class="new-levis">
					
						<img src="images/levis1.png" alt=" " />
					
					<div class="mid-text">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="new-levis">
					<div class="mid-text">
					</div>
					
						<img src="images/dig.jpg" alt=" "/>
					
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 new-gd-left">
				<img src="images/wed2.jpg" alt=" " />
				<div class="wed-brandtwo simpleCart_shelfItem">
					<h4>Easily available</h4>
					<p>books</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //content -->

<!-- content-bottom -->

<div class="content-bottom">
	<div class="col-md-7 content-lgrid">
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="images/bg.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
					
									<span class="separator"></span>
									<p><span class="item_price">IF YOU JUDGE A BOOK BY ITS COVER, YOU MIGHT MISS AN AMAZING STORY</span></p>
									<span class="separator"></span>
									
						</div>
					</div>
			</div>
		</div>
		<div class="col-sm-6 content-img-right">
			<h3>Rare Books<span>Easily </span>Available For You</h3>
		</div>
		
		<div class="col-sm-6 content-img-right">
			<h3>Special Editioned <span>Books</span> </h3>
		</div>
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="images/bg3.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
					
							<span class="separator"></span>
							<p><span class="item_price">A BOOK IS A DEVICE TO IGNITE THE IMAGINATION</span></p>
							<span class="separator"></span>
						
						</div>
					</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-5 content-rgrid text-center">
		<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="images/bg2.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
			
									<span class="separator"></span>
									<p><span class="item_price">THE WORLD IS A BOOK AND THOSE WHO DONOT TRAVEL READ ONLY A PAGE</span></p>
									<span class="separator"></span>
								
						</div>
					</div>
			</div>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //content-bottom -->
<!-- product-nav -->

<div class="product-easy">
	<div class="container">
		
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Collections</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Rented Books</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Free Books</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a1.png" alt="" class="pro-image-front">
									<img src="images/a1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Unix</a></h4>
									<div class="info-product-price">
										<span class="item_price">245</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a8.png" alt="" class="pro-image-front">
									<img src="images/a8.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Micro CMOS Design</a></h4>
									<div class="info-product-price">
										<span class="item_price">300</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a3.png" alt="" class="pro-image-front">
									<img src="images/a3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Software Engineering</a></h4>
									<div class="info-product-price">
										<span class="item_price">330</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a4.png" alt="" class="pro-image-front">
									<img src="images/a4.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Unix Programming</a></h4>
									<div class="info-product-price">
										<span class="item_price">335</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a5.png" alt="" class="pro-image-front">
									<img src="images/a5.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Internet</a></h4>
									<div class="info-product-price">
										<span class="item_price">400</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a6.png" alt="" class="pro-image-front">
									<img src="images/a6.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Computer Networking</a></h4>
									<div class="info-product-price">
										<span class="item_price">2000</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a7.png" alt="" class="pro-image-front">
									<img src="images/a7.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Mechanical Measurements</a></h4>
									<div class="info-product-price">
										<span class="item_price">550</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a2.png" alt="" class="pro-image-front">
									<img src="images/a2.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Digital Design</a></h4>
									<div class="info-product-price">
										<span class="item_price">400</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/g1.png" alt="" class="pro-image-front">
									<img src="images/g1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Computer Networking</a></h4>
									<div class="info-product-price">
										<span class="item_price">500</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/g2.png" alt="" class="pro-image-front">
									<img src="images/g2.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Mechanical Measurements</a></h4>
									<div class="info-product-price">
										<span class="item_price">450</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/g3.png" alt="" class="pro-image-front">
									<img src="images/g3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Micro CMOS Design</a></h4>
									<div class="info-product-price">
										<span class="item_price">455</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ep1.png" alt="" class="pro-image-front">
									<img src="images/ep1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Radar and Sonar</a></h4>
									<div class="info-product-price">
										<span class="item_price">459</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mw1.png" alt="" class="pro-image-front">
									<img src="images/mw1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Digital design</a></h4>
									<div class="info-product-price">
										<span class="item_price">600</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/g2.png" alt="" class="pro-image-front">
									<img src="images/g2.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Mechanical Measurements</a></h4>
									<div class="info-product-price">
										<span class="item_price">650</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ep4.png" alt="" class="pro-image-front">
									<img src="images/ep4.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Engineering Mechanics</a></h4>
									<div class="info-product-price">
										<span class="item_price">700</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mw3.png" alt="" class="pro-image-front">
									<img src="images/mw3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Computer Architecture</a></h4>
									<div class="info-product-price">
										<span class="item_price">550</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ep2.png" alt="" class="pro-image-front">
									<img src="images/ep2.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Software Engineering</a></h4>
									<div class="info-product-price">
										<span class="item_price">500</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a1.png" alt="" class="pro-image-front">
									<img src="images/a1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Cryptography</a></h4>
									<div class="info-product-price">
										<span class="item_price">550</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						
						<div class="clearfix"></div>						
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/ep4.png" alt="" class="pro-image-front">
									<img src="images/ep4.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Engineering Mecahnics</a></h4>
									<div class="info-product-price">
										<span class="item_price">300</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/g2.png" alt="" class="pro-image-front">
									<img src="images/g2.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html"> Mechanical Measurements</a></h4>
									<div class="info-product-price">
										<span class="item_price">400</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/g3.png" alt="" class="pro-image-front">
									<img src="images/g3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Micro CMOS Design</a></h4>
									<div class="info-product-price">
										<span class="item_price">300</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mw2.png" alt="" class="pro-image-front">
									<img src="images/mw2.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Internet</a></h4>
									<div class="info-product-price">
										<span class="item_price">450</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a4.png" alt="" class="pro-image-front">
									<img src="images/a4.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Unix programming</a></h4>
									<div class="info-product-price">
										<span class="item_price">500</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a6.png" alt="" class="pro-image-front">
									<img src="images/a6.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Computer Networking</a></h4>
									<div class="info-product-price">
										<span class="item_price">2000</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="clearfix"></div>		
					</div>	
				</div>	
			</div>
		</div>
	</div>
</div>
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
				<h4>CONTACT SELLER</h4>
			
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
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
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
		<p class="copy-right">&copy 2016 BookStore. All rights reserved | Design by Shruti.K, Tuhina, Sushma.S, Suhas.N.S</p>
	</div>
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
										<form action="signup-script.php" method="POST">
											<div class="sign-up">
												<h4>Name <span style="color:red;">*</span>:</h4>
												<input type="text" name="name" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Mobile Number <span style="color:red;">*</span>:</h4>
												<input type="text" name="contact" value="" maxlength="10" pattern="[0-9]{10}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Email <span style="color:red;">*</span>:</h4>
												<input type="text" name="email" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Password <span style="color:red;">*</span>:</h4>
												<input type="password" name="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Confirm Password <span style="color:red;">*</span>:</h4>
												<input type="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="required">	
											</div>

											<div class="sign-up">
												<h4>Profession <span style="color:red;">*</span>:</h4>
												<br/>
												<select id="country" onchange="change_country(this.value)" class="frm-field required" name="profession">
												<option value="Student">Student</option>
												<option value="Faculty">Faculty</option>
												</select>	
											</div>
											<br/>				
											<div class="sign-up">
											<h4>Department <span style="color:red;">*</span>:</h4>
											<br/>
											<select id="country" onchange="change_country(this.value)" name="department" class="frm-field required">
											<option  value="Computer Science">Computer Science</option>
											<option  value="Electrical & Electr.">Electrical & Electr.</option>
											<option value="Electronics & Comm.">Electronics & Comm.</option>
											<option value="Mechanical Engg.">Mechanical Engg.</option>
											<option value="Biotech Engg.">Biotech Engg.</option>
											<option value="Civil Engg.">Civil Engg.</option>
											<option value="BBM/MBA/BHEM">BBM/MBA/BHEM</option>
											<option value="Others">Others</option>
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
										<form action="login-script.php" method="POST">
											<div class="sign-in">
												<h4>Email <span style="color:red;">*</span>:</h4>
												<input type="text" name="email" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password <span style="color:red;">*</span>:</h4>
												<input type="password" name="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
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
    										<h4 for="exampleInputFile">Book's Image<span style="color:red;">*</span>:</h4>
    											<input type="file" name="b_image" class="form-control-file" id="exampleInputFile">
  											</fieldset>

											<div class="sign-up">
												<h4>Book Name<span style="color:red;">*</span>:</h4>
												<input type="text" value="" name="b_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Author and Edition<span style="color:red;">*</span>:</h4>
												<input type="text" value="" name="b_aut" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Months <span style="color:red;">*</span>:</h4>
												<input type="number" min="1" name="b_months" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<span> </span>
											<div class="sign-up">
												<h4>Price <span style="color:red;">*</span>:</h4>
												<input type="text" min="10" name="b_price" maxlength="4" pattern="[0-9]+"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>

											<div class="sign-up">
												<h4>Department <span style="color:red;">*</span>:</h4>
												<select id="cost" name="department" class="frm-field required">
												<option value="null">Computer Science</option>
											<option value="AX">Electrical and Electr.</option>
												<option value="AX">Electronics and Comm.</option>
												<option value="AX">Mechanical Engg.</option>
												<option value="AX">Biotech Engg.</option>
												<option value="AX">Civil Engg.</option>
												<option value="AX">BBM/MBA/BHEM</option>
												<option value="AX">Others</option>
												</select>		
											</div>
											<div class="sign-in">
												<a href="#" data-toggle="modal" data-target="#upload"><input type="button" value="UPLOAD" ></a>
											</div>
										</form>
									</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>CONTACT DETAILS</h3>
										<form method="POST" action="Upload_db.php">
											
											<div class="sign-up">
												<h4>Name<span style="color:red;">*</span>:</h4>
												<input type="text" value="" name="c_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Contact No.<span style="color:red;">*</span>:</h4>
												<input type="text" value="" name="c_contact" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Email <span style="color:red;">*</span>:</h4>
												<input type="text" name="c_mail" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">	
											</div>
											<div class="sign-up">
												<label for="address">Enter your address</label>
            									<textarea name="c_address" id="address" rows=3 cols=38 onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
            									</textarea>
											</div>
											<div class="sign-up">
												<h4>Category <span style="color:red;">*</span>:</h4>
												<select id="cost" name="category" class="frm-field required">
												<option value="null">Free!!</option>
												<option value="AX">Rent </option>
												<option value="AX">Sell</option>
												</select>		
											</div>
											
											<div class="sign-up">
												<a href="Upload_db.php"><input type="button" value="SUBMIT"></a>  <!--in style sheet the type is changed from submit to button for time being later change back when needed-->
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
