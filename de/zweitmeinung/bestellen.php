<?php include("../../includes/header.inc.php"); ?>

<div class="row" data-equalizer>
	<?php include("../../includes/stepbystep.inc.php"); ?>
	<div class="large-9 medium-9 small-11 columns" style="padding-left:3em;" data-equalizer-watch>
		<div class="row">
			<div class="large-12 columns mitteilung">
				<p>Ihre persönliche Fallnummer wurde erstellt.<br>
					Diese Fallnummer begleitet Sie durch den ganzen Prozess.<br>
					Sie haben jederzeit die Möglichkeit Ihren Fall wieder zu löschen.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<h2 style="margin: 0 0 .500em .500em;">Zweitmeinung bestellen</h2>
			</div>
		</div>
		<div class="row" data-equalizer>
			<div class="large-4 columns">
				<a href="javascript:void(0)" onclick="parent.$('html, body').animate({ scrollTop: parent.$('#Grundprinzien').offset().top},'slow');">
					<div class="panel" data-equalizer-watch>
					<p><strong>Was kostet die Zweitmeinung?</strong></p>
					<p>opCheck erhebt eine Schutzgebühr von CHF 50. Die Kosten für die Zweitmeinung werden in der Regel von Ihrer Krankenkasse übernommen. Bitte kontaktieren Sie diese im Zweifel vorgängig.</p>
					<!-- <img src="/images/icons/arrow-down.svg" alt="öffnen" /> -->
					</div>
				</a>
			</div>
			<div class="large-4 columns">
				<a href="javascript:void(0)" onclick="parent.$('html, body').animate({ scrollTop: parent.$('#Speicherung').offset().top},'slow');">
					<div class="panel" data-equalizer-watch>
						<p><strong>Wer hat Zugriff auf Ihre Daten?</strong></p>
						<p>Ausschliesslich Mitarbeiter von opCheck sowie der Arzt, der die Zweitmeinung abgibt.</p>
						<!-- <img src="/images/icons/arrow-down.svg" alt="öffnen" /> -->
					</div>
				</a>
			</div>
			<div class="large-4 columns">
				<a href="javascript:void(0)" onclick="parent.$('html, body').animate({ scrollTop: parent.$('#Datenerhebung').offset().top},'slow');">
					<div class="panel" data-equalizer-watch>
						<p><strong>Wo werden die Daten gespeichert?</strong></p>
						<p>opCheck betreibt seine Server ausschliesslich in Schweizer Rechenzentren.</p>
						<!-- <img src="/images/icons/arrow-down.svg" alt="öffnen" /> -->
					</div>
				</a>
			</div>
		</div>
		<form>
			<div class="row" style="margin-top: 1em;">
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