<html>
<body>
<h1> Challenge: Correct Change </h1>
<?php
/*
Write a program that takes a number representing the change due to a user (in cents) 
and writes out how many dollars, quarters, dimes, nickels, and pennies is due in change.
*/ 
$change = 199;

echo "You are due $change cents back in change total.<br>";

/*
doll = dollar; quar = quarter; dim = dime; nick = nickel; pen = pennies;
Integer cast type (int) to force an integer value;
Operator %= (Modulus) same as x = x % y
*/

$doll = (int) ($change/100); $change%=100;

$quar = (int) ($change/25); $change%=25;

$dim = (int) ($change/10); $change%=10;

$nick = (int) ($change/5); $change%=5;

$pen = (int) ($change/1); $change%=1;
	
echo "<p>You are due back $doll dollar(s), $quar quarter(s), 
$dim dime(s), $nick nickel(s), and $pen cent(s).";
?>

<h1>Challenge: 99 Bottles of Beer</h1>
<?php
/*
Write a PHP program that prints the full lyrics of the song "99 Bottles of Beer" on the page. 
Modify your code, such that you can print out the song for any number of starting beers.
*/
for ($count=7; $count>=1; --$count)
{
 echo "<p> $count bottles of beer on the wall, $count bottles of beer! </p>"; 
 
 echo "<p> Take one down pass it around, ".($count-1)." bottles of beer on the wall! </p>" ;
}
?>
</body>
</html>