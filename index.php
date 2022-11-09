PHP Conditional Statements
Conditional Statements are used to perform actions based on different conditions. Sometimes when we write a program, we want to perform some different actions for different actions. We can solve this by using conditional statements.

In PHP we have these conditional statements:

if Statement.
if-else Statement
If-elseif-else Statement
Switch statement


1. if Statement
This statement executes the block of code inside the if statement if the expression is evaluated as True.

Example:

<?php
$x = "22";
if ($x < "20") {
    echo "Hello World!";
}
?>


2. if-else Statement
This statement executes the block of code inside the if statement if the expression is evaluated as True and executes the block of code inside the else statement if the expression is evaluated as False.

Example:

<?php
$x = "22";
if ($x < "20") {
    echo "Less than 20";
} else {
    echo "Greater than 20";
}
?>


3. If-elseif-else
This statement executes different expressions for more than two conditions.

Example:

<?php
$x = "22";
if ($x == "22") {
    echo "correct guess";
} elseif ($x < "22") {
    echo "Less than 22";
} else {
    echo "Greater than 22";
}
?>


4. Switch Statement
This statement allows us to execute different blocks of code based on different conditions. Rather than using if-elseif-if, we can use the switch statement to make our program.

Example:

<?php
$i = "2";
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0, 1 or 2";
}
?>