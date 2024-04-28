<?php

/*
// CLASS AND OBJECT ----------------------------------> 
class calculation{ // class has properties( for example: $a, $b) and method 
    public $a, $b, $c, $d, $e, $f;  // veriables or properties
    function sum (){
        $this -> c = $this -> a + $this -> b; // method
        return $this -> c;
    }
    function mul(){
        $this -> d = $this -> a * $this -> b;
        return $this -> d; 
    }
    function sub(){
        $this -> e = $this -> a - $this -> b;
        return $this -> e;
    }
    function div(){
        $this -> f = $this -> a / $this -> b;
        return $this -> f;
    }

}

$C1 = new calculation(); // Object
$C1 -> a = 5;
$C1 -> b = 7;

$C2 = new calculation();
$C2 -> a = 10;
$C2 -> b = 20;

$C3 = new calculation();
$C3 -> a = 23;
$C3 -> b = 45;

echo $C1 -> sum()."</br>";
echo $C2 -> mul()."</br>";
echo $C3 -> mul()."</br>";
echo $C2 -> sum()."</br>";
echo $C3 -> sub()."</br>";
echo $C2 -> div()."</br>";
*/

/*
// SET() And GET()
class player{
    public $name;
    public $speed = 5;
    public $running = false;

    function set_name($name){
        return $this -> name = $name;
    }

    function get_name(){
        return $this -> name;
    }

    function run(){
        $this -> running = true;
    }

    function stopRun(){
        $this -> running = false;
    }
}
$P1 = new player();
$P1 -> set_name("Sujan");

echo $P1 -> get_name()." </br>";
echo $P1 -> speed;

$P2 = new player();
$P2 -> set_name("Pradeep");

echo $P2 -> get_name()."</br>";
echo $P2 -> speed;
*/


/*
// CONSTRUCTOR ------------------------------------------------->

class Person{
    public $name, $age;

    // function display($name, $age){
    //     $this -> name = $name;
    //     $this -> age = $age;
    // }

    function __construct($nm, $ag){
        $this -> name = $nm;
        $this -> age = $ag;
    }

    function show(){
        echo "Name is " . $this -> name;
    }

    
}
$obj1 = new Person("yogesh", 16);
$obj2 = new Person("Pradeep", 17);
echo "Age of pradeep is: " . $obj2 -> age . "</br>";
echo "Name of obj1 is: " . $obj1 -> name;
*/

/*
// DESTRUCTOR ----------------------------------------------->

class person{
    public function __construct(){
        echo "I am Constructor";
    }
    function show(){
        echo "I am Normal Function";
    }
    function __Destruct(){
        echo "I am Destructor";
    }

}
$obj1 = new person();
$obj1 -> show() . "</br>";
*/

/*
// INHERITANCE ---------------------------------------------->

// Base calss / Parent calss
// Derived calss / child calss

// TYPES of inheritance
// 1. Simple / single inheritance
// 2. multiple level inheritance
// 3. Hierarchical Inheritance



//Single / single inheritance ..................>
class fruit{
    public $name, $price;
    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;

        echo "The Price of " . $name . " is:- " . $price . "</br>";
    }
}
class apple extends fruit
{

}

$obj1 = new fruit("Banana", 10);
$obj2 = new apple("Big Banana", 20);

*/

/*
// Multilevel inheritabce ...................>

class vehicle{
    public $name, $price;

    function __construct($name, $price){
        $this -> name = $name;
        $this -> price = $price;

        echo "The Price of " . $name . " is:- " . $price . "<br>";
    }
}
class car extends vehicle{
    public $rating;

    function addRating($rating){
        $this -> rating = $rating;

        echo "The reating of " . $this -> name  . " is:- " . $rating . "<br>";
    }
}

class bike extends car{

}

$obj1 = new vehicle("Thar", 140000000);
$obj2 = new car("Hondai", 5000000);
$obj2 -> addRating(4.5);
$obj3 = new bike("Hero Honda", 225000);
$obj3 -> addRating(5.0);
*/

/*
// Hiarachical inheritabce ...................>
class fruit{
    public $name;
    
    public function __construct($name){
        $this -> name = $name;


    }

    function test(){
        echo $this -> name . "is sweet";
    }


}

class banana extends fruit{

    function size(){
        echo $this -> name . " is long. <br>";
    }

}

class apple extends fruit{
    public function color(){
        echo $this -> name . " is red. <br>";
    }
}

$banana = new banana('Mungre');
$apple = new apple('Fuji');
$banana -> size();
$apple -> color();
*/


/*
// Develope a class rectangle with properties length and breadth include methods to calculate there area and perimeter of rectangle.
class rectangle{
    // public $length, $breadth, $area;

    function area($length, $breadth){
        $area = $length * $breadth;
        return $area;
    }

    function perimeter($length, $breadth){
        $perimeter = (2*$length + $breadth*2);
        return $perimeter;
    }

}

$objArea = new rectangle();
$area  =  $objArea->area(50, 30);
echo "The area of rectangel is:- " . $area . "<br>";

$objPerimeter = new rectangle();
$perimeter = $objPerimeter->perimeter(50, 30);
echo "The perimater of retangel is:- " . $perimeter . "<br>";
*/

/*
// Define a parent class shape wtih methods to calculate area and perimeter of rectangel
class shape{
    public $length, $breadth;

    function __construct($l, $b){
        $this -> length = $l;
        $this -> breadth = $b;
       $a = $l * $b;

       echo "The Area of shape is:- " . $a . "<br>";
        
    }
}
$obj1 = new shape(20, 10);
*/

/*
// Create a child calsses circle and square that inherit form the shape class impliment there method to calculate there area and perimeter.
class circle extends shape{


    function circleArea($r, $pie){
        $area = $pie*$r*$r;

        // echo "Area of Circle is:- " . $area . "<br>";
    }
}

$objAr = new circle(10, 3.14);
*/
/*
// MULTILEVEL INHERITANCE .................................>
class fruit{
    protected $name;
    public function __construct($name){
        $this -> name = $name;

    }
    public function test(){
        echo $this -> name . " is sweet";

    }
    
}
class banana extends fruit{
    public function long(){
        echo $this -> name . " is Long";
    }
}

class apple extends banana{
    public function circle(){
        echo $this -> name . " is ovel";
    }
}

$fruit = new fruit("falful");
$banana = new banana("Mungre");
$apple = new apple("Fuji");
$fruit -> test() ;
// $fruit -> long(); // error -> because 
$banana -> test() ;
$apple -> test();
*/

/*
// METHOD OVERRIDE --------------->
class base{
    public $name = "I am from parent class";
    function show ($a, $b){
        return $a + $b;
    }
}
class child extends base{
    public $name = "I am from child calss";

    function show ($a, $b){
        return $a + $b;
        }
}
class grandbase extends base{
    function show ($a, $b){
        return $a - $b;
        }

}
$p1 = new child();
$p2 = new base();
$p3 = new grandbase();

echo $p1 -> show(2, 5) . "<br>";
echo $p2 -> show(2,5) . "<br>";
echo $p3 -> show(2,5) . "<br>";
echo $p1 -> name  . "<br>";
echo $p2 -> name  . "<br>";
*/

/*
// FINAL KEYWORD -------------------------------------------->
class base{
    final function show ($a, $b){
        return $a + $b;
    }
}
class child extends base{
    function show ($a, $b){ // error! Cannot override final method base::show()
        return $a + $b;
    }
}

$P1 = new child();
$p2 = new base();
echo $p2 -> show(10, 20);
*/


/*
// ABSTRACT CALSS & ABSTRACT METHOD ------------------------------------------>
1. We can't create object of abstract calss
2. abstract keyword is used to create an abstract class
3. Abastract class must have at least on abstract method
4. When we create an abstract method, we need derived calss to implement it.

abstract class A{
    protected $name;
    public function __construct($n){
        $this -> name = $n;
    }
    abstract protected function show();
}
class B extends A{
    public function show(){
        echo $this -> name;
    }
}
// $p1 = new A(); // Error! because abstract keyword is used to create an abstract class
$p2 = new B('Pradeep');
$p2->show();
*/


/*
// INTERFACE ------------------------------------------->
* Usages of properties of differnet classes in to single class.
* The implementation of interface i.e multiple classs into single class is called polymerophism.
* We use interface keyord to declere an interface.
* we can't the properties in interface.
* WE can't create object of interface.
* We can only define the method in interface, but we can't inplement inside interface.
* To implement methods of intetface we need to create seperate class and implement this class using implements keyword.
* we can implement as many as interface by seperating by comma(,).


interface parent1{
    function calc($a, $b);
}
interface parent2{
    function add($c, $d);
}
class child implements parent1, parent2{
    public function calc($a, $b){
        echo $a * $b  . "<br>";
    }
    public function add($c, $d){
        echo $c + $d . "<br>";
    }
}

// $p1 = new parent1(); // Error
// $p2 = new parent2(); // Error
$p3 = new child();
$p3 -> calc(5, 10);
$p3 -> add(10, 5);
*/

/*
// STATIC MEMBERS ---------------------------------------------->
// "::" -> SCOPE RESOLUTION OPERATOR 
class fruit{
    public static $name = "Ram";
    public static function show(){

        echo fruit::$name;
    }
}
// echo fruit::$name;
// OR
echo fruit::show();
*/

/*
// ENCAPSULATION ------------------------------------------------->
*PUBLIC = ACCESS IN ALL CLASS
*PRIVATE = ACCESS IN SAME CLASS
*PROTECTED = ACCESS IN ANOTHER CLASS WHERE EXTENDS CLASS


*/

/*
//EXCEPTION HANDALING ------------------------------------------>
*try{
    // code to occureerror
}
*catch(){
}
*finally{
}

// Some practices ....

// $n = 3;

// try{
//     if(n<=0){
// throw new Exception("Enter value grator than 0");

// $div = 2/$n;
// echo $div;
// }
// catch(Exception $e)

// echo $e -> getmessage();
// }
function division($n)
{
    try {
        if ($n <= 0) {
            throw new Exception("Enter value grator than 0");
        }
        $div = 2 / $n;
        echo $div;
    } catch (Exception $err) {
        echo $err->getMessage();
    } finally {

    }
}
division(2);
// division(-3); // error
// division(0); // error


// EXCEPTION METHODS --------------------------------------------->

// 1. getmessage() => prints error message.
// 2. getCode() => prints message code.
// 3. getfile() => prints path of file in which exception occur.
// 4. getline() => prints the line of code in which exception occur.


    // function divide($n)
    // {
    //     try {
    //         if ($n <= 0) {
    //             throw new Exception("Invalid number <br> ");
    //         }
    //         $div = 2 / $n;
    //         echo $div;
    //     } catch (Exception $e) {
    //         echo $e->getMessage();
    //     } finally {
    //         echo "<br> finally block <br> ";
    //     }
    // }

    // divide(0);
    // divide(1);
    // divide(2);
*/

// Another Example................

class MyException extends Exception{
    function errorMessage(){
        $error = "exception Message" . $this -> getMessage();
        return $error;
    }
}
function division ($n){
    try{
        if($n<=0){
            throw new Exception ("Invalid No. <br>");
        }
        
        if($n==3){
            throw new MyException("value is 3. <br>"); 
        }
        $div = 2/$n;
    echo $div;
    
}catch(Exception $e){
echo $e -> getMessage();
}

finally {
    echo "<br> finally block <br> ";
}
}

division(0);
division(3);
division(2);

