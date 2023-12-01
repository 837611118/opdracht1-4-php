<?php
// auteur: Abdulrahman Argalah
// Opdracht 4.1
$day = date("G");
if ($day >= 6 && $day < 12) {
    echo "Het is ochtend <br>";
} else if ($day >= 12 && $day < 18) {
    echo "Het is middag <br>";
} else if ($day >= 18 && $day < 24) {
    echo "Het is avond <br>";
} else {
    echo "Het is nacht <br>";
}
 
// Opdracht 4.2
$x = date("G");
$day = match (true) {
    $x >= 6 && $x < 12  => "Het is ochtend <br>",
    $x>= 12 && $x < 18 => "Het is middag <br>",
    $x >= 18 && $x < 24 => "Het is avond <br>",
    default => "Het is nacht <br>",
};
echo $day;
 
// Opdracht 4.3
$number1 = 10;
$number2 = 20;
 
$result1 = $number2 * 2 + $number1;
$result2 = $number1 * 2 + $number2;
 
if ($number1 < $number2) {
    echo "Uitkomst: "  . $number1;
} else {
    echo "Uitkomst: "  .  $number2;
}
 
// Opdracht 4.4
$oudeprijs = 30;
 
if ($oudeprijs > 150) {
    $verhogingspercentage = 19;
} else if ($oudeprijs < 55) {
    $verhogingspercentage = 11;
} else {
    $verhogingspercentage = 16;
}
 
$nieuwprijs = $oudeprijs * (1 + $verhogingspercentage / 100);
 
echo "Oude prijs: € " . $oudeprijs . " Na verhoging van " . $verhogingspercentage . "% is de prijs: €" . $nieuwprijs;
?>