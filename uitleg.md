#PHP, een Serverside programmeertaal
PHP is een serverside programmeertaal. Elke regel PHP die je typt
zal niet terug te zien zijn in je browser. Het verschil tussen HTML en PHP is dat
PHP niet altijd de zelfde output heeft, en HTML wel. In PHP kun je mail versturen,
random getallen genereren, communiceren met een database en nog veel meer. HTML is
net zoals MarkDown (waar deze pagina in is geschreven) een manier om tekst er wat mooier
uit te laten zien.

#De Basis

##Waar schrijf ik PHP code?

PHP code schrijf je in een `.php` bestand. Je kan tussen je HTML (of voor, of na)
een PHP-tag zetten. Tussen PHP-tags zet je PHP code neer.

Een PHP-tag ziet er als volgt uit:

openen: `<?php`

sluiten: `?>`

Als je PHP code als laatste op je pagina hebt, hoef je geen sluit-tag neer te zetten.

Een voorbeeld van een pagina met PHP

```php
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<meta charset="UTF-8">
		<title>Mijn geweldige PHP Pagina!</title>
	</head>

	<body>
		<?php echo "Dit is gemaakt door PHP (uitleg over wat dit is komt later)"; ?>
		<h1>Welkom op mijn pagina met PHP</h1>
		...
	</body>
</html>
```

PHP code 'doet' dingen, en HTML code is een andere manier om dingen te laten zien.
De reset van deze pagina gaat over hoe je dingen met PHP code kunt doen.

##Soorten Variabelen
Om te beginnen met PHP wil ik het over variabelen gaan hebben. Een variabele is een
tijdelijke opslag voor een stukje data. Dit kan een stukje tekst zijn, een getal,
of zelfs een lijst met andere variabelen.

Er zijn 5 soorten variabelen in PHP:

* string (tekst)
* integer (getal)
* boolean (ja of nee)
* array (lijst met andere variabelen)
* object (een lijst, maar ook met functies, Hoef je je nog geen zorgen over te maken)

##Hoe maak je een variabele?
Een variabele maken in PHP is verrassend simpel
```php
$variabele = 'waarde van de variabele (dit is tekst)';
```

Nu is de tekst 'waarde van de variabele (dit is tekst)' opgeslagen in de variabele $variabele.
Als je een variabele wilt maken in PHP, begin je altijd met een $. Daarna komt de naam.
Dit kan (bijna) alles zijn. Hier zijn een paar voorwaarden voor:

* Een variabele mag niet met een getal beginnen (getallen mogen er wel in voorkomen).
* Een variabele mag geen witruimte of speciale tekens bevatten (met uitzondering van de _)

###Arrays
Een array is een lijst met een meerdere variabelen. Het is heel praktisch om
gegevens te groepperen. Je maakt een array doormiddel van de array() functie.

```php
$lijst = array(
	'ding1', 'ding2', 3, 'ding4'
);
```

Je mag zo veel dingen als je maar wilt in een array stoppen.
Je zal jezelf nu wel afvragen, hoe kan ik dan bij die dingen als $lijst alle
dingen tegelijk zijn?

Bij een array gebruiken we 'keys'. Elk item in een array heeft een key (een index)
PHP arrays zijn zero-indexed. Dit betekend dat het 1e item in een array, de key 0 heeft (integer)

om bij `'ding1'` te komen, kunnen we dus `$lijst[0]` doen.

####Associative Arrays
Je kan bij arrays ook zelf bepalen wat de key word.
```php

$lijst = array(
	'key1' => 'ding1',
	'key2' => 'ding2'
);
```

Dit wordt een associative array genoemd.

####Mutlidimentional arrays
Je kan ook een array in een array stoppen. Dit heet een mutlidimentional array.

```php
$lijst = array(
	'anderelijst1' => array(
		'key1.1' => 'ding1.1',
		'key1.2' => 'ding1.2'
	),

	'anderelijst2' => array(
		'key2.1' => 'ding2.1',
		'key2.2' => 'ding2.2'
	)
);
```

Je kan oneindig veel niveaus diep gaan.
Om gegevens uit een multidimentional array te halen doe je het volgende:
```php
// let op: je kan deze variabele niet $ding2.1 noemen, want een . is een speciaal teken
$ding21 = $lijst['anderelijst2']['key2.2']
```

##Booleans

Een Boolean betekend `true` of `false`. Je kan een boolean maken net als
alle andere variabelen:

```php
$boolean = true;
```

###Comparison Operators

Met booleans is echter iets speciaals aan de hand. Een boolean is namelijk de
uitkomst van een vergelijking van twee dingen (true: klopt wel, false: klopt niet)

In PHP doen we vergelijkingen met Comparison Operators:

Operator|Betekenis
--------|---------------------------
==		|Komt overeen met
===		|Is exact gelijk aan
!=		|Komt niet overeen met
!==		|Is niet exact gelijk aan
<		|Kleiner dan
<=		|Kleiner dan of gelijk aan
>		|Groter dan
>=		|Groter dan of gelijk aan
