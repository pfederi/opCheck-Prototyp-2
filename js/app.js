$('.firstAccordSave').click(function() {
	$('#demograph')
	  .on('invalid.fndtn.abide', function (e) {
		$(".firstPanel .checked").hide();
		location.href='#goTopanel1b';
		e.preventDefault();
		e.stopPropagation();
	  })
	  .on('valid.fndtn.abide', function () {
			/* Act on event */
			$('#panel2b').parent().addClass('active');
			$('#panel2b').addClass('active');
			$('#panel1b').removeClass('active');
			$(".firstPanel .checked").show();
			$('#panel1b').parent().removeClass('active');
			location.href='#goTopanel2b';
	 	});
});

$('.secondAccordSave').click(function() {
	$('#kurzdiag')
	  .on('invalid.fndtn.abide', function (e) {
			$('#panel2b').parent().addClass('active');
			$('#panel2b').addClass('active');
			$('#panel1b').removeClass('active');
			$(".firstPanel .checked").hide();
			$('#panel1b').parent().removeClass('active');
			location.href='#goTopanel2b';
		e.preventDefault();
		e.stopPropagation();
	  })
	  .on('valid.fndtn.abide', function () {
			/* Act on event */
			$('#panel3b').parent().addClass('active');
			$('#panel3b').addClass('active');
			$('#panel2b').removeClass('active');
			$('#panel2b').parent().removeClass('active');
			$("#goTopanel2b .checked").show();
			location.href='#goTopanel3b';
	 	});

});


$('.thirdAccordSave').click(function() {
	$('#befund')
	  .on('invalid.fndtn.abide', function (e) {
			$('#panel3b').parent().addClass('active');
			$('#panel3b').addClass('active');
			$('#panel2b').removeClass('active');
			$('#panel2b').parent().removeClass('active');
			$("#goTopanel2b .checked").hide();
			location.href='#goTopanel3b';
		e.preventDefault();
		e.stopPropagation();
	  })
	  .on('valid.fndtn.abide', function () {
			/* Act the event */
			$('#panel4b').parent().addClass('active');
			$('#panel4b').addClass('active');
			$('#panel3b').removeClass('active');
			$('#panel3b').parent().removeClass('active');
			$("#goTopanel3b .checked").show();
			location.href='#goTopanel4b';
	 	});
});

$('.fourthAccordSave').click(function() {
	$('#abschluss')
	  .on('invalid.fndtn.abide', function (e) {
			$('#panel4b').parent().addClass('active');
			$('#panel4b').addClass('active');
			$('#panel3b').removeClass('active');
			$('#panel3b').parent().removeClass('active');
			$("#goTopanel3b .checked").hide();
			location.href='#goTopanel4b';
		e.preventDefault();
		e.stopPropagation();
	  })
	  .on('valid.fndtn.abide', function () {
			/* Act the event */
			$('#panel5b').parent().addClass('active');
			$('#panel5b').addClass('active');
			$('#panel4b').removeClass('active');
			$('#panel4b').parent().removeClass('active');
			$("#goTopanel4b .checked").show();
			$("#goTopanel5b .checked").show();
			$(".hiddenObject").addClass('visible');
			location.href='#goTopanel5b';
	 	});
});

/*wenn mit den AGB's & Verrechnung mit CC nicht einverstanden, dann kann nicht weitergefahren werden*/
$('#abschluss-nein').click(function(){
    	$('.fourthAccordSave').prop('disabled', true);
});

/*wenn mit den AGB's & Verrechnung mit CC einverstanden, dann kan weitergefahren werden*/
$('#abschluss-ja').click(function(){
		$('.fourthAccordSave').prop('disabled', false);  	
});


/*$(".delFile").hide();*/

/*wenn mit den AGB's am Anfang nicht einverstanden, dann kann nicht weitergefahren werden*/
$('#agb-nein').click(function(){
    	$('#agbWeiter').prop('disabled', true);
    	$(".delFile").removeClass('hidden');
    	$(".delete").removeClass('hidden');
});

$(".delete").click(function(){
	location.href='http://www.opcheck.ch/';
});

/*wenn mit den AGB's am Anfang einverstanden, dann kan weitergefahren werden*/
$('#agb-ja').click(function(){
		$('#agbWeiter').prop('disabled', false);
		$(".delFile").addClass('hidden');
		$(".delete").addClass('hidden'); 	
});



$(document).foundation();
// ab hier die foundation-js relevanten Scripten schreiben, die anderen über/vor dem $(document).foundation();

/*logins bei erfolgreichen Dateneingabe weiterleiten & Spinner schalten*/

$('#regWeiter').on("click", function(e){
	$('#register')
	  .on('invalid.fndtn.abide', function () {
		e.preventDefault();
		e.stopPropagation();
	  })
	  .on('valid.fndtn.abide', function () {
			setTimeout(geheZuSeite, 1000);
			function geheZuSeite() {
				location.href='verifizierung';
			}
			var info = $('.spinner');
			if ( info.hasClass("hidden") ){
				info.removeClass("hidden");
			}
	 	});
});


$('#loginWeiter').on("click", function(e){
	$('#login')
	  .on('invalid.fndtn.abide', function () {
		e.preventDefault();
		e.stopPropagation();
	  })
	  .on('valid.fndtn.abide', function () {
		setTimeout(geheZuSeite, 1000);
			function geheZuSeite() {
				location.href='verifizierung';
			}
			var info = $('.spinner');
			if ( info.hasClass("hidden") ){
				info.removeClass("hidden");
			}
	 	});
});

$('#verifWeiter').on("click", function(e){
	$('#verification')
	  .on('invalid.fndtn.abide', function () {
		e.preventDefault();
		e.stopPropagation();
	  })
	  .on('valid.fndtn.abide', function () {
		setTimeout(geheZuSeite, 1000);
			function geheZuSeite() {
				location.href='zweitmeinung/bestellen';
			}
			var info = $('.spinner');
			if ( info.hasClass("hidden") ){
				info.removeClass("hidden");
			}
	 	});
});

$('#agbWeiter').on("click", function(e){
	$('#agb')
	  .on('invalid.fndtn.abide', function () {
		e.preventDefault();
		e.stopPropagation();
	  })
	  .on('valid.fndtn.abide', function () {
			location.href='/zweitmeinung/dateneingabe';
	 	});
});