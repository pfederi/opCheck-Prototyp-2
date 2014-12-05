<?php include("../../includes/header.inc.php"); ?>

<div class="row">
	<?php include("../../includes/stepbystep.inc.php"); ?>
	<div class="large-9 medium-9 small-11 columns">
		<div class="row">
			<div class="large-12 columns mitteilung">
				<p>Ihre persönliche Fallnummer wurde erstellt.<br>
					Diese Fallnummer begleitet Sie durch den ganzen Prozess<br>
					Sie haben jederzeit die Möglichkeit Ihren Fall zu löschen.
				</p>
			</div>
		</div>
		<div class="row" data-equalizer>
			<div class="large-4 columns">
				<a href="javascript:void(0)" onclick="parent.$('html, body').animate({ scrollTop: parent.$('#Grundprinzien').offset().top},'slow');">
					<div class="panel" data-equalizer-watch>
					<p>Unsere Grundregeln im Umgang mit Ihren Daten</p>
					<img src="/images/icons/arrow-down.svg" alt="öffnen" />
					</div>
				</a>
			</div>
			<div class="large-4 columns">
				<a href="javascript:void(0)" onclick="parent.$('html, body').animate({ scrollTop: parent.$('#Speicherung').offset().top},'slow');">
					<div class="panel" data-equalizer-watch>
						<p>Datenerhebung und Weiterverwendung</p>
						<img src="/images/icons/arrow-down.svg" alt="öffnen" />
					</div>
				</a>
			</div>
			<div class="large-4 columns">
				<a href="javascript:void(0)" onclick="parent.$('html, body').animate({ scrollTop: parent.$('#Datenerhebung').offset().top},'slow');">
					<div class="panel" data-equalizer-watch>
						<p>Wer hat Zugriff auf Ihre Daten?</p>
						<img src="/images/icons/arrow-down.svg" alt="öffnen" />
					</div>
				</a>
			</div>
		</div>
		<form>
			<div class="row" style="margin-top: 2em;">
				<div class="large-12 columns">
					<input type="radio" name="bilderSenden" value="1" id="dateneingeben-ja">
					<label>Ja, ich bin mit den <a href="/datenschutz-richtlinien">Datenschutz-Richtlinien</a> und den <a ref="agb">AGBs</a> einverstanden und möchte mit der Eingabe meiner Daten beginnen.</label><br>
	                <input type="radio" name="bilderSenden" value="2" id="dateneingeben-nein">
	                <label>Nein, ich bin nicht einverstanden und möchte meinen Fall löschen.</label>
				</div>
			</div>
			<div class="row" style="margin-top: 1em;">
				<div class="large-4 columns">
					<a href="/zweitmeinung/dateneingabe" class="button">Speichern & weiter…</a>
				</div>
			</div>
		</form>
	</div>
</div>

<?php include("../../includes/footer.inc.php"); ?>