<?php

// Tot nu toe (eerste voorbeeld) hebben we 3 soorten variabelen gezien:

// een string (tekst)
// een integer (getal)
// een array (lijst)

// er zijn nog twee soorten, namelijk een Boolean (ja of nee) en een Object
// hoef je nu nog niet aan te denken

// met name de Boolean is belangrijk om te kennen.

// een boolean kan de waarde True of False bevatten. Deze betekenen
// respectievelijk Ja of Nee. Je kan het ook zien als Aan of Uit. Als dit je
// doet denken aan het binaire stelsel, ben je goed bezig.

$boolean = true;

// Wat is er nou zo speciaal aan die booleans?

// Je kan er vergelijkingen mee doen. Een vergelijking maken, doe je met
// behulp van een Comparison Operator.

// Hier zijn er een paar van:
//
// == 	(komt overeen met)
// === 	(exact gelijk aan)
// < 	(kleiner dan)
// > 	(groter dan)
// <= 	(kleiner dan of geijk aan)
// >= 	(groter dan of gelijk aan)
// != 	(komt niet overeen met)
// !== 	(is niet exact gelijk aan)
//
// het resultaat van zo'n comparison operator is ALTIJD een Boolean (ja of nee).
// met andere worden: Klopt de vergelijk, of klopt hij niet\
//
// Voorbeeld:

3 > 2; // true

50 < 43; // false

'Hallo' == 'Hoi'; // false

'Dit is wat tekst' == 'Dit is ' . 'wat tekst'; // true

1 != 'asdf'; // true (1 komt niet overeen met 'asdf')

45 >= 45; // true

$getal = 10;
10 < $getal; // false

// Als je het resultaat van zo'n vergelijk opslaat in een variabele heet het
// een boolean.

$boolean = 56 > 102; // false


// Het verschil tussen == en === (ook != en !==)

// Stel we hebben de tekst '1' en het getal 1. Als we willen kijken of '1' gelijk
// is aan iets zullen we zoiets doen:

$iets = 1;

'1' == $iets; // true
// in dit geval, omdat $iets geljk is aan het getal 1, komt hier true uit, want
// het getal 1 komt overeen met de tekst '1'

// Wat nou als we hier === van maken?

'1' === $iets; // false

// Hier komt false uit, want 1 is niet exact gelijk aan '1'

// Als je === of !== gebruikt controleert PHP ook of het type variabele (string, integer, boolean, object, array etc..)
// gelijk is. Hier is dit niet het geval, want we vergelijken een string met een integer.