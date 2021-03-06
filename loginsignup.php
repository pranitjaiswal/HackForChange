<!DOCTYPE HTML>
<html>
	<head>
		<title>Login - Hunger Heroes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="images/Hungerheroes.png">
	</head>
	<body>
		<!-- Page Wrapper -->
		<div id="page-wrapper">
			<!-- Header -->
			<header id="header" class="alt">
				<h1>
					<a href="index.html">Hunger Heroes</a>
				</h1>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>
			<!-- Menu -->
			<nav id="menu">
				<div class="inner">
					<h2>Menu</h2>
					<ul class="links">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="food.html">Food</a>
						</li>
					</ul>
					<a href="#" class="close">Close</a>
				</div>
			</nav>
			<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<div class="inner">
					<div class="logo">
						<img class="img-circle" src="images/Hungerheroes.png">
					</div>
				</div>
			</section>
			<!-- Wrapper -->
			<section id="wrapper">
				<div class="wrapper spotlight style1">
					<a href="#signup" class="image">
						<img src="images/SIGNUP.png" alt=""/>
					</a>
					<a href="#login" class="image">
						<img src="images/LOGIN.png" alt="" />
					</a>
				</div>
				<!-- One -->
				<section id="one" class="wrapper alt spotlight style2">
					<div class="inner">
						<a href="#" class="image" >
							<img src="images/SIGNUP.png" alt="" />
						</a>
						<div class="content" >
							<div class="form" >
								<div class="tab-content">
									<div id="signup">
										<h1>Sign Up</h1>
										<form action="signup.php" method="post" name="signup">
											<div class="top-row">
												<div class="field-wrap">
													<label>
																			Name
														<span class="req">*</span>
													</label>
													<input type="text" placeholder="Enter Full Name"  required autocomplete="off" name="names"/>
												</div>
                                                <div class="field-wrap">
													<label>
																			Email Address
														
													</label>
													<input type="email" placeholder="Enter Email Id"  required autocomplete="off" name="emails"/>
												</div>
												
												<div class="field-wrap">
													<label for="password">Password*</label>
													<input type="password" name="pwds" placeholder="Enter Password" autocomplete="off" required/>
												</div>
												<div class="field-wrap">
													<label>
																			Address
														<span class="req">*</span>
													</label>
													<input type="text" placeholder="Enter Address" required autocomplete="off" name="addrs" required/>
												</div>
												<div class="field-wrap">
													<label for="contacts">Phone Number*</label>
													<input id="contacts" placeholder="Enter Phone Number" type="tel" name="contacts" required/>
												</div>
												<label for="account">Account Type*</label>
												<select name="accountforsignup">
												  <option value="supplier" name="supplier">Supplier</option>
												  <option value="consumer" name="consumer">Consumer</option>
												</select>
												<div class="field-wrap">
													<button type="submit" name="signup" class="button button-block"/>Get Started</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- tab-content -->
						</div>
						<!-- /form -->
					</div>
				</div>
			</section>
			<!-- Two -->
			<section id="two" class="wrapper spotlight style3">
				<div class="inner">
					<a href="#" class="image">
						<img src="images/LOGIN.png" alt="" />
					</a>
					<div id="login">
						<h1>Login</h1>
						<form action="login.php" method="post" name="login">
							<div class="field-wrap">
								<label>
													Email Id*
												</label>
								<input type="text" placeholder="Enter Email Id" name="emails" required>
								</div>
								<div class="field-wrap">
									<label>
													Password*
												</label>
									<input type="password" placeholder="Enter Password" name="pwds" required>
									</div>
									<label for="account">Account Type*</label>
												<select name="accountforlogin">
												  <option value="supplier" name="supplier">Supplier</option>
												  <option value="consumer" name="consumer">Consumer</option>
												</select>
									<button type="submit" name="login" class="button button-block"/>Log In</button>
							</form>
						</div>
					</div>
				</section>
			</section>
			<!-- Footer -->
			<section id="footer">
				<div class="inner">
					<h2 class="major">Get in touch</h2>
					<p>Because being in touch is important</p>
					<form method="post" action="#">
						<div class="field">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="field">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" />
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="4"></textarea>
						</div>
						<ul class="actions">
							<li>
								<input type="submit" value="Send Message" />
							</li>
						</ul>
					</form>
					<ul class="contact">
						<li class="fa-home">
									Hunger Heroes Inc
							<br />
									210 B, Sun Mill Compound, Sitaram Jadhav Marg,
							<br />
									Lower Parel, Mumbai – 400 013.
								
						</li>
						<li class="fa-phone">+91 8291815591</li>
						<li class="fa-envelope">
							<a href="mailto:hungerheroes@30wave.com">hungerheroes@30wave.com</a>
						</li>
						<li class="fa-twitter">
							<a href="https://twitter.com/Hungerheroesngo">twitter.com/hungerheroesngo/</a>
						</li>
						<li class="fa-facebook">
							<a href="https://www.facebook.com/Hungerheroesngo">facebook.com/hungerheroesngo/</a>
						</li>
						<li class="fa-instagram">
							<a href="https://www.instagram.com/hungerheroesngo/">instagram.com/hungerheroesngo/</a>
						</li>
					</ul>
					<ul class="copyright">
						<li>&copy; Hunger Heroes Inc. All rights reserved.</li>
					</ul>
				</div>
			</section>
		</div>
		<!-- Scripts -->
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
