<form data-abide="ajax" id="login" accept-charset="utf-8">
	<div class="email-field">
		<div class="row">
			<div class="large-12 columns">
				<label>Ihre Fallnummer <small>(Pflichtfeld)</small></label>
				<input type="number" required placeholder="3487655.076">
				<small class="error">Bitte überprüfen Sie Ihre Fallnummer. Diese muss richtig und vollständig eingegeben werden, um Sie identifizieren zu können.</small>
			</div>
		</div>
	</div>
	<div class="email-field">
		<div class="row">
			<div class="large-12 columns">
				<label>Ihre E-Mail Adresse <small>(Pflichtfeld)</small></label>
				<input type="email" required placeholder="mail@anbieter.ch">
				<small class="error">Wir benötigen Ihre bei uns hinterlegte E-Mailadresse.</small>				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-6 columns">
			<button class="button expand" type="submit" id="loginWeiter">Login</button>
		</div>
		<div class="large-6 columns">
			<a href="#" class="button expand white">Abbrechen</a>
		</div>
	</div>
</form>