<html>
<style>
table {
	border: 5px dotted #D8FFF8;
	font-family: Century Gothic; Arial; Times;
	background-color: #CCCCFF;
}
tr {
	color: #000;
}
p {
	text-align: center;
	font-family: Century Gothic; Arial; Times;
	font-weight: bold;
	border: 5px dotted #FFFFFF;
	width: 200px;
	background-color: #D8FFF8;
}
</style>
<body>
<h1>Challenge:  Book lists</h1>
<?php
/*<style> adds CSS style*/
echo "<table border = 5>";
/*multi-dimensional array for the book data*/
$bookData = array(
	array("Title","Author", "Number of Pages", "Type", "Price"), 
	array("PHP and MySQL Web Development", "Luke Welling", 144, "Paperback", 31.63), 
	array("Web Design with HTML, CSS, JavaScript and jQuery", "Jon Duckett", 135, "Paperback", 41.23),
	array("PHP Cookbook: Solutions & Examples for PHP Programmers", "David Sklar", 14, "Paperback", 40.88),
	array("JavaScript and JQuery: Interactive Front-End Web Development", "Jon Duckett", 251, "Paperback", 22.09),
	array("Modern PHP: New Features and Good Practices", "Josh Lockhart", 7, "Paperback", 28.49),
	array("Programming PHP", "Kevin Tatroe", 26, "Paperback", 28.96)
	);
/*Foreach loops to access the data inside the array*/
/*$bookData = array, $item = key, $data = value*/
foreach($bookData as $item) {
 echo "<tr>";
  foreach($item as $data) {
    echo "<td>".$data."</td>";
  }
  echo "</tr>";
  };
echo "</table>";
/*This statment calculates total price if the user were to purchase all the books listed.
To access to the elements of the $bookData we must point to the two indices - row and column.
Staring from 0, all prices come from column 4 in the table/array; starting from 0, the first number refers to 
each string of the $bookData array.*/
echo "<p>";
echo "Your total price is: $".(($bookData[1][4])+($bookData[2][4])+($bookData[3][4])+($bookData[4][4])+($bookData[5][4])+($bookData[6][4]));
echo "</p>";
?>  

<h1>Challenge:  Coin Toss, continued</h1>
<?php
/*Repeat the coin exercise from HW2, but modify your program to 
1) Be a function that takes one argument – the number of heads in a row you'd like to flip
2) Modify your code to use this argument to allow a variable number of heads in a row to be chosen
You should print out the number of heads in a row you are seeking and the total number of flips it took. */

$headsFlipped = 8;
coinToss($headsFlipped);

function coinToss($headsFlipped) {

$previousFlip = 8;
$totalFlips = 0;
$heads = 0;

echo "Beginning the coin flipping, looking for $headsFlipped heads in a row....<br>";
while ($headsFlipped != $heads) {
	$recentFlip = mt_rand(0,1);
	$totalFlips ++;
/*1 of mt_rand = heads; if $recentFlip = 1, count of $heads increases by 1*/
	if ($recentFlip == 0){
	echo "<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010_zpsqyqxsmzr.jpg' height='100', width='100'>";
}
/*0 of mt_rand = tails; if $recentFlip = 0, $heads is not affected*/
	else {
	echo "<img src='http://i1383.photobucket.com/albums/ah299/rikkiap202/lincoln%20penny%202010%20-%20Copy_zps4najflyw.jpg' height='100', width='100'>";
	};
	if (($recentFlip == 0) & ($previousFlip == 0)) {
		echo "<br>Flipped $headsFlipped heads in a row in $totalFlips flips!";
		break;
	}
	$previousFlip = $recentFlip;
};
}
/*Had difficulty figuring out to make this function work. However, I was able to correct code issues from last week (getting two heads in a row).*/
?>
</body>
</html>