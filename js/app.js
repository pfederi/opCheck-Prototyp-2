

$('.firstAccordSave').click(function() {
	/* Act on the event */
	$('#panel2b').parent().addClass('active');
	$('#panel2b').addClass('active');
	$('#panel1b').removeClass('active');
	$(".firstPanel .checked").show();
	$('#panel1b').parent().removeClass('active');
});
$('.secondAccordSave').click(function() {
	/* Act on the event */
	$('#panel3b').parent().addClass('active');
	$('#panel3b').addClass('active');
	$('#panel2b').removeClass('active');
	$('#panel2b').parent().removeClass('active');
	$("#goTopanel2b .checked").show();
});
$('.thirdAccordSave').click(function() {
	/* Act on the event */
	$('#panel4b').parent().addClass('active');
	$('#panel4b').addClass('active');
	$('#panel3b').removeClass('active');
	$('#panel3b').parent().removeClass('active');
	$("#goTopanel3b .checked").show();
});
$('.fourthAccordSave').click(function() {
	/* Act on the event */
	$('#panel5b').parent().addClass('active');
	$('#panel5b').addClass('active');
	$('#panel4b').removeClass('active');
	$('#panel4b').parent().removeClass('active');
	$("#goTopanel4b .checked").show();
	$(".hiddenObject").addClass('visible');
});

$('.lastAccordCancel').click(function() {
		$(".checked").hide();
		$(".hiddenObject").removeClass('visible');
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