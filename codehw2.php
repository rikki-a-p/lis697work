<html>
<body>
<h1> Challenge: ISBN Validation </h1>
<?php
/*An ISBN is a ten digit code which identifies a book. 
The first nine digits represent the book and the last digit is used to make sure the ISBN is correct.*/

$ISBN = "0553582011";

echo "<p>Checking ISBN: $ISBN for validity...</p>";

/*To verify that this is a valid ISBN, we will set up a function to test it mathmatically.
Each digit of the ISBN is defined as its own variable.*/

$a = 0;
$b = 5;
$c = 5;
$d = 3;
$e = 5;
$f = 8;
$g = 2;
$h = 0;
$i = 1;
$j = 1;

/* To verify an ISBN you do the following: 
1.	Obtain the sum of 10 times the first digit, 9 times the second digit, 
8 times the third digit... all the way till you add 1 times the last digit.
2.	Divide the sum by 11, if the sum leaves no remainder when divided by 11 the code is a valid ISBN.
A function is created to do this math.*/

function ISBNformula($a, $b, $c, $d, $e, $f, $g, $h, $i, $j) {
	$SumOfNumbers = (10 * $a) + (9 * $b) + (8 * $c) + (7 * $d) + (6 * $e) + (5 * $f) + (4 * $g) + (3 * $h) + (2 * $i) + (1 * $j);
	$Result = $SumOfNumbers / 11;
	return $Result;
}

/*$ReturnValue puts the function into action! $ReturnValue is the result of the math set up in the
function ISBNformula.*/
 
$ReturnValue = ISBNformula ($a, $b, $c, $d, $e, $f, $g, $h, $i, $j);

/*This if-else statment evalutes $ReturnValue with is_int. The is_int function is used to 
test whether the type of the specified variable is an integer or not.*/

if (is_int($ReturnValue))  
{  
echo "This is a valid ISBN!" ;  
}  
else  
{  
echo "This is NOT a vaild ISBN!" ;  
} 
?>

<h1>Challenge: Coin Toss</h1>
<?php
/*Create a PHP page that simulates a series of random coin tosses for 1, 3, 5, 7, and 9 flips.*/


/*Each statement starts with the amount of coins at 0 and a 'while' loop is created to produce a desired number of flips each time.*/
$coins = 0;
echo "<p>Flipping a coin 1 time...</p>";
while ($coins < 1) {
	$toss = mt_rand (0,1); /*mt_rand randomizes the flips, 0 = tails, 1 = heads*/
    $coins++; /*Increases amount of coins by 1 until the end of the loop.*/
if ($toss == 1){ /*If toss is heads*/
    echo "<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010_zpsqyqxsmzr.jpg' height='100', width='100'>";
}
else {$toss == 0;/*If toss is tails*/
    echo"<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010%20-%20Copy_zps4najflyw.jpg' height='100', width='100'>";
}
}

/*This process is done for 3, 5, 7, and 9 flips as well.*/
$coins = 0;
echo "<p>Flipping a coin 3 times...</p>";
while ($coins < 3) {
	$toss = mt_rand(0,1);
	$coins++;
if ($toss == 1){
	echo "<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010_zpsqyqxsmzr.jpg' height='100', width='100'>";
}
else {$toss == 0;
	echo"<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010%20-%20Copy_zps4najflyw.jpg' height='100', width='100'>";
}
}

$coins = 0;
echo "<p>Flipping a coin 5 times...</p>";
while ($coins < 5) {
	$toss = mt_rand(0,1);
	$coins++;
if ($toss == 1){
	echo "<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010_zpsqyqxsmzr.jpg' height='100', width='100'>";
}
else {$toss == 0;
	echo"<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010%20-%20Copy_zps4najflyw.jpg' height='100', width='100'>";
}
}

$coins = 0;
echo "<p>Flipping a coin 7 times...</p>";
while ($coins < 7) {
	$toss = mt_rand(0,1);
	$coins++;
if ($toss == 1){
	echo "<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010_zpsqyqxsmzr.jpg' height='100', width='100'>";
	}
else {$toss == 0;
	echo"<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010%20-%20Copy_zps4najflyw.jpg' height='100', width='100'>";
}
}

$coins = 0;
echo "<p>Flipping a coin 9 times...</p>";
while ($coins < 9) {
	$toss = mt_rand(0,1);
	$coins++;
if ($toss == 1){
	echo "<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010_zpsqyqxsmzr.jpg' height='100', width='100'>";
	}
else {$toss == 0;
	echo"<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010%20-%20Copy_zps4najflyw.jpg' height='100', width='100'>";
}
}

/*Additonal Comments: If I were to revisit this code in the future I would like to find a way to condenseit so I did not have so many repeated loops.*/

echo "<p>Beginning the coin flipping...</p>";

/*Starting values for total flips and heads.*/
$totalFlips = 0;
$heads = 0;

/*While heads is not equal to 2...; "while" statement tests the condition prior to executing the series of statements at each iteration of the loop. 
Do this if TRUE, exit loop once condition in FALSE*/
while ($heads != 2)
{
/*mt_rand() function returns a random value (heads or tails); ++ = increase, total flips will increase by 1 until heads != 2*/ 
	$recentFlip = mt_rand(0,1);
	$totalFlips ++;
/*1 of mt_rand = heads; if $recentFlip = 1, count of $heads increases by 1*/
            if ($recentFlip == 1){
                $heads ++;
echo "<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010_zpsqyqxsmzr.jpg' height='100', width='100'>";
}
/*0 of mt_rand = tails; if $recentFlip = 0, $heads is not affected*/
else
{
	echo "<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010%20-%20Copy_zps4najflyw.jpg' height='100', width='100'>";
};
};
echo "<p>Flipped two heads in $totalFlips flips!</p>";
?>
</body>
</html>