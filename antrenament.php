<?php
echo "<h1>Exerciții practice. Laborator 1</h1>";
const CATEGORII = ["Ficțiune", "Știință", "Istorie"];
define('NUMELE_BIBLIOTECII', 'Biblioteca Municipală "Ion Creangă"');
const NUMAR_MAXIM_IMPRUMUTURI = 3;

echo "<p>La " . NUMELE_BIBLIOTECII . " un membru poate împrumuta maximum "
   . NUMAR_MAXIM_IMPRUMUTURI . " cărți din categoriile: "
   . implode(", ", CATEGORII) . ".</p>";

$totalCarti   = 137;
$numarRafturi = 10;

echo "<h3>Operatori aritmetici</h3>";
echo "Sumă:".($totalCarti + $numarRafturi)."<br>";
echo "Diferență:".($totalCarti - $numarRafturi)."<br>";
echo "Produs:".($totalCarti * $numarRafturi)."<br>";
echo "Împărțire:".($totalCarti / $numarRafturi)."<br>";
echo "Rest(modul):".($totalCarti % $numarRafturi)."<br>";
echo "Putere:".($totalCarti ** 2)."<br>";
$codCarte1 = "102";
$codCarte2 = 102;

echo "<h3>Comparare</h3>";
echo "== : "  . var_export($codCarte1 == $codCarte2, true)  . "<br>";
echo "=== : " . var_export($codCarte1 === $codCarte2, true) . "<br>";

$numarImprumutateTest = 9;
$numarExemplareTest   = 10;
$procentStoc = ($numarImprumutateTest / $numarExemplareTest) * 100;

$mesajStoc = $procentStoc >= 80 ? "Stoc redus, comandă cărți noi!" : "Stoc suficient.";
echo "<h3>Ternar</h3>";
echo "Procent împrumutat: " . number_format($procentStoc, 1) . "% - " . $mesajStoc . "<br>";

$titlu      = "Sapiens";
$autorCarte = "Yuval Noah Harari";

echo "<h3>Concatenare vs interpolare</h3>";
echo "Cartea '" . $titlu . "' este scrisă de " . $autorCarte . ".<br>";
echo "Cartea '$titlu' este scrisă de $autorCarte.<br>";
$venitLunarBiblioteca = 125990.5;
echo "<h3>Formatare numerică</h3>";
echo "Venit lunar: " . number_format($venitLunarBiblioteca, 2) . " lei";
?>