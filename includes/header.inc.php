  <!doctype html>
<html class="no-js" lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>opCheck</title>
    <link rel="stylesheet" href="../css/app.css" />
<!--
    <link rel="stylesheet" href="../css/layout-kate.css" />
    <link rel="stylesheet" href="../css/layout-darko.css" />
-->
    <link rel="stylesheet" href="../css/layout.css" />
    <link rel="stylesheet" href="../css/dropzone.css" />
    <script src="../bower_components/modernizr/modernizr.js"></script>
    <script src="../js/hyphenator/hyphenator-loader-1.1.min.js"></script>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- FEEDBACK BUTTON -->

<script type='text/javascript'>
	var BugHerdConfig = {
    feedback: {
      tab_text: "Problem melden",
      option_title_text: "Wählen Sie eine Option",
      option_pin_text: "Feedback zu einem bestimmten Teil dieser Seite",
      option_site_text: "Feedback zu dieser Seite oder Website als Ganzes",
      pin_instruction_text: "Bewegen Sie den Mauszeiger über Seitenelemente um sie zu markieren und klicken Sie, um eine Anmerkung zu erstellen.",
      feedback_entry_placeholder: "Schreiben Sie einen Kommentar oder beschreiben Sie das Problem.",
      feedback_email_placeholder: "Ihre E-Mail-Adresse",
      feedback_submit_text: "Feedback senden",
      confirm_success_text: "Ihr Feedback wurde gesendet.",
      confirm_loading_text: "Feedback wird gesendet.",
      confirm_close_text: "schliessen",
      confirm_error_text: "Feedback erfolgreich abgeschickt.",
      confirm_retry_text: "Neuer Versuch",
      confirm_extension_text: "Wussten Sie, dass Sie einen Screenshot mit Ihrem Fehler Report senden können?",
      confirm_extension_link_text: "So geht's.",
      }
	  };
	(function (d, t) {
	  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
	  bh.type = 'text/javascript';
	  bh.src = '//www.bugherd.com/sidebarv2.js?apikey=xueuiiafbw4xjrmgahchkq';
	  s.parentNode.insertBefore(bh, s);
	  })(document, 'script');
	</script>

	<!-- END FEEDBACK BUTTON -->
  </head>
  
  <body>	 


	<header class="fixed">
		<div class="prototypnummer">Prototyp 2</div>
		<div class="row">
			<div class="large-4 medium-4 columns">
				<a href="/" class="logo">opCheck</a>
			</div>
			<div class="large-8 medium-8 columns">
				<?php
					$str1='<form action="/login"><button>Logout</button></form>';
					$str2='<form action="/login"><button>Registrieren / Login</button></form>';
				    if ($_SERVER['REQUEST_URI'] == '/zweitmeinung/bestellen' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/dateneingabe' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/datenpruefung' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/spezialistenauswahl' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/gespraech' or $_SERVER['REQUEST_URI'] == '/zweitmeinung/befund') {
						echo $str1;
						} else {
						echo $str2;
						}
					?>
				<ul id="lstHauptnavigation">
					<li><a href="/ueber-uns">Über uns</a></li>
					<li><a href="/patienten-informationen">Patienten-Informationen</a></li>
					<li><a href="/aerzte-zugang">Ärzte-Zugang</a></li>
				</ul>
			</div>
		</div>
	</header>
	<div id="divLayout">