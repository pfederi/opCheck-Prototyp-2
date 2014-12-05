<div class="row">
	<div class="large-12 columns">
		<form>
	    	<div class="row">
            	<div class="large-4 columns">
					<label class="labelTitle">Fachbereich</label>      
                	<img data-tooltip aria-haspopup="true" class="tip-bottom" title="Wählen Sie zunächst das Fachgebiet." src="/images/icons/help.svg" alt="help" />
	                <select>
	                  <option value="#">...</option>
	                  <option value="herz-gefaess">Herz/Gefässerkrankungen</option>
	                  <option value="orthopaedie">Orthopädie</option>
	                  <option value="viszeral">Viszeralchirurgie</option>
	                  <option value="allgemein">Allgemeinchirurgie</option>
	                </select>
				</div>
				<div class="large-4 columns">                 
					<label class="labelTitle">Bereich</label>
	                <img data-tooltip aria-haspopup="true" class="tip-bottom" title="Welcher Bereich ist betroffen?" src="/images/icons/help.svg" alt="help" />
	                <select>
	                  <option value="#">...</option>
	                  <option value="herz-gefaess">Knie</option>
	                  <option value="ruecken">Rücken</option>
	                  <option value="schulter">Schulter</option>
	                  <option value="fuss">Fuss</option>
	                  <option value="hand">Hand</option>
	                  <option value="andere">andere</option>
	                </select>
				</div>
				<div class="large-4 columns">    
		             <label class="labelTitle">Befund</label>
		             <img data-tooltip aria-haspopup="true" class="tip-bottom" title="Welche Diagnose hat Ihr Arzt gestellt?" src="/images/icons/help.svg" alt="help" />
		             <select>
		              <option value="#">...</option>
		              <option value="meniskuslaesion">Meniskusläsion</option>
		              <option value="kreuzbandriss">Kreuzbandriss</option>
		              <option value="kniegelenksentzuendung">Kniegelenksentzündung</option>
		              <option value="andere">andere</option>
		            </select>
				</div>
			</div> 
			<div class="row">
				<div class="large-12 columns">
					<label class="labelTitle">Hat Ihr Arzt eine Operation empfohlen?</label>
					<input type="radio" name="spezialist" value="Ja" id="op-ja">
					<label for="op-ja">Ja</label>
					<input type="radio" name="spezialist" value="Nein" id="op-nein">
					<label for="op-nein">Nein</label>
				</div>
        	</div>
			<div class="row">
				<div class="large-7 end columns">
					<label class="labelTitle">Ihre Gründe für eine Zweitmeinung</label>
					<img data-tooltip aria-haspopup="true" class="tip-bottom" title="Bitte alle Gründe anwählen, die für Sie zutreffen." src="/images/icons/help.svg" alt="help"><br>
					<input id="checkbox1" type="checkbox"><label for="checkbox1">Ich bin unsicher</label><br>
					<input id="checkbox2" type="checkbox"><label for="checkbox2">Ich möchte mich umfassender informieren</label>
					<label class="labelTitle">Andere Gründe</label>
					<textarea placeholder="..."></textarea>
				</div>
			</div>
		</form>
	</div>
</div>
