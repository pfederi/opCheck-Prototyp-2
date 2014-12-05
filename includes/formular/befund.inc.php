<div class="row">
	<div class="large-12 columns"> 
		<p>Ihr aktueller Befund:<br><large>Kreuzbandriss<large></p>
		<form>
			<label class="labelTitle">Weitere Diagnosen im Zusammenhang mit diesem Befund</label>
			<img data-tooltip aria-haspopup="true" class="tip-bottom" title="Sind zum Beispiel weitere Beschwerden seit der Diagnose aufgetreten?" src="/images/icons/help.svg" alt="help" />
			<textarea style="margin-bottom: 0; height: 100px;" placeholder="..."></textarea>
			<p><small style="float: right">max. 500 Zeichen</small></p>
                      
			<label class="labelTitle">Ihre Vorerkrankungen in den letzten fünf Jahren</label>
			<img data-tooltip aria-haspopup="true" class="tip-bottom" title="Eine Angabe in Stichworten ist ausreichend." src="/images/icons/help.svg" alt="help" />
            <textarea style="margin-bottom: 0; height: 100px;" placeholder="..."></textarea>
            <p><small style="float: right">max. 500 Zeichen</small></p>

			<label class="labelTitle">Welche Medikamente nehmen Sie zur Zeit?</label>
            <textarea style="margin-bottom: 0; height: 100px;" placeholder="..."></textarea>
            <p><small style="float: right">max. 500 Zeichen</small></p>
			
			<label class="labelTitle">Haben Sie aktuelle Beschwerden?</label>
			<img data-tooltip aria-haspopup="true" class="tip-bottom" title="Nur in direktem Zusammenhang mit der Diagnose" src="/images/icons/help.svg" alt="help" />
			<textarea style="margin-bottom: 0; height: 100px;" placeholder="..."></textarea>
			<p><small style="float: right; margin-bottom: 2em;">max. 500 Zeichen</small></p>
			
			<label>Haben Sie zusätzliche Dokumente die Sie uns zukommenlassen möchten?</label>
            <input type="radio" name="dokumenteSenden" value="1" id="dokumentepost-ja"><label for="dokumentepost-ja">Ja, per Post</label>
            <input type="radio" name="dokumenteSenden" value="2" id="dokumenteupload-ja"><label for="dokumenteupload-ja">Ja, mittels Upload</label>
            <input type="radio" name="dokumenteSenden" value="3" id="dokumente-nein"><label for="dokumente-nein">Nein</label>
            
            <div id="blk-1" class="tohide formInfo" style="display: none;">
	            <p>Sie erhalten am Schluss der Eingabe ein PDF mit Ihren eingegeben Daten. Bitte senden Sie dieses mit den Dokumente an die auf dem PDF angegebene Adresse.</p>
            </div>
        </form>
            <div id="blk-2" class="tohide" style="display: none;">
	            <form action="../includes/file-upload.php" class="dropzone" id="my-awesome-dropzone"></form>
            </div>
		<form>
            <label>Haben Sie radiologische Bilder oder Datenträger (MRT, Röntgen, CT) die Sie uns per Post zukommen lassen möchten?</label>
            <input type="radio" name="radiologischeBilderSenden" value="1" id="radiologische-ja"><label for="radiologische-ja">Ja</label>
            <input type="radio" name="radiologischeBilderSenden" value="2" id="radiologische-nein"><label for="radiologische-nein">Nein</label>
        </form>
	</div>
</div>

	
<script src="../js/dropzone.js"></script>

<script>

$(function() {
    $("[name=dokumenteSenden]").click(function(){
            $('.tohide').hide();
            $("#blk-"+$(this).val()).show('fast');
    });
 });
 </script>
