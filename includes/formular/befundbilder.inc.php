<div class="row">
	<div class="large-12 columns">

<!--   		<h1>4- Befundbilder</h1> --> 	
    <form>
  			<div class="row">
              <div class="large-12 columns">
                <label>Möchten Sie Ihre Diagnosedokumente hochladen oder per Post schicken?</label>
                <input type="radio" name="bilderSenden" value="1" id="senden-ja"><label for="senden-ja">Ja, jetzt hochladen</label>
                <input type="radio" name="bilderSenden" value="2" id="senden-nein"><label for="senden-nein">Per Post schicken</label>
              </div>
          	</div>
		  	<div id="blk-1" class="tohide" style="display: none;">
	  			<div class="row">
	  				<div class="large-4 columns">
	  				Röntgenbild
	 				<input type="file" name="pic" accept="image/*">
	          		</div>
	          		<div class="large-8 columns">
	              	<label>Kommentar zum Röntgenbild
	                <textarea placeholder="..."></textarea>
	              	</label>
	          		</div>
	          	</div>
	
	          	<div class="row">
	  				<div class="large-4 columns">
	  				MRT
	 				<input type="file" name="pic" accept="image/*">
	          		</div>
	          		<div class="large-8 columns">
	              	<label>Kommentar zum MRT
	                <textarea placeholder="..."></textarea>
	              	</label>
	          		</div>
	          	</div>
	
	          	<div class="row">
	  				<div class="large-4 columns">
	  				Weiterer Befund
	 				<input type="file" name="pic" accept="image/*">
	          		</div>
	          		<div class="large-8 columns">
	              	<label>Kommentar zum weiteren Befund
	                <textarea placeholder="..."></textarea>
	              	</label>
	          		</div>
	          	</div>
		  	</div>
		  	<div id="blk-2" class="tohide" style="display: none;">
			  	<div class="row">
				  	<div class="large-6 columns">
					  	<p>Bitte senden Sie - soweit vorhanden - folgende Dokumente an nebenstehende Adresse:</p>
					  	<ul class="liste">
						  	<li>Röntgenbilder</li>
						  	<li>MRT</li>
						  	<li>Weitere Befundbilder</li>
					  	</ul>
					  	<p>opCheck übermittelt die Dokumente an Ihren Zweitmeinungsarzt. Sie erhalten diese nach Abschluss Ihres Falles zurück.</p>
				  	</div>
				  	<div class="large-6 columns">
					  	<p>
					  	opCheck AG
					  	Befundbilder Fallnr. 987321-1
					  	Birmensdorferstrasse 470
					  	8055 Zürich
					  	Schweiz
					  	</p>
				  	</div>
			  	</div>
		  	</div>

  		</form>
  	</div>
</div>

<script>
	
$(function() {
    $("[name=bilderSenden]").click(function(){
            $('.tohide').hide();
            $("#blk-"+$(this).val()).show('fast');
    });
 });
 </script>