<?php

// A simple calculator written in PHP using Object Oriented Programming (OOP) concepts 

class Calculator {
    
	public $number1;
	public $number2;

    function set_numbers($number1, $number2) {
        $this->number1 = $number1;
        $this->number2 = $number2;
      }

    function get_number1() {
        return $this->number1;
    }

    function get_number2() {
        return $this->number2;
        }

	public function multiply() {
		return $this-> number1 * $this-> number2;
	}
	public function divide() {
		return $this-> number1 / $this-> number2;
	}
	public function add() {
		return $this-> number1 + $this-> number2;
	}
	public function subtract() {
		return $this-> number1 - $this-> number2;
	}
	public function exponent() {
		return $this-> number1 ** $this-> number2;
	}
}

// Initializing a new Calculator object

$calc1 = new Calculator ();
$calc1 -> set_numbers(6, 3); // set the two numbers
$number1 = $calc1 -> get_number1($number1); // get the first number
$number2 = $calc1 -> get_number2($number2); // get the second number

// $calc1 -> number1 = 6; // provide the first number
// $calc1 -> number2 = 3; // provide the second number

// Call the multiply method
 
echo $number1 . " x " . $number2 . " = " . $calc1 -> multiply();
echo "<br>";

// Call the divide method

echo $number1 . " / " . $number2 . " = " . $calc1 -> divide();
echo "<br>";

// Call the add method

echo $number1 . " + " . $number2 . " = " . $calc1 -> add();
echo "<br>";

// Call the subtract method

echo $number1 . " - " . $number2 . " = " . $calc1 -> subtract();
echo "<br>";

// Call the exponent method

echo $number1 . " ** " . $number2 . " = " . $calc1 -> exponent();
echo "<br>";

echo "<br>";


// Initializing a second new Calculator object

$calc2 = new Calculator ();
$calc2 -> set_numbers(4, 2); // set the two numbers

// $calc2 -> number1 = 4; // provide the first number
// $calc2 -> number2 = 2; // provide the second number

// Call the multiply method

echo $calc2 -> number1 . " x " . $calc2 -> number2 . " = " . $calc2 -> multiply();
echo "<br>";

// Call the divide method

echo $calc2 -> number1 . " / " . $calc2 -> number2 . " = " . $calc2 -> divide();
echo "<br>";

// Call the add method

echo $calc2 -> number1 . " + " . $calc2 -> number2 . " = " . $calc2 -> add();
echo "<br>";

// Call the subtract method

echo $calc2 -> number1 . " - " . $calc2 -> number2 . " = " . $calc2 -> subtract();
echo "<br>";

// Call the exponent method

echo $calc2 -> number1 . " ** " . $calc2 -> number2 . " = " . $calc2 -> exponent();
echo "<br>";

?>