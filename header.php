	<div class="showcase">	
		<header class="w3-bar w3-text-light-grey w3-padding-large w3-card-4 w3-hide-small" style="z-index: 10;position: absolute;border-bottom: 1.2px solid blue;">
			<div class="w3-row">
				<div class="w3-col m4 l4 ">
					<img src="image/badge1.png" width="80" height="70" class="w3-circle">
				</div>
				<nav class="w3-col m8 l8 w3-margin-top">
					<div class="w3-right">
						<a class="w3-button w3-hover-blue w3-round-large w3-card" href="index.php">Home</a>
						<a class="w3-button w3-hover-blue w3-round-large w3-card" href="about_us.php">About</a>
						<a class="w3-button w3-hover-blue w3-round-large w3-card" href="curriculumn.php">Curriculumn</a>
						<a class="w3-button w3-hover-blue w3-round-large w3-card" href="students/stu_login.php">Check Result</a>
						<a class="w3-button w3-hover-blue w3-round-large w3-card" href="admin/login_.php">Admin Login</a>
					</div>
				</nav>
			</div>
		</header>


			<!--  THIS IS SMALL SCREEN  -->

		<header class="w3-bar w3-card-4 w3-hide-medium w3-hide-large" style="z-index: 10;position: absolute;border-bottom: 2px solid blue;">
			<div class="w3-row-padding w3-text-light-grey" style="padding:7px 0;">
				<div class="w3-col s9" style="padding-top: 4px;">
					<img src="image/badge1.png" width="80" height="63" class="w3-circle">
				</div>
				<nav class="w3-col s3">
					<div class="w3-right w3-text-light-grey w3-margin-top">
						<a href="#"  onclick="myFunction('Demo1')" class="w3-btn w3-hover-blue w3-round-large  w3-small"><b>Menu</b></a>
					</div>
				</nav>
			</div>
		</header>

		<div class="w3-padding w3-text-light-grey w3-hide w3-hide-medium w3-hide-large" style="top: 9.4vh;position: relative;background-color: rgba(10, 10, 89, 0.7648);z-index: 20;" id="Demo1">
			
			<ul class="w3-ul w3-center" style="border-top: none;">
				<li class=" w3-block w3-button"><a href="index.php" class="w3-hover-lightgrey w3-button w3-block">Home</a></li>
				
				<li class="w3-block w3-button"><a href="about_us.php" class="w3-hover-lightgrey w3-button w3-block">About</a></li>
				<li class="w3-block w3-button">
					<a href="curriculumn.php" class="w3-hover-lightgrey w3-button w3-block">Curriculumn</a>
				</li>
				<li class="w3-block w3-button"><a href="students/stu_login.php" class="w3-hover-lightgrey w3-button w3-block">Check Result</a></li>
				<li class="w3-block w3-button"><a href="admin/login_.php" class="w3-hover-lightgrey w3-button w3-block">Admin Login</a></li>
			
			</ul>
		</div>


		<div class="w3-hide-small">
			<h1 class="w3-xxlarge animate w3-padding-small"><b>C.P.M. International School</b></h1>
			<h2 style="margin-left: 14px;" class="animate2 w3-xlarge w3-text-light-grey w3-xlarge">(a.k.a. Glory Land Academy.)</h2>
			<h5 class="animate4 w3-tag w3-blue">Since.. <span class="w3-medium">2002</span></h5>
		</div>


		<div class=" w3-hide-medium w3-hide-large">
			<h1 class="w3-xlarge animate"><b>C.P.M. International School</b></h1>
			<h2 style="margin-left: 15px;margin-top: -10px;" class="animate2 w3-text-light-grey w3-large">(a.k.a. <span class="w3-xxlarge"> Glory Land Academy.</span>)</h2>
				<h5 class="animate4 w3-tag w3-blue">Since.. <span class="w3-medium">2002</span></h5>
		</div>

	</div><!-- SHOWCASE IS END HERE -->











<style type="text/css">
	h1{margin: 0;padding: 0;}
	p{padding: 0;}
	.animate{position:absolute;z-index: 10;top: 24vh;left: 9vw;color: antiquewhite;text-shadow: 3.5px 4px 3px blue; animation-name: teach;animation-delay: -1s;animation-duration: 5s;animation-iteration-count: 2;animation-timing-function: ease-in-out;}

	.animate2{position:absolute;z-index: 10;top: 31vh;left: 9vw;color: antiquewhite;animation-name: teachs;animation-delay: -1s;animation-duration: 9s;animation-iteration-count: 1;animation-timing-function: ease-in-out;text-shadow: 1.2px 1px 1px blanchedalmond;}

	
	.animate4{position:absolute;z-index: 10;bottom: 0;left: 12vw;color: antiquewhite;animation-name: teachs;animation-delay: -1s;animation-duration: 9s;animation-iteration-count: 1;animation-timing-function: ease-in-out;font-weight: bolder;}

	@keyframes teach{
		0%{ left: 3vw;opacity:0.1221;}
		50%{left: 9vw;opacity: 0.5999;}
		100%{left: 9vw;opacity: 0.9390;}
		
	}

	@keyframes teachs{
		0%{opacity:0 ;}
		50%{opacity: 0;}
		85%{opacity: 0;}
		90%{opacity: 0.9;}
		95%{opacity: 0.9;}
		100%{opacity: 1;}
		
	}

</style>

<!--TheAccordionScript-->
	<script>
	function myFunction(id) {
	  var x = document.getElementById(id);
	  if (x.className.indexOf("w3-show") == -1) {
	    x.className += " w3-show";
	  } else { 
	    x.className = x.className.replace(" w3-show", "");
	  }
	}
	</script>