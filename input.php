<?php

// Je kan ook data naar de server sturen, zodat je die kan gebruiken in je script
// dit doe je doormiddel van GET en POST parameters.

// GET parameters kun je in je URL zetten (mijnsite.com?parameter1=value1&parameter2=value2)
// POST parameters kun je sturen doormiddel van een html <form> met als method "POST"
// (<form method="POST">)
// stel we hebben het volgende formulier:
?>
<form method="POST" action="verwerk.php">
	<input type="text" name="naam">
	<input type="submit" value="Verstuur">
</form>

<?php

// er zijn hier 2 input elementen: een text-field en een submit-button.
// je kan elk input en textarea element een "name" attribute geven.
// de waarde van het "name" attribuut komt overeen met de key in de GET of POST array.
// hetgene wat de bezoeker van jouw site heeft ingevuld (het "value" attribuut) zal dan de waarde zijn.

// Je kan forms ook een Get-method geven. Als je dit doet, en je verstuurd het formulier
// maakt je browser een "query-string" van alle data die is ingevuld. Dit wordt dan achter
// de URL geplakt

// stel we vullen bij het "naam" field "Marc" in, dan zul je zien dat in je PHP op het verwerk.php
// script $_POST["naam"] gelijk is aan "Marc". Als we de method van het formulier GET maken, in plaats van POST
// zul je zien dat zodra je het formulier verstuurd, je wordt doorgestuurd naar verwerk.php?naam=Marc.
// Hierna kun je in verwerk.php je data halen uit de _GET array ($_GET["naam"])

// Als je dingen verstuurd met een formulier moet je eigenlijk altijd POST als method gebruiken.
// GET wordt gebruik als je zelf een Query string maakt (in bijvoorbeeld een link: <a href="mijnblog.php?page=3">)

// je kan een formulier ook sturen naar dezelfde pagina:
?>
<form action="#" method="POST">
	<input type="text" name="naam">
	<input type="text" name="achternaam">
	<input type="submit" value="Verstuur">
</form>
<?php

// Laat het action attribuut niet leeg, dat is geen geldige HTML5
// code, en daar wordt Marc niet blij van. In plaats van het leeg te laten, kun
// je gewoon een # gebruiken (of de URL van de huidige pagina)