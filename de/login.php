<?php include("../includes/header.inc.php"); ?>

<section class="row margin-bottom-20 login form">
		<div class="spinner hidden">
			<p>Einen Augenblick bitte...</p>
			<img src="/images/design/spinner.gif" alt="Progress Anzeige">
		</div>
<!-- 	linke Seite bestimmt für die Registration, bzw weitmeinung einholen -->	
	<div class="large-5 columns">
		<h1>Registrieren</h1>
		<p>Zweitmeinung bestellen, einen neuen Fall anlegen.</p>
		<p>Loggen Sie sich mit der Angabe Ihrer E-Mailadresse und ihrer Mobiltelefonnummer ein.</p>
		<?php include("../includes/reg.inc.php"); ?>
	</div>

	<div class="large-5 columns">
		<h1>Login</h1>
		<p>Sie haben bereits einen Fall eröffnet und möchten sich einloggen.</p>
		<p>Loggen Sie sich mit der Angabe Ihrer Fallnummer und ihrer E-Mailadresse ein.</p>
		<?php include("../includes/login.inc.php"); ?>
	</div>

</section>
		
<?php include("../includes/footer.inc.php"); ?>