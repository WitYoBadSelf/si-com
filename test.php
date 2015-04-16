<!DOCTYPE HTML>
<html>
 <head>
  <title>PHP Test</title>
  		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 
 				<section class="wrapper style4 special container 75%">

					<!-- Content -->
						<div class="content">
							<form action="contact.php" method="post">
								<div class="row 50%">
									<div class="6u 12u(mobile)">
										<input type="text" name="name" placeholder="Name" />
									</div>
									<div class="6u 12u(mobile)">
										<input type="text" name="email" placeholder="Email" />
									</div>
								</div>
								<div class="row 50%">
									<div class="12u">
										<input type="text" name="subject" placeholder="Subject" />
									</div>
								</div>
								<div class="row 50%">
									<div class="12u">
										<textarea name="message" placeholder="Message" rows="7"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="buttons">
											<li><input type="submit" class="special" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>
						</div>

				</section>
 </body>
</html>