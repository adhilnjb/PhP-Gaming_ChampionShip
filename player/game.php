<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Game Warrior Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.html">
				<img src="img/logo.png" alt="">
			</a>
			<div class="user-panel">
				<a href="logout.php">Logout</a>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="index.html">Home</a></li>
					<!-- <li><a href="review.html">Games</a></li>
					<li><a href="categories.html">Blog</a></li>-->
					<!-- <li><a href="host_reg.php">Host Registration</a></li> -->
					<li><a href="game.php">My Games</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Latest news section -->
	<div class="latest-news-section">
		<!-- <div class="ln-title">User Registration</div> -->
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<!-- <div class="nt-item"><span class="new">new</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="strategy">strategy</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="racing">racing</span>Isum dolor sit amet, consectetur adipiscing elit. </div> -->
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<!-- Page info section -->
	<!-- <section class="page-info-section set-bg" data-setbg="img/page-top-bg/5.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white"> -->
						<!-- <h2>User Registration</h2> -->
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</p> -->
					<!-- </div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Page info section -->


	<!-- Page section -->
    <section class="intro">
  <div class="bg-image h-100" style="background-image: url('img/3.jpg'); background-repeat:no-repeat ;   background-attachment: fixed;  background-size: cover;">
                    <br><br>
    <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,.2);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card bg-dark shadow-2-strong">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-dark table-borderless mb-0">
                    <thead>
                      <tr>
                        <th scope="col">GAME NAME</th>
                        <th scope="col">GAME TYPE</th>
                        <th scope="col">DATE</th>
                        <th scope="col">NUMEBR OF PLAYERS</th>
                        <th scope="col">ROOM CODE</th>
                        <!-- <th>UPDATE</th> -->
                        <!-- <th scope="col">AGE</th>
                        <th scope="col">SALARY</th> -->
                    </thead>
                    <tbody>
                    <?php
                        include '../connection.php';
                        $l=$_SESSION['login_id'];
                            $s="select * from booking where player_id='$l'";
                            if ($result = mysqli_query($con,$s)) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $g=$row['game_id'];
                                    $m="select * from game where game_id='$g'";
                                    if ($n = mysqli_query($con,$m)) {
                                        while ($data = mysqli_fetch_assoc($n)) {
                        ?>
                      <tr>
                        <th><?php echo $data['game_name'] ?></th>
                        <td><?php echo $data['game_type'] ?></td>
                        <td><?php echo $data['date'] ?></td>
                        <td>Maximum <?php echo $data['players'] ?>&nbsp;</td>
                        <td>
                            <?php
                        $h="select * from game_code where game_id='$g'";
                                    if ($i = mysqli_query($con,$h)) {
                                        while ($j = mysqli_fetch_assoc($i)) {
                                            // echo "hi";
                                            ?>
                                            <?php echo $j['code'] ?><input type="hidden" style="color:#F3C313;background-color:#17202A" value="<?php echo $j['code'] ?>" id="myInput" readonly="readonly">

                                            <button  style="text-decoration:none;color:black; border-radius: 25px;background-color:#F3C313;padding: 5px 32px;margin: 5px 5px;text-decoration:no-decoration"  onclick="myFunction()" onmouseout="outFunc()">
                                            <span class="tooltiptext" id="myTooltip"></span>
                                            Copy code
                                            </button>
                                            <?php
                                        }}
                                            else { echo "Room code doesnt created yet! please wait.";}
                                            ?>
                                            <!-- <a type="submit"  style="text-decoration:none;color:black; border-radius: 25px;background-color:#F3C313;padding: 5px 32px;margin: 5px 5px;text-decoration:no-decoration"  href="view_booking.php?id=<?php //echo $data['game_id'];?>"><b>Players</b></a> -->
                        <!-- <td><a type="submit"  style="text-decoration:none;color:black; border-radius: 25px;background-color:#F3C313;padding: 5px 32px;margin: 5px 5px;text-decoration:no-decoration"  href="update.php?id=<?php // echo $row['game_id'];?>"><b>Update</b></a> -->
                        </td>
                        <!-- <td>61</td>
                        <td>$320,800</td>
                      </tr> -->
                      <?php }} }}?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
  </div>
</section>
	<!--  Page section end -->


	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="img/footer-logo.png" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Latest Posts</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/1.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/2.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/3.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title">Top Comments</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/2.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/3.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/4.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="review.html">Games</a></li>
				<li><a href="categories.html">Blog</a></li>
				<li><a href="community.html">Forums</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWTIlluowDL-X4HbYQt3aDw_oi2JP0Krc&sensor=false"></script>
	<script src="js/map.js"></script>
    <script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}
</script>
    </body>
</html>