<?php

// een van de nuttigste dingen in PHP zijn 'if' statements:
// hiermee kun je afhankelijk van voorwaarden verschillende stukken code uitvoeren.
// een if statement ziet er zo uit:

$naam = "Marc"; // ga er van uit dat dit uit een $_GET of $_POST array wordt gehaalt.

if ($naam == 'Marc')
{
	echo "Jouw naam is Marc!";
}

// oke wat betekend dit?
// allereerst zien we if, dit betekend dat we een if-statement maken.
// hierna zien we ($naam == 'Marc'), deze haakjes vertellen PHP waar het if-statement is.

// in die haakjes komt een boolean te staan. Zoals je hebt gezien in variabelen2punt0
// kun je doormiddel van de test $naam == 'Marc' een boolean maken.
// Als deze boolean true is, wordt het gedeelte in de lus eronder uitgevoerd.
// Als het false is niet, en slaat je script het over.


// Stel nou dat we willen dat er ook iets gebeurd als de voorwaarde niet waar is.
// Dit kunnen we doen met een else statement.
// een 'else-statement' komt na de accolade sluiten (}) van het if-statemnt.
// hier mogen comments of witruimte tussen zitten, zoals in dit voorbeeld.

else
{
	echo "Onze variabele is niet exact gelijk aan het getal 1";
}

// Maar wat nou als we meerdere mogelijkheden willen hebben? Bijvoorbeeld,
// als een gegeven naam gelijk is aan Marc, willen we dat er op de site komt te staan:

// 'Jij bent Marc'

// maar als diezelfde naam gelijk is aan Marc de Krosse, willen we ook dat er staat:

// 'Jij bent Marc'

// hoe doen we dit?

// Nou eigenlijk zeggen we hier: als de naam gelijk is aan 'Marc' OF gelijk
// is aan 'Marc de Krosse', doe dan {..}

// Hoe krijgen we deze OF in PHP?
// Gelukkig is dit heel simpel:

if ($naam == 'Marc' || $naam == 'Marc de Krosse')
{
	echo "Jij bent Marc";
}

// het nieuwe aan dit if-statement is || $naam == 'Marc de Krosse'
// $naam == 'Marc de Krosse' is gewoon weer een voorwaarde
// maar wat is dat || dan?

// || is een Logical operator