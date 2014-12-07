<?php include("../includes/header.inc.php"); ?>

<section class="row margin-bottom-20 login form">
	<div class="spinner hidden">
		<p>Einen Augenblick bitte ...</p>
		<img src="/images/design/spinner.gif" alt="Progress Anzeige">
	</div>
<!-- 	linke Seite bestimmt für die Registration, bzw weitmeinung einholen -->	
	<div class="large-5 columns">
		<h1>Registrieren</h1>
		<p>Sie möchten eine Zweitmeinung bestellen. <img data-tooltip aria-haspopup="true" class="tip-bottom" style="float:none" title="Richtig, wenn Sie Ihren Fall noch nicht bei uns hinterlegt haben. Oder wenn Sie eine bereits eine Zweitmeinung durch opCheck erhalten haben aber für eine andere Operation eine zweite Meinung wünschen." src="/images/icons/help.svg" alt="help" /></p>
		
		<p>Bitte geben Sie zunächst Ihre E-Mailadresse und Ihre Mobiltelefonnummer ein.</p>
		<?php include("../includes/reg.inc.php"); ?>
	</div>

	<div class="large-5 columns">
		<h1>Login</h1>
		<p>Sie haben bereits eine Fallnummer erhalten und möchten auf Ihre Daten zugreifen. <img data-tooltip aria-haspopup="true" class="tip-bottom" style="float:none" title="Ihre Fallnummer haben wir Ihnen per SMS sowie per Post mitgeteilt." src="/images/icons/help.svg" alt="help" /></p>	
		<p>Bitte identifizieren Sie sich mit der Angabe Ihrer Fallnummer und ihrer E-Mailadresse.</p>
		<?php include("../includes/login.inc.php"); ?>
	</div>

</section>
		
<?php include("../includes/footer.inc.php"); ?>