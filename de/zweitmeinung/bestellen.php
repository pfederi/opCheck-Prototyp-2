<?php include("../../includes/header.inc.php"); ?>

<div class="row">
	<?php include("../../includes/stepbystep.inc.php"); ?>
	<div class="large-9 medium-9 small-11 columns">
		<div class="row">
			<div class="large-12 columns mitteilung">
				<p>Ihre persönliche Fallnummer wurde erstellt.<br>
					Diese Fallnummer begleitet Sie durch den ganzen Prozess.<br>
					Sie haben jederzeit die Möglichkeit Ihren Fall wieder zu löschen.
				</p>
			</div>
		</div>
		<div class="row" data-equalizer>
			<div class="large-4 columns">
				<a href="javascript:void(0)" onclick="parent.$('html, body').animate({ scrollTop: parent.$('#Grundprinzien').offset().top},'slow');">
					<div class="panel" data-equalizer-watch>
					<p>Was kostet die Zweitmeinung?</p>
					<p><span>opCheck erhebt eine Schutzgebühr von CHF 50. Die Kosten für die Zweitmeinung werden in der Regel von Ihrer Krankenkasse übernommen. Bitte kontaktieren Sie diese im Zweifel vorgängig.</span></p>
					<!-- <img src="/images/icons/arrow-down.svg" alt="öffnen" /> -->
					</div>
				</a>
			</div>
			<div class="large-4 columns">
				<a href="javascript:void(0)" onclick="parent.$('html, body').animate({ scrollTop: parent.$('#Speicherung').offset().top},'slow');">
					<div class="panel" data-equalizer-watch>
						<p>Wer hat Zugriff auf Ihre Daten?</p>
						<p><span>Ausschliesslich Mitarbeiter von opCheck sowie der Arzt, der die Zweitmeinung abgibt.</span></p>
						<!-- <img src="/images/icons/arrow-down.svg" alt="öffnen" /> -->
					</div>
				</a>
			</div>
			<div class="large-4 columns">
				<a href="javascript:void(0)" onclick="parent.$('html, body').animate({ scrollTop: parent.$('#Datenerhebung').offset().top},'slow');">
					<div class="panel" data-equalizer-watch>
						<p>Wo werden die Daten gespeichert?</p>
						<p><span>opCheck betreibt seine Server ausschliesslich in Schweizer Rechenzentren.</span></p>
						<!-- <img src="/images/icons/arrow-down.svg" alt="öffnen" /> -->
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
	                <label>Ich bin nicht einverstanden und möchte meinen Fall sofort löschen.</label>
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