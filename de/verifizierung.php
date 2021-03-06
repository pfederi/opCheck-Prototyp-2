<?php include("../includes/header.inc.php"); ?>

<section class="row verifizierung">
	<div class="large-6 columns large-centered">
		<div class="spinner hidden">
			<p>Einen Augenblick bitte...</p>
			<img src="/images/design/spinner.gif" alt="Progress Anzeige">
		</div>		
		<h1>Verifizierung</h1>
		<p>Sie erhalten einen SMS-Code auf Ihr registriertes Mobiltelefon </p>
		<form data-abide="ajax" id="verification" accept-charset="utf-8">
			<div class="email-field">
				<label>SMS-Code <small>(Pflichtfeld)</small></label>
				<input type="number" required>
				<p class="hinweis bsp helper"><b>Bsp.:</b> 454458</p>
				<small class="error">Um Ihnen Zugriff auf die Plattform zu gewähren, benötigen wir eine gültige Natel-Nummer</small>
			</div>
			<button type="submit" id="verifWeiter">Anmelden</button>
		</form>
	</div>
</section>
		
<?php include("../includes/footer.inc.php"); ?>