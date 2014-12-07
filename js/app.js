
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



/*$('.fourthAccordSave').click(function() {
	/* Act on the event */
/*	$('#panel5b').parent().addClass('active');
	$('#panel5b').addClass('active');
	$('#panel4b').removeClass('active');
	$('#panel4b').parent().removeClass('active');
	$("#goTopanel4b .checked").show();
	$(".hiddenObject").addClass('visible');*/
/*});*/

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