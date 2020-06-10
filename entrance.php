<!DOCTYPE html>
<html lang="en">
<head>
	<title>Paradise Model School | Entrance</title>
	<meta charset="UTF-8">
	<meta name="description" content="Paradise Model School website">
	<meta name="keywords" content="Paradise Model School, School">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/elegant-icons.css"/>
	<link rel="icon" href="img/favicon2.ico" type="image/ico" />
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

	<!-- Offcanvas Menu Section -->
	<div class="offcanvas-menu-wrapper">
		<div class="menu-header">
			<a href="./" class="site-logo">
				<img src="img/profile.png" alt="">	
			</a>
			<div class="menu-switch" id="menu-canvas-close">
				<i class="icon_close"></i>
			</div>
		</div>
		<ul style="font-size: 20px" class="main-menu">
			<li><a href="./">Main Site</a></li>
				<li><a href="./entrance" class="active">Register</a></li>
				<li><a href="https://entrance.paradisemodelschool.com.ng/result">Check Result</a></li>
				<li><a href="https://entrance.paradisemodelschool.com.ng/scholarship">Scholarships</a></li>
				<li><a href="./contact">Contact us</a></li
		</ul>
		<div class="menu-footer">
			<div class="footer-social">
			<a target="_blank" href="https://fb.me/paradiseiyesi">Facebook</a>
			<a target="_blank" href="https://www.youtube.com/channel/UCUm7-M8dDUxIoQf9jfCU21w/">Paradise TV</a>
			<a target="_blank" href="https://Instagram.com/paradise_model_school">Instagram</a>
			<a href="./entrance">Entrance</a>
		</div>
			<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   Copyright &copy; Paradise Model School <script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by: <a target="_blank" href="https://www.google.com/search?q=doteightinc&rlz=1C1CHBF_enNG876NG876&oq=doteightinc&aqs=chrome.0.69i59.2676j0j7&sourceid=chrome&ie=UTF-8">DotEightInc</a></p></div>
		</div>
	</div>
	<!-- Offcanvas Menu Section end -->
	
	<!-- Header section -->
	<header class="header-section">
		<a href="./" class="site-logo">
			<img src="img/favicon2.ico" alt="">
		</a>
		<div class="menu-switch" id="menu-canvas-show">
			<i class="icon_menu"></i>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Contact section -->
	<section class="contact-section">
		<div class="contact-warp set-bg" data-setbg="img/fmobile.png">
			<div class="container">
				<form method="post" action="entrancesubmit.php" class="contact-form">
				<div class="row">
					<div class="col-lg-12">
						<div class="contact-info">
							<?php 
							$x = date("Y");
							$y = $x + 1;
							$t = $x."/".$y
							?>
							<h4 style="text-align: center;">Register For Entrance Examination <?php echo $t; ?></h4>
							<h4 style="text-align: center; color: yellow;">BIO DATA</h4>
							</div>
						
					</div>
						<div class="col-lg-4">
						<div class="contact-info">
							<label for="y-name">Surname<sup style="color: yellow;">*</sup></label>
							<input type="text" id="y-name" name="sur" required>
						</div>
						
					</div>
					<div class="col-lg-4">
						<div class="contact-info">
							<label for="y-name"> Name<sup style="color: yellow;">*</sup></label>
							<input type="text" id="y-name" name="name" required>
						</div>
						
					</div>
					<div class="col-lg-4">
						<div class="contact-info">
							<label for="y-name">Other Name<sup style="color: yellow;">*</sup></label>
							<input type="text" id="y-name" name="oth" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Date of Birth<sup style="color: yellow;">*</sup></label>
							<input type="date" id="y-name" name="dob" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Gender<sup style="color: yellow;">*</sup></label>
						<select name="gender" class="form-control">
                          <option name="gender">Male</option>
                          <option name="gender">Female</option>
                         
                        </select>
						</div>
						
					</div>
					<div class="col-lg-12">
						<div class="contact-info">
							<?php 
							$x = date("Y");
							$y = $x + 1;
							$t = $x."/".$y
							?>
							<h4 style="text-align: center;">Does your child have any disability? If any specify below;</h4>
							<textarea style="text-align: center;" id="y-msg" name="dis" required></textarea>
							</div>
						
					</div>
					<div class="col-lg-12">
						<div class="contact-info">
													
							<h4 style="text-align: center; color: yellow;">CONTACT DATA</h4>
							</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Name of Parents/Guardian<sup style="color: yellow;">*</sup></label>
						<input type="text" id="y-name" name="parent" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian Relationship<sup style="color: yellow;">*</sup></label>
						<select name="rel" class="form-control">
                          <option name="rel">Parent</option>
                          <option name="rel">Guardian</option>
                         
                        </select>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian Occupation<sup style="color: yellow;">*</sup></label>
						<input type="text" id="y-name" name="occ" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian Residential Address<sup style="color: yellow;">*</sup></label>
						<input type="text" id="y-name" name="resadd" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian Telephone Number 1<sup style="color: yellow;">*</sup></label>
						<input type="text" id="y-name" name="tel1" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian Telephone Number 2</label>
						<input type="text" id="y-name" name="tel2">
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian office Address 1<sup style="color: yellow;">*</sup></label>
						<input type="text" id="y-name" name="add1" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Parents/Guardian office Address 2</label>
						<input type="text" id="y-name" name="add2">
						</div>
						
					</div>
					<div class="col-lg-12">
						<div style="text-align: center;" class="contact-info">
							<label for="y-name">Parents/Guardian Email Address<sup style="color: yellow;">*</sup></label>
						<input class="text-center" type="email" id="y-name" name="email" required>
							</div>
						
					</div>
					<div class="col-lg-12">
						<div class="contact-info">
							
							<h4 style="text-align: center; color: yellow;">Educational Details;</h4>
							</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">School last Attended<sup style="color: yellow;">*</sup></label>
						<input type="text" id="y-name" name="schlst" required>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="contact-info">
							<label for="y-name">Class Completed<sup style="color: yellow;">*</sup></label>
						<input type="text" id="y-name" name="clscomp" required>
						</div>
						
					</div>
					<div class="col-lg-12">
						<div style="text-align: center;" class="contact-info">
							<button style="background-color: yellow; color: black;" type="submit" class="site-btn">Submit Details</button>
							</div>
						
					</div>
				</div>
			</form>
			</div>
		</div>
	</section>
	<!-- Contact section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="footer-social">
			<a target="_blank" href="https://fb.me/paradiseiyesi">Facebook</a>
			<a target="_blank" href="https://www.youtube.com/channel/UCUm7-M8dDUxIoQf9jfCU21w/">Paradise TV</a>
			<a target="_blank" href="https://Instagram.com/paradise_model_school">Instagram</a>
			<a href="./entrance">Entrance</a>
		</div>
		<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy; Paradise Model School <script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by: <a target="_blank" href="https://www.google.com/search?q=doteightinc&rlz=1C1CHBF_enNG876NG876&oq=doteightinc&aqs=chrome.0.69i59.2676j0j7&sourceid=chrome&ie=UTF-8">DotEightInc</a></p></div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/main.js"></script>
	<script>
  var div = document.createElement('div');
  div.className = 'fb-customerchat';
  div.setAttribute('page_id', '286732158409768');
  div.setAttribute('ref', '');
  document.body.appendChild(div);
  window.fbMessengerPlugins = window.fbMessengerPlugins || {
    init: function () {
      FB.init({
        appId            : '1678638095724206',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v3.3'
      });
    }, callable: []
  };
  window.fbAsyncInit = window.fbAsyncInit || function () {
    window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
    window.fbMessengerPlugins.init();
  };
  setTimeout(function () {
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) { return; }
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  }, 0);
</script>
	</body>
	 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c0ea9167a79fc1bddf04abe/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>
