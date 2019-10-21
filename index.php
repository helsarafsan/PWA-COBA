<?php

	$defbirth=date('Y-m-d',strtotime('-17 year'));
	$login="";
	$register="";
	$reset="";
	$confirmreset="";
	$htmlreset='<div id="section3" class="section-w3ls">
					<input type="radio" name="sections" id="option3"'.$reset.'>
					<label for="option3" class="icon-left-w3pvt"><span class="fa fa-lock" aria-hidden="true"></span>Forgot Password?</label>
					<article>
						<form action="?" method="POST">
							<h3 class="legend">Reset Password</h3>
							<h5 class="masslog">'.$_SESSION['msglog'].'</h5>
							<p class="para-style">Enter your email address below and we\'ll send you an email with instructions.</p>
							<div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input style="margin-bottom: 0.7em;" type="email" placeholder="E-mail" name="email" required />
							</div>
							<div class="g-recaptcha" data-sitekey="6Lf20KsUAAAAAEBa5gUBuuPdH9YxIG-QvgU5OyEs"></div>
							<button style="width: 100%; margin:0px;"  type="submit" class="btn submit last-btn" name="submit" value="reset" >Reset</button>
						</form>
					</article>
				</div>
				';
?>

<!DOCTYPE HTML>
<html lang="zxx">
<head>
	<title>Holland Bakery</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/holland.png">
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="holland bakery,Login form holland bakery member, Sign up Web forms holland bakery, Login signup Responsive web form holland bakery,Flat Pricing table,Flat Drop downs holland bakery,Registration Forms holland bakery,News letter redeem point Forms holland bakery,News letter redeem gift Forms holland bakery,Elements holland bakery, holland bakery membership" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext"
	 rel="stylesheet">
	<!-- //web-fonts -->
	<style>
		.g-recaptcha 		{
								width: 100%;
								border-radius: 4px;
								border-right: 1px solid #d8d8d8;
								overflow: hidden;
							}
		.input				{
								margin:0em 0em 0.2em 0em;
							}
		.sub-main-w3 form  {
								min-height: 307px;
							}
	</style>

</head>

<body>
	<div class="main-bg">
		<!-- title -->

		<h1><div class="image-h1"></div></h1>
		<!-- //title -->

		<div class="sub-main-w3">
			<div class="clear"><span style="color:#FF0000; font-weight:bold; text-shadow:#ddd  0 0px 1px; font-size:15px;"><?php echo $_SESSION['pesanexpired'];
			unset($_SESSION['pesanexpired']);
			?></span></div>
			<div class="image-style">
		
			</div>
			<!-- vertical tabs -->
			<div class="vertical-tab">
				<div id="section1" class="section-w3ls">
					<input type="radio" name="sections" id="option1" checked>
					<label for="option1" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>Login</label>
					<article>
						<form action="#" method="post" name="login">
							<div>
								<h3 class="legend">Login Here</h3>
								<h5 class="masslog"><?php //echo $_SESSION['msglog']; ?></h5>
							</div>
							<div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input type="TEXT" placeholder="E-mail / Phone" name="email" value="<?php echo $_SESSION['usernamp']; ?>" required />
							</div>
							<div style="margin: 0% 0% 1.3% 0%; padding-left:15%; background-color: red; color: white; border-radius: 3px; font-size: 0.8em;"><?php echo $_SESSION['msgactivated']; ?></div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Password" name="password" value="<?php echo $_SESSION['passnamp']; ?>" required />
							</div>
							<div style=" width: 100%; height: 43px; display: grid; grid-template-columns: 65% 1fr; grid-gap: 20px; ">
								<div class="input">
									<input type="text" maxlength="4" id="kodecaptcha" required="required" autofocus onKeyPress='return numbersonly(this, event)' name="kodecaptcha" placeholder="Captcha" title="&nbsp;Insert captcha code&#013;&#013;&nbsp;Click on captcha to refresh code" />
									
								</div>
								<img style=" width: 100%;  height: 43px; cursor:pointer;" src="control/func_captcha.php" title="Click to refresh captcha" onClick="this.src='control/func_captcha.php?rand='+Math.random();">
							</div>
							<button style="width: 100%;"  type="submit" class="btn submit" name="submit" value="login">Login</button>
						</form>
					</article>
				</div>
				<div id="section2" class="section-w3ls">
					<input type="radio" name="sections" id="option2" <?php echo $register; ?> >
					<label for="option2" class="icon-left-w3pvt"><span class="fa fa-pencil-square" aria-hidden="true"></span>Register</label>
					<article>
						<form action="#" method="post">
							<div>
								<h3 class="legend">Register Here</h3>
								<h5 class="masslog"><?php //echo $_SESSION['msgreg']; ?></h5>
							</div>
							<div class="tab">
								<div class="input">
									<span class="fa fa-envelope-o" aria-hidden="true"></span>
									<input type="email" placeholder="E-mail" onchange="Mailever(this.value)" name="email" required />
								</div>
								<div id='mailever' style="margin: 0% 0% 1.3% 0%; padding-left:15%; background-color: red; color: white; border-radius: 3px; font-size: 0.8em;"></div>
								
								<div class="input">
									<span class="fa fa-user-circle" aria-hidden="true"></span>
									<input type="text" placeholder="First Name" name="firstname" required />
								</div>
								<div style="width: 100%; height: 43px;">
									<div class="input">
										<span class="fa fa-user-circle" aria-hidden="true"></span>
										<input type="text" placeholder="Last Name" name="lastname" required />
									</div>
								</div>
								 	
							</div>
						
							<div class="tab">
								<div class="select">
									<span class="fa fa-map-marker" aria-hidden="true"></span>
									<?php //echo getprovinces($provinces);?>
								</div>
								<div class="select" id='city'>
									<span class="fa fa-map-marker aria-hidden="true"></span>
									<?php //echo getcity($provinces,$regencies);?> 
								</div>
								<div style="width: 100%; height: 43px;">
									<div class="select" id='kitchen'>
										<span class="fa fa-map-marker" aria-hidden="true"></span>
										<?php //echo getkitchen($kitchen,$provinces,$regencies);?> 
									</div>
								</div>
							</div>

							<div class="tab">
								<div class="input">
									<span class="fa fa-mobile" aria-hidden="true"></span>
									<input type="numbersonly" placeholder="Phone" onchange="phonevEr(this.value)" autocomplete="off" name="phone" required />
									
								</div>
								<div id='phonever' style="margin: 0% 0% 1.3% 0%; padding-left:15%; background-color: red; color: white; border-radius: 3px; font-size: 0.8em;"></div>
								
								<div class="input">
									<span class="fa fa-user-circle" aria-hidden="true"></span>
									<span>BirthDay : </span>
									<input type="date" placeholder="Birthday" onblur="Birthday(this.value)" style="width:40%;  float:right;" name="birthday" required />
								</div>
								<div id='birthdayev' style="margin: 0% 0% 1.3% 0%; padding-left:15%; background-color: red; color: white; border-radius: 3px; font-size: 0.8em;"></div>
							</div>
							<div class="tab">
								<div class="input">
									<span class="fa fa-user-circle" aria-hidden="true"></span>
									<input class="bebas" type="text" onblur="reveraL(this.value)" placeholder="Referal Code Jika Ada" name="referal" />
								</div>
								<div id='referal' style="margin: 0% 0% 1.3% 0%; padding-left:15%; background-color: red; color: white; border-radius: 3px; font-size: 0.8em;"></div>

								<div class="input">
									<span class="fa fa-key" aria-hidden="true"></span>
									<input type="password" placeholder="Password" name="password" autocomplete="off" required />
								</div>
								<div style="width: 100%; height: 43px;">
									<div class="input">
										<span class="fa fa-key" aria-hidden="true"></span>
										<input type="password" placeholder="Confirm Password" name="confpassword" autocomplete="off" required />
									</div>
								</div>
							</div>
							<div style="overflow:auto;">
								<div style="float:right;">
									<button type="button" id="prevBtn" class="btn submit" onclick="nextPrev(-1)">Previous</button>
									<button type="button" id="nextBtn" class="btn submit" onclick="nextPrev(1)">Next</button>
									<button type="submit" id="sbmtBtn" class="btn submit" name="submit" value="register" >Register</button>
								</div>
							</div>
							<div style="float:left;">
								<span class="step"></span>
								<span class="step"></span>
								<span class="step"></span>
							</div>
						</form>
						<!-- <button type="submit" class="btn submit" name="submit" value="register">Register</button> -->
					</article>
				</div>
				
				<?php echo $htmlreset;?>
			</div>
			<!-- //vertical tabs -->
			<div class="clear"></div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<a href="https://www.hollandbakery.co.id/" target="_blank">
				<h2 style="color:#fff;">&copy; <?=date('Y')?> by Holland Bakery Indonesia</h2>
			</a>
		</div>
		<!-- //copyright -->
	</div>

</body>
<script src="js/java.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	    $('#provinces').on('change', function(){
            var nama=$('#provinces').val();
            var nameclass="form-control";
            $("#city" ).load( "control/valid_process.php", {"search_kota":nama,"load_city":"1"}); //membuat permintaan ajax menggunakan dengan jQuery 
        });
		
		
	function phonevEr(str) {
    if (str.length == 0) {
			document.getElementById("phonever").innerHTML = "";
			
			document.getElementById("nextBtn").disabled = true; 
			document.getElementById("nextBtn").style.color = "grey";
			
			return;
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("phonever").innerHTML = this.responseText;
					
					if(this.responseText =='')
					{
						document.getElementById("nextBtn").disabled = false; 
						document.getElementById("nextBtn").style.color = "white";
					}else
					{
						document.getElementById("nextBtn").disabled = true; 
						document.getElementById("nextBtn").style.color = "grey";
					}
						
				}
			}
			
			xmlhttp.open("GET", "https://apps.hollandbakery.co.id/holl4nd_m3mb312/control/valid_process.php?verphone="+str, true);
			xmlhttp.send();
			
		}
	}
	
	
	function Mailever(str) {
		
    if (str.length == 0) {
			document.getElementById("mailever").innerHTML = "";
			
			document.getElementById("nextBtn").disabled = true; 
			document.getElementById("nextBtn").style.color = "grey";
			
			return;
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("mailever").innerHTML = this.responseText;
					
					if(this.responseText =='')
					{
						document.getElementById("nextBtn").disabled = false; 
						document.getElementById("nextBtn").style.color = "white";
					}else
					{
						document.getElementById("nextBtn").disabled = true; 
						document.getElementById("nextBtn").style.color = "grey";
					}
						
				}
			}
			
			xmlhttp.open("GET", "https://apps.hollandbakery.co.id/holl4nd_m3mb312/control/valid_process.php?vermail="+str, true);
			xmlhttp.send();
			
		}
	}
	
	function Birthday(str) {

    if (str.length == 0) {
			document.getElementById("birthdayev").innerHTML = "";
			
			document.getElementById("nextBtn").disabled = true; 
			document.getElementById("nextBtn").style.color = "grey";
			
			return;
		} else {

			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				
					
					if(this.responseText =='')
					{
						
						document.getElementById("birthdayev").innerHTML ="Anda Tidak Bisa Mengubah DOB Setelah Proses Ini";
						document.getElementById("nextBtn").disabled = false; 
						document.getElementById("nextBtn").style.color = "white";
					}else
					{	
						document.getElementById("birthdayev").innerHTML = this.responseText;
						document.getElementById("nextBtn").disabled = true; 
						document.getElementById("nextBtn").style.color = "grey";
					}
						
				}
			}
			
			xmlhttp.open("GET", "https://apps.hollandbakery.co.id/holl4nd_m3mb312/control/valid_process.php?birthday="+str, true);
			xmlhttp.send();
			
		}
	}
	
	
	function reveraL(str) {
		
    if (str.length == 0) {

			document.getElementById("referal").innerHTML = "";
			
			document.getElementById("nextBtn").disabled = false; 
			document.getElementById("nextBtn").style.color = "white";
			
			return;
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("referal").innerHTML = this.responseText;
					
					if(this.responseText =='')
					{
						document.getElementById("nextBtn").disabled = false; 
						document.getElementById("nextBtn").style.color = "white";
					}else
					{
						document.getElementById("nextBtn").disabled = true; 
						document.getElementById("nextBtn").style.color = "grey";
					}
						
				}
			}
			
			xmlhttp.open("GET", "https://apps.hollandbakery.co.id/holl4nd_m3mb312/control/valid_process.php?referal="+str, true);
			xmlhttp.send();
			
		}
	}
	
</script>
</html>
