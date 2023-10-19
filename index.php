<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ca2013</title>
</head>
<body>
  
<h1>..........question1</h1>

<?php
$numbers =[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];// 
foreach ($numbers as $number) {
  if ($number % 2 == 0) {
    echo "$number is even<br>";
  } 
  else {
    echo "$number is odd<br>";
  }
}
?>
<h1>..........question2</h1>

<?php

$i = 1;
while ($i <= 50) {
  if ($i % 5 == 0) {
    echo $i . "<br>";
  }
  $i++;
}

?>
<h1>..........question3</h1>
<?php

for ($i = 35; $i >= 7; $i -= 2) {
  echo $i . "<br>";
}

?>
<h1>..........question4</h1>
<?php

function primeFactors($num) {
  $primeFactors = [];
  $i = 2;
  while ($num > 1) {
    if ($num % $i == 0) {
      $primeFactors[] = $i;
      $num /= $i;
    } else {
      $i++;
    }
  }
  return $primeFactors;
}

$num = 42;
$primeFactors = primeFactors($num);

echo "The prime factors of $num are: ";
foreach ($primeFactors as $primeFactor) {
  echo $primeFactor . " ";
}

echo "<br>";

?>
<h1>..........question5</h1>
<?php

function isPrime($num) {
  $i = 2;
  do {
    if ($num % $i == 0) {
      return false;
    }
    $i++;
  } while ($i <= $num / 2);

  return true;
}

$num = 11;

if (isPrime($num)) {
  echo "$num is a prime number.";
} else {
  echo "$num is not a prime number.";
}

?>
<h1>..........question6</h1>
<?php

// Calculate the factorial of positive integer numbers from 2 to 10 using a do...while statement.
$i = 2;
$factorial = 1;
do {
  $factorial *= $i;
  $i++;
} while ($i <= 10);

echo "The factorial of 10 using a do...while statement is $factorial.<br>";

// Calculate the factorial of positive integer numbers from 2 to 10 using a for statement.
$factorial = 1;
for ($i = 2; $i <= 10; $i++) {
  $factorial *= $i;
}

echo "The factorial of 10 using a for statement is $factorial.<br>";

?>
<h1>..........question7</h1>
<?php

$i = 200;

do {
    $isPrime = true;

    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j === 0) {
            $isPrime = false;
            break;
        }
    }

    if (!$isPrime) {
        echo "$i ";
    }

    $i--;
} while ($i >= 80);

?>
<h1>..........question8</h1>
<?php

function fibonacci($n) {
    // Check if the input is valid
    if ($n <= 0) {
        //echo "Invalid input. Please enter a positive integer.";
        return;
    }

    // Initialize the first two numbers in the series
    $num1 = 0;
    $num2 = 1;

    // Print the first n numbers in the Fibonacci series
    $count = 0;
    while ($count < $n) {
        echo $num1 . " ";

        // Update the Fibonacci sequence
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp + $num2;

        $count++;
    }
}

// Get the input from the user
$n = readline("Enter the number of Fibonacci numbers to generate: ");

// Call the function to print the Fibonacci series
fibonacci($n);

?>

</body>
</html>