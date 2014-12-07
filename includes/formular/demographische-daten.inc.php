<div class="row">
	<div class="large-12 columns">
		<form data-abide="ajax" id="demograph" accept-charset="utf-8">	
		<div class="margin-bottom-15">
			
			<div class="row">
			   	<div class="large-2 columns end">
					<label>Anrede</label>
					<select>
                  	<option value="herr">Herr</option>
                  	<option value="frau">Frau</option>
                  </select>
			   	</div>
			   	<div class="large-5 columns">            			
					<label>Vorname</label>
					<input type="text" placeholder="..." value="Beat" />
				</div>
			   	<div class="large-5 columns end">    
					<label>Name</label> 
					<input type="text" placeholder="..." value="Iseli" />
				</div>
			</div>	

		</div>			
		<div class="margin-bottom-15">
			<div class="row">
	        	<div class="large-5 columns">         
	            	<label>Strasse <small>(Pflichtfeld)</small></label>
					<input type="text" placeholder="..." required />
				</div>
				<div class="large-2 columns end">                 
	            	<label>Nr. <small>(Pflichtfeld)</small></label>
					<input type="number" placeholder="..." required />
				</div>
			</div>
			<div class="row">
				<div class="large-2 columns">                 
	            	<label>PLZ <small>(Pflichtfeld)</small></label>
					<input type="text" pattern="^[0-9]{4}$" placeholder="8000" required />
				</div>
				<div class="large-4 columns end">    
	            	<label>Ort <small>(Pflichtfeld)</small></label>
					<input type="text" placeholder="..." required />
				</div>
			</div> 			
		</div>
 		<div class="margin-bottom-15">
			<div class="row">
				<div class="large-4 columns">         
					<label>Mobil</label>
					<input type="text" placeholder="..." value="078 123 45 67" />
				</div>
				<div class="large-4 columns">                 
			    	<label>Telefon</label>
					<input type="tel" placeholder="..." />
				</div>
				<div class="large-4 columns">    
			    	<label>E-Mail</label>
					<input type="email" placeholder="..." value="beat.iseli@persona.ch" />
				</div>
			</div> 			
		</div>			  
		<div class="margin-bottom-15">
			<div class="row">
            	<div class="large-4 columns">         
                	<label>Geburtsdatum <small>(Pflichtfeld)</small></label>
					<input type="number" placeholder="tt-mm-yyyy" required />
            	</div>
				<div class="large-4 columns">                 
                	<label>Grösse <small>(Pflichtfeld)</small></label>
					<input type="text" placeholder="0.00 m" required />
				</div>
				<div class="large-4 columns">    
             	 	<label>Gewicht <small>(Pflichtfeld)</small></label>
			 	 	<input type="text" placeholder="..." required />
				</div>
            </div> 			
		</div>             
 
    	</form>
	</div>
</div>