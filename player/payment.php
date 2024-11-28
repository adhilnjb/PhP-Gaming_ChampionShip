<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

   <!-- header-start -->
   <header>
    <div class="header-area ">
       <div id="sticky-header" class="main-header-area">
          <div class="container">
             <div class="row align-items-center">
                <div class="col-xl-10 col-lg-10">
                   <div class="main-menu d-none d-lg-block">
                      <nav>
                          <ul class="mein_menu_list" id="navigation">
                            <li><a onclick="history.back()">back</a></li>
                         </ul>
                      </nav> 
                    </div> 
                </div>
                <!--<div class="col-xl-2 col-lg-2 d-none d-lg-block">
                   <div class="custom_order">
                      <a href="#" class="boxed_btn_white">Custom Order</a>
                   </div>
                </div> -->
                <!-- <div class="col-12">
                   <div class="mobile_menu d-block d-lg-none"></div>
                </div>
                <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                   <a href="index.html">
                      <img src="img/logo.png" alt="">
                   </a>
                </div> -->
             </div>
          </div>
       </div>
    </div>
 </header>
 <!-- header-end -->

 <!-- breadcam_area_start -->
 <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
    <div class="breadcam_inner">
       <div class="breadcam_text">
          <center>
            <h3>Payment</h3>
          </center>
          <!-- <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br> face higher conduct
             standards especially in the workplace. That’s why it’s <br> crucial that, as women.</p> -->
       </div>
    </div>
 </div>
 <!-- breadcam_area_end -->

 <section class="p-4 p-md-4"  data-stellar-background-ratio="0.5">
		<div class="row d-flex justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-5">
			  <div class="card rounded-3">
				<div class="card-body p-4">
				  <div class="text-center mb-4">
                  <?php
						include '../connection.php';
                    // $id=$_SESSION['Loginid'];
                    $id=$_GET['id'];
                    $s="select * from game";
                  if ($result = mysqli_query($con,$s))
                  $row = mysqli_fetch_assoc($result);
                $amt=$row['fee'];
                $id=$row['game_id'];
                    ?>
					<p class="p-2 mb-0 bg-info text-light">Total Amount = <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
						<path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z"/>
					  </svg><?php echo $amt?>/-</p>			
					<h1 class="p-2 mb-0 bg-info text-light"><b>PAYMENT</b></h1>
				  </div>
				  <form action="book.php?id=<?php echo  $row['game_id'];?>" method="post">

					  <img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png" />
					
					  <img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png" />


					  <div class="form-check">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm3"
						  checked />
						<label class="form-check-label" for="checkoutForm3">
						  Credit card
						</label>
					  </div>
		  
					  <div class="form-check">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm4" />
						<label class="form-check-label" for="checkoutForm4">
						  Debit card
						</label>
					  </div>
		  
					  <div class="form-check mb-4">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm5" />
						<label class="form-check-label" for="checkoutForm5">
						  Paypal
						</label>
					  </div>
		  
		
					<div class="form-outline mb-4">
					  <input type="text" id="formControlLgXsd" name="name" class="form-control form-control-lg"  required/>
					  <label class="form-label" for="formControlLgXsd">Cardholder's Name</label>
	

					<div class="row mb-4">
					  <div class="col-7">
						<div class="form-outline">
						  <input type="text" id="formControlLgXM" name="number" class="form-control form-control-lg" required pattern="[0-9]{16}"/>
						  <label class="form-label" for="formControlLgXM">Card Number</label>
						</div>
					  </div>

					  <div class="col-3">
						<div class="form-outline">
						  <input type="text" id="formControlLgExpk" name="date" class="form-control form-control-lg"  required/>
						  <label class="form-label" for="formControlLgExpk">Expire</label>
						</div>
					  </div>

					  <div class="col-2">
						<div class="form-outline">
						  <input type="password" id="formControlLgcvv" name="cvv" class="form-control form-control-lg" required pattern="[0-9]{3}"/>
						  <label class="form-label" for="formControlLgcvv">CVV</label>
						</div>
					  </div>
					</div>
		
					<button type="Submit" class="btn btn-success btn-lg btn-block">Make Payment</button>
				  </form>
                  <br>
                  <a href="index.php"><button class="btn btn-danger btn-lg btn-block">Cancel</button></a>

				</div>
			  </div>
			</div>
		  </div>
	</section>

    <!-- footer-end -->
        
        <!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
    
        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>
    
        <script src="js/main.js"></script>
    
    </body>
    
    </html>
