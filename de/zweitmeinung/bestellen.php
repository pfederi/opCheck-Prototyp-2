<?php include("../../includes/header.inc.php"); ?>

<div class="row">
	<div class="large-3 medium-3 small-1 columns stepbystep">
		<ul id="lstZweitmeinung">
			<li><img src="/images/logos/surgeon-sw.png" alt="Surgeon" />Ihre Fallnummer<br><span>9876321-1</span>
				<ul>
					<li><a href="#">Speichern</a></li>
					<li><a href="#">Löschen</a></li>
				</ul>
			</li>
			<li><a href="/zweitmeinung/bestellen" <?php if ($_SERVER['REQUEST_URI']=='/zweitmeinung/bestellen' ) {echo 'class="selected"';} ?>>Zweitmeinung bestellen</a><progress max="100" value="80"></progress></li>
			<li><a href="/zweitmeinung/dateneingabe">Daten eingeben</a><progress max="100" value="0"></progress></li>
			<li><a href="/zweitmeinung/datenprüfung">Daten werden geprüft</a><progress max="100" value="0"></progress></li>
			<li><a href="/zweitmeinung/spezialistenauswahl">Spezialist auswählen</a><progress max="100" value="0"></progress></li>
			<li><a href="/zweitmeinung/gespraech">Ihr Zweitmeinungsgespräch</a><progress max="100" value="0"></progress></li>
			<li><a href="/zweitmeinung/befund">Ihr Befund</a><progress max="100" value="0"></progress></li>
		</ul>
	</div>
	<div class="large-9 medium-9 small-11 columns">
		<div class="row">
			<div class="large-12 columns mitteilung">
				<p>Ihre persönliche Fallnummer wurde erstellt.<br>
					Diese Fallnummer begleitet Sie durch den ganzen Prozess<br>
					Sie haben jederzeit die Möglichkeit Ihren Fall zu löschen.
				</p>
			</div>
		</div>
	</div>
</div>








<?php include("../../includes/footer.inc.php"); ?>