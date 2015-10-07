<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<title>DUSA-U</title>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<link rel = "stylesheet" type = "text/css" a href = "css/style.css" />
		<meta name = "viewport" content = "width=devide-width, initial-scale = 1"/>
	</head>
	<body>
		<div data-role  = "page" id = "mappage" name = "mappage">
			<div data-role = "header">
				<div class = "slideout-menu">
				<h3>Menu <a href = "#" class = "slideout-menu-toggle">&times;</a></h3>
					<ul>
						<li><a href = "index.php">Home <i class="fa fa-angle-right"></i></a></li>
						<li><a href = "about.php">About  <i class="fa fa-angle-right"></i></a></li>
						<li><a href = "membership.php">Memberships <i class="fa fa-angle-right"></i></a></li>
						<li><a href = "bookshop.php">Bookshop <i class="fa fa-angle-right"></i></a></li>
						<li><a href = "map.php">Map <i class="fa fa-angle-right"></i></a></li>
						<li><a href = "#contactpage" data-rel = "dialog">Contact Us <i class = "fa fa-angle-right"></i></a></li>
					</ul>
				</div>
				<a href="#" class="slideout-menu-toggle"><i class="fa fa-bars"></i> Toggle Menu</a>
				<h2>DUSA-U</h2>
			</div>
			<div data-role = "content">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
	
				<br />The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
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
			<div data-role = "footer">
				<h2>This is the footer</h2>
			</div>
		</div>
		
		<div data-role  = "page" id = "contactpage" name = "contactpage">
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
				<h2>This is the footer</h2>
			</div>
		</div>
	</body>
</html>