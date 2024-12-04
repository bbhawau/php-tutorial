<?php
$name ="Abubakar";
echo $name;
echo "$name is a good boy <br>";

//VARIABLES
//Assignment
$isFemale = true;
$favcolor = "green";
$age = "18";
$cars = ["Mercedes", "Toyota", "Ferrari", "Bugatti", "Rolls Royce"];

echo "$favcolor is my favourite colour  <br>";
echo " I am $age years old. <br>";
for ($i = 1; $i < count($cars);  $i++){
    echo $cars[$i] ."\n";
}

//STATEMENTS
// if Statements -- The if statement is used to check a condition and execute code based on whether the condition is true or false.
$age = 18;

if ($age >= 18) {
    echo "You are eligible to vote. <br>";
} 



// if else  - f the condition $age >= 18 is false, the else part will execute and output: "You are not eligible to vote."
$age = 16;
if ($age >= 18) {
    echo "You are eligible to vote. <br>";
} else {
    echo "You are not eligible to vote. <br>";
}



// if-elseif-else Statement -- Multiple conditions are checked using elseif. If the first condition is false, PHP will move to the next elseif, and if no conditions are true, it will execute the else part.

$score = 75;

if ($score >= 90) {
    echo "Grade: A <br>";
} elseif ($score >= 80) {
    echo "Grade: B <br>";
} elseif ($score >= 70) {
    echo "Grade: C <br>";
} else {
    echo "Grade: F <br>";
}

// SWITCH CASE STAEMENT


// The switch statement is used when you need to check one variable against multiple possible values. It is a cleaner and more efficient way to handle multiple conditions that all check the same variable.
$day = 3;

switch ($day) {
    case 1:
        echo "Monday <br>";
        break;
    case 2:
        echo "Tuesday <br>";
        break;
    case 3:
        echo "Wednesday <br>";
        break;
    case 4:
        echo "Thursday <br>";
        break;
    case 5:
        echo "Friday <br>";
        break;
    default:
        echo "Weekend <br>";
}



//  exmaple
$day = 4;

// Using switch to determine the day of the week
switch ($day) {
    case 1:
        echo "It's Monday. <br>";
        break;
    case 2:
        echo "It's Tuesday. <br>";
        break;
    case 3:
        echo "It's Wednesday. <br>";
        break;
    case 4:
        echo "It's Thursday. <br>";
        break;
    case 5:
        echo "It's Friday. <br>";
        break;
    default:
        echo "It's the weekend! <br>";
}

// Using if-else to check if it's a weekday or weekend
if ($day >= 1 && $day <= 5) {
    echo " It's a weekday. <br>";
} else {
    echo "It's the weekend. <br>";
}


//  USER DEFINED FUNCTIONS  - OUR OWN FUNCTIONS
// Simple Function
function sayHello() {
    echo "Hello, World! <br>";
}
sayHello(); // Output: Hello, World!



//  Function with a Single Parameter
function greet($name) {
    echo "Hello, $name! <br>";
}
greet("Alice"); // Output: Hello, Alice!




// Function with Multiple Parameters
function addNumbers($a, $b) {
    return $a + $b;
}
$result = addNumbers(5, 7);
echo $result; // Output: 12

echo "<br>";

// Function with Default Parameters
function introduce($name = "Guest") {
    echo "Welcome, $name! <br>";
}
introduce();          // Output: Welcome, Guest!
introduce("Charlie"); // Output: Welcome, Charlie!


// Function with Return Values
function multiply($a, $b) {
    return $a * $b;
}
$result = multiply(3, 4);
echo $result; // Output: 12

echo "<br>";
// 
function divide(float $a, float $b): float {
    return $a / $b;
}
echo divide(10, 2); // Output: 5
echo "<br>";


// BASIC PHP INBUILT FUNCTIONS
// strlen() -- Returns the length of a string.
$text = "Hello, PHP!";
echo strlen($text); // Output: 10
echo "<br>";

// strtolower() -- Converts a string to lowercase.
$text = "Hello, PHP!";
echo strtolower($text); // Output: hello, php!
echo "<br>";

// strtoupper() -- Converts a string to uppercase.
$text = "Hello, PHP!";
echo strtoupper($text); // Output: HELLO, PHP!
echo "<br>";

// round()  -- Rounds a floating-point number to the nearest integer.
echo round(4.7); // Output: 5
echo "<br>";


// functions

function greet($firstname, $lastname, $age) {

    return "Hello, ". $firstname . "" . $lastname . "" . $age;
}

$message = greet("Alex", "fred", 32);

echo $message;



function add($a, $b, $c){
    return $a + $b - $c;
}

$sum  =  add(4, 6, 3);
echo "The sum is: ". $sum ;


//  statements
$limits = 400;
$limited = 250;
$isPassed = true;
$names = "fred";

if(!!$isPassed){
    echo "ok";
}
 else {
    echo "Error";
}


function statem($a, $b, $c){

    if($a > $b){

        if($a > $b){

            return "greater";
        } elseif(premid) {
            return "lesser";
        } else{
            jkjgjfj
        }
    } else {
        return "lesser";
    }
}

$checks = statem(3,5,9);

echo $checks;
?>