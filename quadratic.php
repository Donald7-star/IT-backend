<?php
$a = readline("Enter value for a:");
$b = readline("Enter value for b:");
$c = readline("Enter value for c:");


$numeratorEven = (-$b + sqrt(pow($b, 2) - (4*($a * $c))));
$numeratorOdd = (-$b - sqrt(pow($b, 2) - (4*($a * $c))));
$denominator = (2 * $a);

$solution = round($numeratorEven / $denominator, 2);
$solution2 = round($numeratorOdd / $denominator, 2);


echo "$solution2, or $solution";
?> 