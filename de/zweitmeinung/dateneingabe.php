<?php include("../../includes/header.inc.php"); ?>

<div class="row margin-bottom-40" data-equalizer>
	<?php include("../../includes/stepbystep.inc.php"); ?>
	<div class="large-9 columns" style="padding-left:3em;" data-equalizer-watch>
		<h2 style="margin: 0 0 .500em;">Daten eingeben</h2>
		<p>Bitte füllen Sie die untenstehenden Formulare vollständig aus.</p>
		<p>Lassen Sie sich Zeit. Sie haben jederzeit die Möglichkeit die eingegebenen Daten zu speichern. Sie können dann die Eingabe zu einem späteren Zeitpunkt wieder aufnehmen und komplettieren.</p>
		<dl class="accordion" data-accordion="">
		  <dd class="accordion-navigation">
		  	<a class="firstPanel" href="#panel1b"><div class="left progress-counter"><span class="iconStep">1</span></div>Angaben zur Person<span class="right checked"><img src="../../images/icons/checked.svg" alt="Ausgefüllt Anzeige"></span></a> 
		    <div id="panel1b" class="content active">
				<div class="row">
					<div class="large-9 columns">
						<!--1 Demographische Daten -->
						<?php include("../../includes/formular/demographische-daten.inc.php"); ?>
					</div>
					<div class="large-3 columns">
						<div class="formInfo hyphenate">
							<p>Ihre Demographischen Daten werden zur Verwaltung des Falles und für die Korrespondenz benötigt.</p> 
							<p>Die Telefondaten ermöglichen dem Arzt mit Ihnen Kontakt aufzunehmen.</p> 
							<p>Die Angaben zu Geburtsdatum, Grösse und Gewicht sind wichtige Vorabinformationen für den Arzt.</p>						
						</div>					
					</div>
				</div>
				<div class="row">
					<div class="large-4 large-centered columns">
						<button form="demograph" class="button expand firstAccordSave" type="submit" id="demographWeiter">Speichern & weiter…</button>
						<!-- <a href="#goTopanel2b" class="button firstAccordSave">Speichern & weiter…</a>  -->
					</div>
				</div>
		    </div>
		  </dd>
		  <dd class="accordion-navigation">
		    <a id="goTopanel2b" href="#panel2b"><div class="left progress-counter"><span class="iconStep">2</span></div> Kurzdiagnose<span class="right checked"><img src="../../images/icons/checked.svg" alt="Ausgefüllt Anzeige"></a>
		    <div id="panel2b" class="content">
				<div class="row">
					<div class="large-9 columns">
						<!--2 Kurzdiagose -->
						<?php include("../../includes/formular/kurzdiagnose.inc.php"); ?>
					</div>
					<div class="large-3 columns">
						<div class="formInfo">
							<p>Hier ordnen Sie Ihren Fall dem richtigen Fachgebiet zu.</p> 
							<p>Diese Basisangaben helfen opCheck dabei, den richtigen Spezialisten für Ihre Zweitmeinung zu finden.<span class="right checked"><img src="../../images/icons/checked.svg" alt="Ausgefüllt Anzeige"></p>						
						</div>
					</div>
				</div>

				<div class="row">
					<div class="large-4 large-centered columns">
						<button form="kurzdiag" class="button expand secondAccordSave" type="submit" id="kurzdiagWeiter">Speichern & weiter…</button>
						<!-- <a href="#goTopanel3b" class="button secondAccordSave">Speichern & weiter…</a> -->
					</div>
				</div>	
			</div>		
		  </dd>
		  <dd class="accordion-navigation">
		    <a id="goTopanel3b" href="#panel3b"><div class="left progress-counter"><span class="iconStep">3</div> Befund <span class="right checked"><img src="../../images/icons/checked.svg" alt="Ausgefüllt Anzeige"></a>
		    <div id="panel3b" class="content">
				<div class="row">
					<div class="large-9 columns">
						<!--3 Befund -->
						<?php include("../../includes/formular/befund.inc.php"); ?>
					</div>
					<div class="large-3 columns">
						<div class="formInfo">
							<p>Alle Angaben zum Befund helfen Ihrem Zweitmeinungsarzt dabei, Ihren Fall besser einzuordnen.</p>
							<p>Besonders die Angaben zu Vorerkrankungen sind wichtig, da sie einen entscheidenden Einfluss auf die für sie richtige Massnahme haben können.</p>
							<p>Denken Sie auch daran, alle aktuell eingenommenen Medikamente anzugeben sowie allenfalls aktuelle Beschwerden zu listen.	</p>						
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-4 large-centered columns">
						<button form="befund" class="button expand thirdAccordSave" type="submit" id="befundWeiter">Speichern & weiter…</button>						
						<!-- <a href="#goTopanel4b" class="button thirdAccordSave">Speichern & weiter…</a> -->
					</div>
				</div>				
			</div>
		  </dd>
		  <dd class="accordion-navigation">
		    <a id="goTopanel4b" href="#panel4b"><div class="left progress-counter"><span class="iconStep">4</div> Eingabe abschliessen <span class="right checked"><img src="../../images/icons/checked.svg" alt="Ausgefüllt Anzeige"></a>
		    <div id="panel4b" class="content">
				<div class="row">
					<div class="large-7 end columns">
						<!--4 Eingabe abschliessen -->
						<?php include("../../includes/formular/abschliessen.inc.php"); ?>
					</div>
				</div>
				<div class="row">
					<div class="large-4 large-centered columns">
						<button form="abschluss" class="button expand fourthAccordSave" type="submit" id="abschlussWeiter">Abschliessen & absenden</button>						
						<!-- <a href="#goTopanel5b" class="button fourthAccordSave">Absenden</a> -->
					</div>
				</div>
			</div>
		  </dd>			
		  <dd class="accordion-navigation contolsWrap hiddenObject hidden">
		    <a id="goTopanel5b" href="#panel5b"><div class="left progress-counter"><span class="iconStep">5</div> Eingabe abgeschlossen <span class="right checked"><img src="../../images/icons/checked.svg" alt="Ausgefüllt Anzeige"></a>
		    <div id="panel5b" class="content">
				<div class="row margin-bottom-20">
					<div class="large-7 columns">
						<!--5 Eingabe abgeschlossen -->
						<p>Besten Dank für das Einsenden Ihrer Daten.</p>
						<p>Das Team von opCheck wird Ihnen innert fünf Arbeitstagen einen Spezialisten zuweisen oder Sie bei Fragen direkt kontaktieren.</p>
						<p>Senden Sie Ihre radiologischen Bilder und Dokumente, die Sie nicht hochgeladen haben mit beiliegendem PDF zu opCheck. Die Adresse und Ihre Daten sind bereits abgefüllt.</p>
						<p>Ihre Daten werden nun durch das opCheck-Team geprüft.</p>
						<p>Wenn Sie über den Stand der Datenprüfung informiert werden wollen, können Sie sich jederzeit anmelden und unter <a href="datenpruefung">"Daten werden geprüft"</a> den Status abfragen. Sie erhalten von uns ein SMS, wenn Ihre Arztauswahl auf der Plattform bereitsteht.</p>
					</div>
					<div class="large-5 columns">
						<p><strong>Ihre aktuellen Befunddaten als PDF</strong></p>
						<img style="border: 1px solid #ddd" src="/documents/vorschau.png" alt="Vorschau" />
						<a href="/documents/opCheck-Ihre-Daten.pdf" target="_blank">PDF herunterladen</a>
					</div>
				</div>	
		    </div>			
		  </dd>
		</dl>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<div class="controls abschluss">
		</div>
	</div>
</div>









<?php include("../../includes/footer.inc.php"); ?>