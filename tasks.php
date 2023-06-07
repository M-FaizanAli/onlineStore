<?php

$linebreak = "<br>";

// 1. $color = array('white', 'green', 'red', 'blue', 'black');
// Write a script which will display the following string -
// "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// and the words 'red', 'green' and 'white' will come from $color.


echo "<h2>Question 1</h2>";
echo "<h4>Displaying the string and the words 'red', 'green' and 'white' are coming from 'color' string. </h4>";

$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the <b> $color[2] </b>carpet, the <b>$color[1]</b> lawn, the<b> $color[0]</b> house, <br> the leaden sky. The new president and his first lady. - Richard M. Nixon ";

echo $linebreak;




// 2. Write a PHP function to change the following array's all values to upper or lower case.
// Sample arrays :
// $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
// Expected Output :
// Values are in lower case.
// Array ( [A] => blue [B] => green [c] => red ) 
// Values are in upper case.
// Array ( [A] => BLUE [B] => GREEN [c] => RED )

echo "<h2>Question 2</h2>";

function ValuesToLower($array)
{
    return array_map('strtolower', $array);
}

$Colors = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

$upperCaseArray = ValuesToLower($Colors);

echo "<h4>Values are in lower case.</h4>";
print_r($upperCaseArray);


function ValuesToUpper($array)
{
    return array_map('strtoupper', $array);
}

$Colors = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

$UpperCaseArray = ValuesToUpper($Colors);

echo $linebreak;
echo "<h4>Values are in Upper case.</h4>";
print_r($UpperCaseArray);




// 3. Write a PHP script to generate unique random numbers within a range.
//      Sample Range : (11, 20)


echo "<h2>Question 3</h2>";
echo "<h4>Refresh page to get unique random numbers within a range of (50 to 100)</h4>";
echo rand(50, 100);



// 4. Write a PHP script to lower-case and upper-case,
//  all elements in an array.

echo "<h2>Question 4</h2>";
echo "<h4>PHP script to lower-case and upper-case</h4>";

$user = array("Name" => "Faizan", "class" => "web app development", "religion" => "Islam");
print_r(array_change_key_case($user, CASE_UPPER));
echo $linebreak;

print_r(array_change_key_case($user, CASE_LOWER));




// 5. If you have an array $a = array( 0, 1, 2, 3, 4 );
//  how do you extract the value "3" from the array? 


echo "<h2>Question 5</h2>";
echo "<h4>Extracting the value '3' from the array ( 0, 1, 2, 3, 4 )</h4>";

$a = array(0, 1, 2, 3, 4);

echo " <b> $a[3]</b> ";





// 6. If you have an array $a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );,
//  how do you extract the value 3 from the array?

echo "<h2>Question 6</h2>";
echo "<h4>Extracting the value 3 from the array ( 'zero'=>0, 'one'=>1, 'two'=>2, 'three'=>3, 'four'=>4 ) </h4>";

$a = array("zero" => 0, "one" => 1, "two" => 2, "three" => 3, "four" => 4);

echo "The value is  <b>" . $a['three'] . "</b> ";




// 7. You have two arrays like the following. One contains field labels, the other contains field values.
// Write a program to output the third array.

echo "<h2>Question 7</h2>";
echo "<h4>Combining two arrays 'keys' and 'values' into one 'keysAndValues'.</h4>";

$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keysAndValues  = array_combine($keys, $values);

print_r($keysAndValues);






// 8. You have an array of transactions, each of which has a debit and credit amount. 
// Find the absolute value of the transaction amount (i.e. abs( debit - credit ))  
// and add it as a new key=>value pair to each transaction.

echo "<h2>Question 8</h2>";
echo "<h4>Finding the absolute value of the transaction amount (i.e. abs( debit - credit )) from transactions array and adding it as a new key=>value pair to each transaction.</h4>";


$transactions = array(
    array(
        "debit" => 2,
        "credit" => 3
    ),
    array(
        "debit" => 15,
        "credit" => 14
    )
);

foreach ($transactions as &$transaction) {
    $transaction["amount"] = abs($transaction["debit"] - $transaction["credit"]);
}

print_r($transactions);




// 9. Find the sum of this array of numbers $a = array( 0, 1, 2, 3, 4, 5, 6 );


echo "<h2>Question 9</h2>";
echo "<h4>The sum of this array of numbers 'a = array( 0, 1, 2, 3, 4, 5, 6 )'</h4>";

$a = array(0, 1, 2, 3, 4, 5, 6);
echo "The sum of array is <b>" . array_sum($a) . "<b>.";



// 10. Create a script that displays 1-2-3-4-5-6-7-8-9---100 on one line.
//  There will be no hyphen(-) at starting and ending position.

echo "<h2>Question 10</h2>";
echo "<h4>A script that displays 1-2-3-4-5-6-7-8-9---100 on one line</h4>";

$numbers = implode('-', range(1, 100));
echo $numbers;



// 11. Create a script using a for loop to add all
//  the integers between 0 and 100 and display the total.

echo "<h2>Question 11</h2>";
echo "<h4>A script that displays 1-2-3-4-5-6-7-8-9---100 on one line</h4>";

$total = 0;
for ($i = 0; $i <= 100; $i++) {
    $total += $i;
}

echo "The total is: " . $total;





// 12. Create a script to construct the following pattern, using nested for loop.
// *  
// * *  
// * * *  
// * * * *  
// * * * * *   


echo "<h2>Question 12</h2>";
echo "<h4>A script to construct a pattern, using nested for loop</h4>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}


// 13. Create a script to construct the following pattern, using a nested for loop.
// * 
// * * 
// * * * 
// * * * * 
// * * * * * 
// * * * * * 
// * * * * 
// * * * 
// * * 
// * 


echo "<h2>Question 13</h2>";
echo "<h4>A script to construct a pattern, using nested for loop</h4>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

for ($i = 4; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

// 14. Write a program to calculate and print the factorial of a number using a for loop. 
// The factorial of a number is the product of all integers up to and including that number,
// so the factorial of 5 is 5*4*3*2*1= 120. 

echo "<h2>Question 14</h2>";
echo "<h4>A script to construct a pattern, using nested for loop</h4>";

$n = 5;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}

echo "The factorial of $n is: <b> $factorial </b>";


// 15. Write a program which will count the "e" characters in the text "w3resource". 

echo "<h2>Question 15</h2>";
echo "<h4>Program counts the 'e' characters in the text 'w3resource'</h4>";

echo substr_count("w3resource", "e");


// 16. Write a PHP script using nested for loop that creates a chess board as shown below.
// Use table width="270px" and take 30px as cell height and width.


echo "<h2>Question 16</h2>";
echo "<h4>PHP script using nested for loop that creates a chess board.</h4>";

echo '<table border="2px solid" width="270px" cellspacing="0" cellpadding="0">';
for ($row = 1; $row <= 8; $row++) {
    echo '<tr>';
    for ($col = 1; $col <= 8; $col++) {
        if (($row + $col) % 2 === 0) {
            $color = 'white';
        } else {
            $color = 'black';
        }
        echo '<td height="30px" width="30px" style="background-color:' . $color . ';"></td>';
    }
    echo '</tr>';
}
echo '</table>';



// 17. Write a PHP program which iterates the integers from 1 to 50.
// For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". 
// For numbers which are multiples of both three and five print "FizzBuzz". 

echo "<h2>Question 17</h2>";
echo "<h4>Printing 'fizz' and 'buzz' instead of the multiples of five and three and 'fizzbuzz' for both multiples.</h4>";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 === 0) {
        echo "Fizz ";
    } elseif ($i % 5 === 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}



// 18. Write a PHP program to print alphabet pattern 'H'.

echo "<h2>Question 18</h2>";
echo "<h4>A PHP program to print alphabet pattern 'H'.</h4>";



$letterH = array(
    array('*', '&nbsp;&nbsp;', '&nbsp;&nbsp;', '*', '&nbsp;&nbsp;', '&nbsp;&nbsp;'),
    array('*', '&nbsp;&nbsp;', '&nbsp;&nbsp;', '*', '&nbsp;&nbsp;', '&nbsp;&nbsp;'),
    array('*', '&nbsp;&nbsp;', '&nbsp;&nbsp;', '*', '&nbsp;&nbsp;', '&nbsp;&nbsp;'),
    array('*', '*', '*', '*', '&nbsp;&nbsp;'),
    array('*', '&nbsp;&nbsp;', '&nbsp;&nbsp;', '*', '&nbsp;&nbsp;', '&nbsp;&nbsp;'),
    array('*', '&nbsp;&nbsp;', '&nbsp;&nbsp;', '*', '&nbsp;&nbsp;', '&nbsp;&nbsp;'),
    array('*', '&nbsp;&nbsp;', '&nbsp;&nbsp;', '*', '&nbsp;&nbsp;', '&nbsp;&nbsp;'),
);

// Printing the letter H
foreach ($letterH as $row) {
    foreach ($row as $char) {
        echo $char;
    }
    echo "</br>"; // Move to the next line
}


echo "____________ New logic ____________</br></br>";



for ($outerLoop = 0; $outerLoop < 10; $outerLoop++) {

    for ($innerLoop = 0; $innerLoop < 10; $innerLoop++) {
        if ($innerLoop === 0 || $outerLoop === 5 || $innerLoop === 9) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }

    echo "</br>";
}
