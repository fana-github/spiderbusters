<DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style/main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body>
		<nav>
			<a id="trigger">☰</a>
			<div id="bar">
			    <img id="logo" src="http://konstruktionsbuero-werthner.de/spiderbusters/logo.png" />
			</div>
			<ul id="mainmenu">
				<div>
					<li><a href="#home">Home</a></li>
					<li id="mainmenu-services"><a href="#">Leistungen</a><ul id="submenu-services">
							<li><a href="#services-iphone4"><img src="http://konstruktionsbuero-werthner.de/spiderbusters/subnav/iphone4.png" /><div>iPhone 4 / 4S</div></a></li>
							<li><a href="#services-iphone5"><img src="http://konstruktionsbuero-werthner.de/spiderbusters/subnav/iphone5.png" /><div>iPhone 5 / 5C / 5S</div></a></li>
							<li><a href="#services-iphone6"><img src="http://konstruktionsbuero-werthner.de/spiderbusters/subnav/iphone6.png" /><div>iPhone 6</div></a></li>
							<li><a href="#services-iphone6plus"><img src="http://konstruktionsbuero-werthner.de/spiderbusters/subnav/iphone6plus.png" /><div>iPhone 6Plus</div></a></li>
							<li><a href="#services-ipad"><img src="http://konstruktionsbuero-werthner.de/spiderbusters/subnav/ipad.png" /><div>iPad</div></a></li>
							<li><a href="#services-waterdamage"><img src="https://d30y9cdsu7xlg0.cloudfront.net/png/47270-200.png" /><div>Wasserschaden?</div></a></li>
						</ul>
					</li>
					<li><a href="#support">Support</a></li>
					<li><a href="#contact">Kontakt</a></li>
				</div>
			</ul>
		</nav>

		<div id="home"></div>
		
		<div class="row">
		<?php
			if($_GET["supportmailsent"] === "true")
			{
		?>
				<div class="mailinfo"><span>Mail versendet</span></div>	
		<?php
			}
			if($_GET["supportmailsent"] === "false")
			{
		?>
				<div class="mailinfo"><span>Mailversand nicht erfolgreich</span></div>
		<?php
			}
		?>
		</div>

		<div class="row">
			<div class="large-12 hero">
				<div id="hero-textbox">
					<h1>Sie haben ein <strong>Problem</strong> mit ihrem Apple-Gerät?</h1>
    					<p>iPhone.iPad.iPod.</p>
    					<div class="teaser-button"><a href="#services">Sofort helfen!</a></div>
    				</div>
		  		<img src="http://konstruktionsbuero-werthner.de/spiderbusters/hero.jpg">
			</div>	
		</div>
		
		<div id="services" class="row services-choose">
		      <div class="large-4 medium-4 small-12 phone-12">
		         <h2>Ihr Gerät ist defekt?</h2>
		         SPIDERBUSTERS bietet Ihnen schnellen sowie unkomplizierten Service bei iPhone & iPad Reparaturen aller Art. Zu fairen Preisen!
		      </div>
		      <div class="large-4 medium-4 small-12 phone-12">
		        <h3>Hier sofort starten</h3>
		        <div class="services-choose-box services-choose-box-start">
		           Gerät auswählen
		        </div>
		      </div>
		      <div class="large-4 medium-4 small-12 phone-12"> 
		      </div>
		</div>
		
		<div class="row services-choose-box-models">
		      <div class="large-2 medium-2 small-6 phone-6">
		        <div class="services-choose-box">
		          <a href="#services-iphone4">iPhone 4/4S</a>
		        </div>
		      </div>
		      <div class="large-2 medium-2 small-6 phone-6">
		        <div class="services-choose-box">
		          <a href="#services-iphone5">iPhone 5/5C</a>
		        </div>
		      </div>
		      <div class="large-2 medium-2 small-6 phone-6">
		        <div class="services-choose-box">
		          <a href="#services-iphone5">iPhone 5S</a>
		        </div>
		      </div>
		      <div class="large-2 medium-2 small-6 phone-6">
		        <div class="services-choose-box">
		          <a href="#services-iphone6">iPhone 6</a>
		        </div>
		      </div>
		      <div class="large-2 medium-2 small-6 phone-6">
		        <div class="services-choose-box">
		          <a href="#services-iphone6plus">iPhone 6Plus</a>
		        </div>
		      </div>
		      <div class="large-2 medium-2 small-6 phone-6">
		        <div class="services-choose-box">
		          <a href="#services-ipad">iPad</a>
		        </div>
		      </div>
		</div>

		<div class="row">
			<div class="large-12 medium-12 small-12 phone-12">
				<h3>Ihr Partner für iPhone Reparatur & mehr</h3>
				SPIDERBUSTERS ein deutschlandweit agierendes Unternehmen und Ihr Partner für iPhone Reparatur & mehr. 
				<br>Sie haben ein Problem mit ihrem Display, ihrem Sleep-Button oder Ähnliches? Kein Problem!
				<br>Sie wollen ein indiduelles Design für Ihr Gerät? Kein Problem!
				<br>Sie besitzen ein iPad und benötigen hier unsere Hilfe? Melden Sie sich!
			</div>
		</div>
		
		<div id="services-iphone4" class="row services anchorlink">
			<div class="large-12 medium-12 small-12 phone-12">
				<h2>iPhone 4 / 4S</h2>
			</div>

			<div class="services-description large-4 medium-6 small-7 phone-12">
		  		<h3>Leistungen & Preise</h3>
				  <table>
				    <tr id="services-iphone4-entry0" class="active"><td>Display</td><td>79,-€</td></tr>
				    <tr id="services-iphone4-entry1"><td>Backcover</td><td>69,-€</td></tr>
				    <tr id="services-iphone4-entry2"><td>Akku</td><td>19,-€</td></tr>
				    <tr id="services-iphone4-entry3"><td>Kamera</td><td>39,-€</td></tr>
				    <tr id="services-iphone4-entry4"><td>Sleep-,Volume- oder Mute-Button</td><td>19,-€</td></tr>
				    <tr id="services-iphone4-entry5"><td>Kopfhöreranschluss</td><td>19,-€</td></tr>
				    <tr id="services-iphone4-entry6"><td>Ladekabelanschluss</td><td>19,-€</td></tr>
				    <tr id="services-iphone4-entry7"><td>Lautsprecher u. Mikrofon</td><td>19,-€</td></tr>
				  </table>
			</div>
			<div class="services-img large-8 medium-6 small-5 phone-12">
		  		<img class="services-iphone4-entry active" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone.png" />
		  		<img class="services-iphone4-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone2.png" />
		  		<img class="services-iphone4-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone3.png" />
		  		<img class="services-iphone4-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone.png" />
		  		<img class="services-iphone4-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone2.png" />
		  		<img class="services-iphone4-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone3.png" />
		  		<img class="services-iphone4-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone.png" />
		  		<img class="services-iphone4-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone2.png" />
			</div>
		</div>
		
		<div id="services-iphone5" class="row services anchorlink">
			<div class="large-12 medium-12 small-12 phone-12">
				<h2>iPhone 5 / 5C / 5S</h2>
			</div>

			<div class="services-description large-4 medium-6 small-7 phone-12">
		  		<h3>Leistungen & Preise</h3>
				  <table>
				    <tr id="services-iphone5-entry0" class="active"><td>Display</td><td>79,-€</td></tr>
				    <tr id="services-iphone5-entry1"><td>Backcover</td><td>69,-€</td></tr>
				    <tr id="services-iphone5-entry2"><td>Akku</td><td>19,-€</td></tr>
				    <tr id="services-iphone5-entry3"><td>Kamera</td><td>39,-€</td></tr>
				    <tr id="services-iphone5-entry4"><td>Sleep-,Volume- oder Mute-Button</td><td>19,-€</td></tr>
				    <tr id="services-iphone5-entry5"><td>Kopfhöreranschluss</td><td>19,-€</td></tr>
				    <tr id="services-iphone5-entry6"><td>Ladekabelanschluss</td><td>19,-€</td></tr>
				    <tr id="services-iphone5-entry7"><td>Lautsprecher u. Mikrofon</td><td>19,-€</td></tr>
				  </table>
			</div>
			<div class="services-img large-8 medium-6 small-5 phone-12">
		  		<img class="services-iphone5-entry active" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone.png" />
		  		<img class="services-iphone5-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone2.png" />
		  		<img class="services-iphone5-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone3.png" />
		  		<img class="services-iphone5-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone.png" />
		  		<img class="services-iphone5-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone2.png" />
		  		<img class="services-iphone5-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone3.png" />
		  		<img class="services-iphone5-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone.png" />
		  		<img class="services-iphone5-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone2.png" />
			</div>
		</div>
		
		<div id="services-iphone6" class="row services anchorlink">
			<div class="large-12 medium-12 small-12 phone-12">
				<h2>iPhone 6</h2>
			</div>

			<div class="services-description large-4 medium-6 small-7 phone-12">
		  		<h3>Leistungen & Preise</h3>
				  <table>
				    <tr id="services-iphone6-entry0" class="active"><td>Display</td><td>79,-€</td></tr>
				    <tr id="services-iphone6-entry1"><td>Backcover</td><td>69,-€</td></tr>
				    <tr id="services-iphone6-entry2"><td>Akku</td><td>19,-€</td></tr>
				    <tr id="services-iphone6-entry3"><td>Kamera</td><td>39,-€</td></tr>
				    <tr id="services-iphone6-entry4"><td>Sleep-,Volume- oder Mute-Button</td><td>19,-€</td></tr>
				    <tr id="services-iphone6-entry5"><td>Kopfhöreranschluss</td><td>19,-€</td></tr>
				    <tr id="services-iphone6-entry6"><td>Ladekabelanschluss</td><td>19,-€</td></tr>
				    <tr id="services-iphone6-entry7"><td>Lautsprecher u. Mikrofon</td><td>19,-€</td></tr>
				  </table>
			</div>
			<div class="services-img large-8 medium-6 small-5 phone-12">
		  		<img class="services-iphone6-entry active" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone.png" />
		  		<img class="services-iphone6-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone2.png" />
		  		<img class="services-iphone6-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone3.png" />
		  		<img class="services-iphone6-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone.png" />
		  		<img class="services-iphone6-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone2.png" />
		  		<img class="services-iphone6-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone3.png" />
		  		<img class="services-iphone6-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone.png" />
		  		<img class="services-iphone6-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone2.png" />
			</div>
		</div>
		
		<div id="services-iphone6plus" class="row services anchorlink">
			<div class="large-12 medium-12 small-12 phone-12">
				<h2>iPhone 6Plus</h2>
			</div>

			<div class="services-description large-4 medium-6 small-7 phone-12">
		  		<h3>Leistungen & Preise</h3>
				  <table>
				    <tr id="services-iphone6plus-entry0" class="active"><td>Display</td><td>79,-€</td></tr>
				    <tr id="services-iphone6plus-entry1"><td>Backcover</td><td>69,-€</td></tr>
				    <tr id="services-iphone6plus-entry2"><td>Akku</td><td>19,-€</td></tr>
				    <tr id="services-iphone6plus-entry3"><td>Kamera</td><td>39,-€</td></tr>
				    <tr id="services-iphone6plus-entry4"><td>Sleep-,Volume- oder Mute-Button</td><td>19,-€</td></tr>
				    <tr id="services-iphone6plus-entry5"><td>Kopfhöreranschluss</td><td>19,-€</td></tr>
				    <tr id="services-iphone6plus-entry6"><td>Ladekabelanschluss</td><td>19,-€</td></tr>
				    <tr id="services-iphone6plus-entry7"><td>Lautsprecher u. Mikrofon</td><td>19,-€</td></tr>
				  </table>
			</div>
			<div class="services-img large-8 medium-6 small-5 phone-12">
		  		<img class="services-iphone6plus-entry active" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone.png" />
		  		<img class="services-iphone6plus-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone2.png" />
		  		<img class="services-iphone6plus-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone3.png" />
		  		<img class="services-iphone6plus-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone.png" />
		  		<img class="services-iphone6plus-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone2.png" />
		  		<img class="services-iphone6plus-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone3.png" />
		  		<img class="services-iphone6plus-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone.png" />
		  		<img class="services-iphone6plus-entry" src="http://konstruktionsbuero-werthner.de/spiderbusters/iphone2.png" />
			</div>
		</div>
		
		<div id="services-ipad" class="row services anchorlink">
			<div class="large-12 medium-12 small-12 phone-12">
				<h2>iPad</h2>
			</div>

			<div class="large-8 medium-8 small-6 phone-12">
		  		<img src="https://download.fotolia.com/Content/CompImage500/FotoliaComp_47421636_I7E2e37bFN7TElUWLcwkHnSoDIlFUCtd_W95" />
			</div>
			<div class="large-4 medium-4 small-6 phone-12">
		  		Individuelle Angebote bzgl. iPad Reparatur erhalten Sie via Mail/Telefon.<br>
		  		Schnelle & geradlinige Lösungen sind unser Anspruch!<br>
		  		<div class="services-choose-box services-choose-box-red"><a href="#support">...via Mail</a></div>
		  		<div class="services-choose-box services-choose-box-red"><a href="#contact">...ich möchte anrufen!</a></div>
			</div>
		</div>
		
		<div id="services-waterdamage" class="row services anchorlink">
			<div class="large-5 medium-5 small-6 phone-12">
				<h2>Sie haben einen Wasserschaden?</h2>
		  		Ein Wasserschaden kann diverse Teile in Mitleidenschaft gezogen haben.<br>
		  		Melden Sie sich bei unser über das Kontaktformular oder per Telefon und wir bieten Ihnen indiviuelle Beratung & Reparaturangebote!<br>
		  		<div class="services-choose-box services-choose-box-red"><a href="#support">...ich möchte schreiben!</a></div>
		  		<div class="services-choose-box services-choose-box-red"><a href="#contact">...wie ist die Tel.Nummer?</a></div>
			</div>
			<div class="large-7 medium-7 small-6 phone-12">
		  		<img src="http://konstruktionsbuero-werthner.de/spiderbusters/waterdamage.jpg" />
			</div>
		</div>
		
		<div id="support" class="row anchorlink">
			<div class="large-12 medium-12 small-12 phone-12">
				<h1>Support</h1>
			</div>
		</div>
		<div class="row">
			<div class="large-6 medium-6 small-0 phone-0">
				<img src="http://konstruktionsbuero-werthner.de/spiderbusters/support.jpg" />
			</div>
			<div class="large-6 medium-6 small-12 phone-12 supportrequest">
				<h3>Probleme oder Speziallösungen?</h3>
				Wenn Sie Ihre benötigte Reparatur nicht finden oder individuelle Lösungen, wie ein z.B. ausgefallendes Backcover benötigen, kümmern wir uns gerne um Ihr Anliegen.
				<br>Teilen Sie uns Ihr Anliegen mit und wir nehmen unverzüglich Kontakt zu Ihnen auf.
				
				<form method="post" action="sendsupportmail.php">
					<div>
					  <label class="support_label large-4 medium-4 small-12 phone-12">Name:</label>
					  <input class="large-8 medium-8 small-12 phone-12" type="text" id="support_fullname" name="full_name" placeholder="Max Mustermann" required />
					</div>
					<div>
					  <label class="support_label large-4 medium-4 small-12 phone-12">Tel:</label>
					  <input class="large-8 medium-8 small-12 phone-12" type="tel" id="support_tel" name="tel" placeholder="0123 987654321" required />
					</div>
					<div>
					  <label class="support_label large-4 medium-4 small-12 phone-12">Email:</label>
					  <input class="large-8 medium-8 small-12 phone-12" type="email" id="support_emailaddr" name="email_addr" placeholder="max.mustermann@example.com" required />
					</div>
					<div>
					  <label class="support_label large-4 medium-4 small-12 phone-12">Ihr Anliegen:</label>
					  <textarea class="large-8 medium-8 small-12 phone-12" id="support_comment" name="comment" rows="6" cols="80" placeholder="Hallo liebes Spiderbusters-Team, ist es möglich ein Backcover in Rot zu verbauen?"></textarea>
					 </div> 
					 <input type="submit" value="Senden" /> 
				</form>
			</div>	
		</div>
		
		<div id="contact" class="row anchorlink">
			<div class="large-12 medium-12 small-12 phone-12">
				<h1>Kontakt</h1>
			</div>
		</div>
		<div class="row">
			<div class="large-5 medium-5 small-12 phone-12">
				Sie haben Fragen und bevorzugen den persönlich Kontakt?<br>
				Rufen Sie doch einfach an oder schreiben uns via Whatsapp!
			</div>
			<div class="large-7 medium-7 small-12 phone-12">
				<span class="tel">(+49) 160 94 86 89 27</span>
			</div>
		</div>
	</body>
	<footer>
		<div class="row">
			<div class="large-6 medium-6 small-6 phone-6">
				<h3>Navigation</h3>
				<a href="#home">Home</a><br>
				<a href="#services">Leistungen</a><br>
				<a href="#support">Support</a><br>
				<a href="#contact">Kontakt</a>
			</div>
			<div class="large-6 medium-6 small-6 phone-6">
				<h3>Links</h3>
				<a href="infos.php" target="_blank">Impressum</a><br>
				<a href="infos.php#agb" target="_blank">AGB</a>
			</div>
		</div>
		<div class="row">
			<div class="copyright large-12 medium-12 small-12 phone-12">
				Copyright © Sergej Zurba
			</div>
		</div>
	</footer>
</html>
