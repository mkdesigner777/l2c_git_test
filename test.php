<?php

// funkcia 2 ciselne parametre .... navratova hodnota bude sucet parametrov

$a = 2;
$b = 3;

function add($a, $b)
{
	return  $a + $b;
};
echo add(2,3);
echo "<br>";
echo add( add(2,3), add(3,2));

echo "<br>";

function display($text)
{
	echo $text;
}
display("Hello");

echo "<br>";
display( add(6,5));
echo "<br>";

function slovo($text, $index)
{
	$slova = explode(" ", $text);
	echo $slova[$index];
}
slovo("lorem impsum dolor", 2);
echo "<br>";

function nahodny_text()
{
	$texty = [
		"lorem", "ipsum", "dolor", "sit", "amet", "et", "laborum"
	];
	echo $texty[ mt_rand(0, count($texty)-1)];
}
nahodny_text();
echo "<br>";
nahodny_text();
echo "<br>";

function pripocitaj(&$a)
{
	 $a = $a + 1;
}
$a = 10;
pripocitaj($a);
echo $a;