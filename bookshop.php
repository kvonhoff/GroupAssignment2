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
		<div data-role  = "page" id = "bookshoppage" name = "bookshoppage">
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
				<p ><b><h2 align = "center">Bookshop</h2></b></p>
				<p align = "center"><b>Search</b></p>
				<form method = "post" action = "bookshop.php">
					<input type = "text"name = "unit_code"/>
					<input type = "submit" value = "Search" />
				</form>
				<p>
				<?php
					extract ( $_POST );
				
					$iserror = false;
	
					$unit_code = $_REQUEST[ "unit_code"];
					$unit_code = strtoupper($unit_code);
					if( $unit_code == "" )
					{
						$formerror[ "unit_code" ] = true;
						$iserror = true;
					}
						
					if( !$iserror )
					{
						$dbuser = "tdenning";
						$dbpass = "Dalastar3199";
						$db = "SSID";
						$connect = OCILogon($dbuser, $dbpass, $db);
				
						if(!$connect)
						{
							echo"<br />There was an error connecting to the database.";
							exit;
						}
					
						$query = "select * from book_table where unit_code = '$unit_code'";
						$stmt = OCIParse($connect, $query);
						if(!$stmt)
						{
							echo"An error occured in parsing the sql string.\n";
							exit;
						}
						OCIExecute($stmt);
				?>
				<table>
					<tr>
						<td>IBSN</td>
						<td>Title</td>
						<td>Author</td>
						<td>Publisher</td>
						<td>Year</td>
						<td>Price</td>
					</tr>
					<?php
						while(OCIFetch($stmt))
						{
							echo("<tr>");
							echo("<td>IBSN</td>");
							$fg1 = OCIResult($stmt, "IBSN");
							echo("<td>");
							echo($fg1);
							echo("</td>");
							echo("</tr>");
							echo("<tr>");
							echo("<td>Title</td>");
							$fg2 = OCIResult($stmt, "TITLE");
							echo("<td>");
							echo($fg2);
							echo("</td>");
							echo("</tr>");
							echo("<tr>");
							echo("<td>Author</td>");
							$fg3 = OCIResult($stmt, "AUTHOR");
							echo("<td>");
							echo($fg3);
							echo("</td>");
							echo("</tr>");
							echo("<tr>");
							echo("<td>Publisher</td>");
							$fg4 = OCIResult($stmt, "PUBLISHER");
							echo("<td>");
							echo($fg4);
							echo("</td>");
							echo("</tr>");
							echo("<tr>");
							echo("<td>Year</td>");
							$fg5 = OCIResult($stmt, "YEAR");
							echo("<td>");
							echo($fg5);
							echo("</td>");
							echo("</tr>");
							echo("<tr>");
							echo("<td>Price</td>");
							$fg6 = OCIResult($stmt, "PRICE");
							echo("<td>");
							echo($fg6);
							echo("</td>");
							echo("</tr>");
						}
						OCILogOff($connect);
					}
					?>
				</table>
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