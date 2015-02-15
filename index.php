<!-- Een PHP tag ziet er zo uit: -->
<?php

// Deze comment kun je niet zien in de broncode van de pagina.

// om dingen die je in PHP doet te laten verschijnen in de broncode gebruik je
// "echo" of "print"

echo "Dit komt in de broncode";
print("En dit ook!");

// We hebben geen [enter] ge-echoed, dus deze twee stukjes tekst zullen achter
// elkaar staan.
// Op windows is een enter gelijk aan "\r\n", op Mac OS is het "\r" en op
// linux is het "\n".
// LET OP: De meeste servers draaien op Linux.

// in PHP eindigen alle opdrachten met een puntkomma.

// In PHP kun je net zoals bij wiskunde variabelen maken:

$variabel = 3;

// bijna alles wat je in wiskunden met een variabel kan doen, kan ook in PHP:
echo $variabel * 10 + 498 / 34 * 7;

// vermenigvuldigen:
$variabel * 10;

// delen
$variabel / 10;

// optellen
$variabel + 10;

// aftrekken
$variabel - 10;

// tot de macht:
pow($variabel, 10); // 3 ^ 10

// LET OP: hier boven hebben we iets gedaan met de variabel, maar we hebben de
// variabel nog niet opgeslagen. De variabel bevat tot dit punt nogsteeds de
// waarde 3.

// hieronder wordt de waarde van de variabel steeds verandert.
// verhogen met 1:
$variabel++; // $variabel is nu 4
// of
$variabel = $variabel + 1; // $variabel is nu 5

// verlagen met 1:
$variabel--; // $variabel is nu 4
// of
$variabel = $variabel - 1; // $variabel is nu 3

// verhogen met iets:
$variabel += 10; // $variabel is nu 13
// of
$variabel = $variabel + 10; // $variabel is nu 23

// verlagen met iets:
$variabel -= 10; // $variabel is nu 13
// of
$variabel = $variabel - 10; // $variabel is nu 3

// een variable kan behalve een getal ook tekst bevatten:

$tekst = "Dit is tekst.";

// je kan ook 2 variabelen samenvoegen met een "."

$nieuweVariabel = $tekst . $variabel;

// in PHP kun je tekst en getallen zonder enig probleem samenvoegen, bij
// andere programmeer talen kan dit wel een probleem vormen.


// functies zijn een handige manier om opdrachten herhaaldelijk uit te voeren
// zonder veel code.
// net zoals bij wiskunde bestaan ook in PHP functies:
function x($parameter)
{
	echo $parameter * 10;
}

// door het onderstaande zal er "200" op de pagina komen.
x(20);

// de naam van een functie kan ook meerdere tekens bevatten:
// een functie hoeft ook geen parameters te hebben.
function veelTekens()
{
	echo "Deze functie heeft veel tekens.";
}

// een naam van een functie kan alleen letters, cijfers en underscores bevatten.

// Als je een fout maakt, zal PHP het je vertellen:

echo $nietBestaandeVariabel; // Notice: Undefined Variable
echo 10 / 0; // Warning: Zero division
echo y(20); // Fatal error: undefined function

// je script stopt met uitvoeren als het een "Fatal Error" tegenkomt.


// in PHP kun je ook een lijst maken met meer variabelen, dit wordt een array genoemd:

$array = array("tekst 1", "tekst 2", 634);

// je kan informatie uit een array halen door middel van "keys".
// de keys van een array beginnen bij 0.

$tekst1 = $array[0];
$tekst2 = $array[1];
$getal = $array[2];

// je kan ook zelf bepalen wat de key wordt

$associativeArray = array(
	"key1" => "value1",
	"key2" => "value2",
	"key3" => "value3"
);

$value1 = $associativeArray["key1"];
// ...

// Dit is handig om data te groeperen. Je kan ook arrays in een array stoppen
// dit heet een multidimentional array

$array = array(
	"lijst1" => array(1, 2, 3),
	"lijst2" => array("een", "twee", "drie"),
	"lijst3" => array(
		"eerste" => "nummer 1",
		"tweede" => "nummer 2",
		"derde" => "nummer 3"
	)
);

// als je data uit een mutlidimentional array wilt halen doe je dat zo:

$nummer3 = 	$array["lijst3"]["derde"]; // "nummer 3"
$twee = 	$array["lijst2"][1]; // "twee"
$een = 		$array["lijst1"][0]; // 1

// er is geen limiet tot hoe "diep" je een multidimentional array kunt maken.

// Je kan ook data veranderen in een array:

$array["lijst3"]["eerste"] = "nummer 001";
$array["lijst3"]["tweede"] = "nummer 002";
$array["lijst3"]["derde"] = "nummer 003";
