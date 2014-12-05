<div class="large-3 medium-3 small-1 columns stepbystep" data-equalizer-watch>
	<ul id="lstZweitmeinung">
		<li><img src="/images/logos/surgeon-sw.png" alt="Surgeon" />Ihre Fallnummer<br><span>9876321-1</span>
			<ul>
				<li><a href="#">Speichern</a></li>
				<li><a href="#">Löschen</a></li>
			</ul>
		</li>
		<!-- BESTELLEN -->
		<li><a href="/zweitmeinung/bestellen" <?php if ($_SERVER['REQUEST_URI']=='/zweitmeinung/bestellen' ) {echo 'class="selected"';} ?>>Zweitmeinung bestellen</a>
			<progress max="100" 
				<?php if ($_SERVER['REQUEST_URI'] == '/zweitmeinung/dateneingabe' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/datenpruefung' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/spezialistenauswahl' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/gespraech' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/befund') {
						echo 'value="100"';	
					} elseif ($_SERVER['REQUEST_URI']=='/zweitmeinung/bestellen' ) { 
						echo 'value="20"';
					} else {
						echo 'value="0"';
					}
				?>>
			</progress></li>
		
		<!-- DATEN EINGEBEN -->
		<li><a href="/zweitmeinung/dateneingabe" <?php if ($_SERVER['REQUEST_URI']=='/zweitmeinung/dateneingabe' ) {echo 'class="selected"';} ?>>Daten eingeben</a>
			<progress max="100" 
				<?php if ($_SERVER['REQUEST_URI'] == '/zweitmeinung/datenpruefung' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/spezialistenauswahl' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/gespraech' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/befund') {
						echo 'value="100"';	
					} elseif ($_SERVER['REQUEST_URI']=='/zweitmeinung/dateneingabe' ) { 
						echo 'value="20"';
					} else {
						echo 'value="0"';
					}
				?>>
			</progress></li>		
		
		<!-- DATEN PRÜFEN -->
		<li><a href="/zweitmeinung/datenpruefung"
			<?php if ($_SERVER['REQUEST_URI']=='/zweitmeinung/datenpruefung' ) {echo 'class="selected"';} ?>>Daten werden geprüft</a>
			<progress max="100" 
				<?php if ($_SERVER['REQUEST_URI'] == '/zweitmeinung/spezialistenauswahl' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/gespraech' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/befund') {
						echo 'value="100"';	
					} elseif ($_SERVER['REQUEST_URI']=='/zweitmeinung/datenpruefung' ) { 
						echo 'value="20"';
					} else {
						echo 'value="0"';
					}
				?>>
			</progress></li>
		
		<!-- SPEZIALIST AUSWÄHLEN-->
		<li><a href="/zweitmeinung/spezialistenauswahl" 
			<?php if ($_SERVER['REQUEST_URI']=='/zweitmeinung/spezialistenauswahl' ) {echo 'class="selected"';} ?>>Spezialist auswählen</a>
			<progress max="100" 
				<?php if ($_SERVER['REQUEST_URI'] == '/zweitmeinung/gespraech' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/befund') {
						echo 'value="100"';	
					} elseif ($_SERVER['REQUEST_URI']=='/zweitmeinung/spezialistenauswahl' ) { 
						echo 'value="20"';
					} else {
						echo 'value="0"';
					}
				?>>
			</progress></li>
		
		
		<!-- ZWEITMEINUNGSGESPRAECH -->
		<li><a href="/zweitmeinung/gespraech" 
			<?php if ($_SERVER['REQUEST_URI']=='/zweitmeinung/gespraech' ) {echo 'class="selected"';} ?>>Ihr Zweitmeinungsgespräch</a>
			<progress max="100" 
				<?php if ($_SERVER['REQUEST_URI'] == '/zweitmeinung/befund') {
						echo 'value="100"';	
					} elseif ($_SERVER['REQUEST_URI']=='/zweitmeinung/gespraech' ) { 
						echo 'value="20"';
					} else {
						echo 'value="0"';
					}
				?>>
			</progress></li>
		
		<!-- BEFUND -->
		<li><a href="/zweitmeinung/befund" <?php if ($_SERVER['REQUEST_URI']=='/zweitmeinung/befund' ) {echo 'class="selected"';} ?>>Ihr Befund</a>
			<progress max="100" 
				<?php if ($_SERVER['REQUEST_URI']=='/zweitmeinung/befund' ) { 
						echo 'value="20"';
					} else {
						echo 'value="0"';
					}
				?>>
			</progress></li>
	</ul>
</div>
