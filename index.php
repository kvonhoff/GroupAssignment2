<!DOCTYPE html>
<html>
	<head>
		<title>DUSA-U</title>
		<link rel="stylesheet" href="css/themes/GroupAssignment2Theme.min.css" />
		<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<link rel = "stylesheet" type = "text/css" a href = "css/style.css" />
		<meta name = "viewport" content = "width=devide-width, initial-scale = 1"/>
	</head>
	<body>
		<div data-role  = "page" id = "homepage" name = "homepage" data-theme = "d">
			<div data-role = "header">
				<div class = "slideout-menu">
				<h3>Menu <a href = "#" class = "slideout-menu-toggle">&times;</a></h3>
					<ul>
						<li><a href = "index.php">Home <i class="fa fa-angle-right"></i></a></li>
						<li><a href = "about.php">About  <i class="fa fa-angle-right"></i></a></li>
						<li><a href = "membership.html">Memberships <i class="fa fa-angle-right"></i></a></li>
						<li><a href = "bookshop.php">Bookshop <i class="fa fa-angle-right"></i></a></li>
						<li><a href = "map.php">Map <i class="fa fa-angle-right"></i></a></li>
						<li><a href = "developers.php">Developers <i class="fa fa-angle-right"></i></a></li>					
						<li><a href = "#contactpage" data-rel = "dialog">Contact Us <i class = "fa fa-angle-right"></i></a></li>
					</ul>
				</div>
				<a href="#" class="slideout-menu-toggle"><i class="fa fa-bars"></i> Toggle Menu</a>
				<h2>DUSA-U</h2>
			</div>
			<div data-role = "content">
				<div class="cen-text">
					<img src="images/dusa-u-white.png" align = "center"/>
				</div>
				<script type="text/javascript">
					$(document).ready(function () {
						$('.slideout-menu-toggle').on('click', function(event){
							event.preventDefault();
							// create menu variables
							var slideoutMenu = $('.slideout-menu');
							var slideoutMenuWidth = $('.slideout-menu').width();
							
							// toggle open class
							slideoutMenu.toggleClass("open");
							
							// slide menu
							if (slideoutMenu.hasClass("open")) {
								slideoutMenu.animate({
									left: "0px"
								});	
							} else {
								slideoutMenu.animate({
									left: -slideoutMenuWidth
								}, 250);	
							}
						});
					});
				</script>
			</div>
		</div>
		
		<div data-role  = "page" id = "contactpage" name = "contactpage" data-theme = "d">
			<div data-role = "header">
				<h2>Contact Us</h2>
			</div>
			<div data-role = "content">
				<form name="htmlform" method="post" action="contact_us.php">
					<label for="first_name">First Name *</label>
					<input  type="text" name="first_name" maxlength="50" size="30">
					<label for="last_name">Last Name *</label>
					<input  type="text" name="last_name" maxlength="50" size="30">
					<label for="email">Email Address *</label>
					<input  type="text" name="email" maxlength="80" size="30">
					<label for="telephone">Telephone Number</label>
					<input  type="text" name="telephone" maxlength="30" size="30">
					<label for="comments">Comments *</label>
					<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div data-role = "footer">
				<h1><a href = "developers.php">&copy; DUSA-U Inc.</a></h1>
			</div>
		</div>
	</body>
</html>