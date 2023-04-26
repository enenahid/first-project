<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

add_action( 'wp_enqueue_scripts', 'twenty_twenty_three_child_style' );
				function twenty_twenty_three_child_style() {
					wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
					wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
				}

/**
 * Your code goes below.
 */
/*echo '<h1>hgffghgg</h1>';
$name='Bangladesh';
$age=20;
$word='age';
$question="How are you?";
echo $$word;*/


/*echo 'Hello '.$name."<br/>";
echo "\n";
echo "Hello $name";
echo "\n";
echo "Hello {$name}, {$question}";*/

//Arithmetic Operator

$father=60;
$son=30;
$total= $father+$son;

echo $total."<br/>";

//Assignment Operator

$age = 20;
$age += 5;

echo $age."<br/>";

//Logical Operator

$username="sheuily";
$pass="sheuily777";

if( $username=="sheuily" && $pass=="sheuily77"){
    echo "welcome";
}else{
    echo "username or password wrong"."<br/>";
}

$year=2018;
if($year % 4==0 && $year % 100==0 && $year % 400==0){
    echo "{$year} is a leap year";
}elseif($year % 4==0 && $year %100==0){
    echo"{$year} is not a leap year";
}elseif($year % 4==0){
    echo"{$year} is a leap year";
}else {
    echo "{$year} is not a leap year". "<br/>";
}


for ($i=1; $i<10; $i+=2){
   echo $i;
   echo PHP_EOL. "<br/>";
}
for($j=0; $j<5; $j++){
   echo "*". "<br/>";
}

$i=0;
while ($i<15){
    $i++;
    echo $i.PHP_EOL. "<br/>";
}

$i=0;
do{
    $i++;
    echo $i.PHP_EOL."<br/>";
}
while($i<10);

$i=0;
a: $i++;
echo $i.PHP_EOL. "<br/>";
if ($i<10) goto a;

for ($i=0; $i<100; $i++){
    //if ($i %7 ==0) echo $i. '<br/>';
    //if ($i %11 ==0) echo $i. '<br/>';
    
    echo $i %7 ==0 ? $i. "<br/>":'';

    for ($i=0, $j=0; $i<100; $i+=7, $j+=11) {
       //echo $i. "<br/>";
      echo $j <100 ? $j. "<br/>":'';
    }
}

echo "==========". '<br/>';

$i=0;
while ($i<5){
    echo$i;
    echo PHP_EOL. "<br/>";
    $i++;
}
echo "==========". '<br/>';

$j=0;
while ($j++ <5){
    echo $j;
    echo PHP_EOL. "<br/>";
}
echo "==========". '<br/>';

$j=0;
while (++$j <5){
    echo $j;
    echo PHP_EOL. "<br/>";
}
echo "==========". '<br/>';

$x=$y=5;
$x=$y++;
echo $x. ":" .$y. "<br/>";

function evenOrOdd($n){
    if($n%2==0){
        return true;
    }else{
        return false;
    }
}

$x=13;
if (evenOrOdd ($x)){
    echo "{$x} is an even number";
}else{
    echo "{$x} is an odd number". "<br>";
}

echo "==========". '<br/>';


echo 'fgsdss' .myAddress ();
echo 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus perferendis illum voluptate placeat odio ad obcaecati officia labore quaerat itaque. Odit assumenda exercitationem expedita iste at! Et iusto illum omnis, quasi totam incidunt dolore delectus cum pariatur. Odit sunt fugit dignissimos animi itaque dolorum. Aut modi culpa tenetur architecto illum!'.'<br><br>';
myAddress ();
echo 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus perferendis illum voluptate placeat odio ad obcaecati officia labore quaerat itaque. Odit assumenda exercitationem expedita iste at! Et iusto illum omnis, quasi totam incidunt dolore delectus cum pariatur. Odit sunt fugit dignissimos animi itaque dolorum. Aut modi culpa tenetur architecto illum!'.'<br><br>';
myAddress ();
echo 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus perferendis illum voluptate placeat odio ad obcaecati officia labore quaerat itaque. Odit assumenda exercitationem expedita iste at! Et iusto illum omnis, quasi totam incidunt dolore delectus cum pariatur. Odit sunt fugit dignissimos animi itaque dolorum. Aut modi culpa tenetur architecto illum!'.'<br><br>';

function myAddress (){
    return "Vill- Town Colony, P.O-Sherpur, Thana-Sherpur, Dist-Bogura".'<br>';
}


echo "==========". '<br/>';
function serve ($foodType="Coffee",$numberOfItems="1 cup"){
    echo "{$numberOfItems} of {$foodType} have been served".'<br>';
}

$ft= "Coffee";
$n= "2 cups";
//serve ($ft,$n);
serve('sdfdr');
echo "==========". '<br/>';
/*function sum ($x,$y,$z){
    return $x+$y+$z;
}
echo sum (5,6,7);
echo "==========". '<br/>';*/

function sum (int ...$numbers):int {
    //$result=0;
    for ($i=0; $i<count($numbers);$i++){
        $result+=$numbers[$i];
    }
    return $result;
}
echo sum (5,6,). '<br>';
echo "==========". '<br/>';

function doTheTaskA () {
    echo "Step A Done.". '<br>';
}

function doTheTaskB () {
    echo "Step B Done.". '<br>';
}

function doTheTaskC () {
    echo "Step C Done.". '<br>';
}

function doTheTaskD () {
    echo "Step D Done.". '<br>';
}

function doTheTaskE () {
    echo "Step E Done.". '<br>';
}

function doTheLargerTask () {
    doTheTaskA ();
    doTheTaskB ();
    doTheTaskC ();
    doTheTaskD ();
    doTheTaskE ();
}
doTheLargerTask ();
echo "==========". '<br/>';

/*$name= "Earth";
function doSomething(){
    //global $name;
    //echo $name;
    echo $GLOBALS ['name'];
}
doSomething();*/

function doSomething(){
    static $i;
    $i=$i ?? 0;
    $i++;
    echo $i;
    echo '<br>';
}

doSomething();
doSomething();
doSomething();
echo "==========". '<br/>';
echo "Index array".'<br/>';
$students =array (
    "rahim",
    "karim",
    123,
    "monir",
);
echo $students [1];
echo count ($students).'<br/><br/>';

echo "Associative array".'<br/>';

$father =array ('Shoshi'=>30, 'Shahana'=>28, 'Shawon'=>26, 'Sadia'=>24);
echo $father['Shoshi']. '<br/>';

echo "==========". '<br/>';
echo "Multidimentional array".'<br/>';

$father =array (
   'Shoshi'=>array ('age'=>30,'sub'=>array ('tex','com','mec'),'hobby'=>'reading'),
   'Shahana'=>array ('age'=>28,'sub'=>'acc','hobby'=>'sleeping'),
   'Shawon'=>array ('age'=>26,'sub'=>'math','hobby'=>'playing'),
   'Sadia'=>array ('age'=>24,'sub'=>'econo','hobby'=>'coading'), 
);

echo $father ['Shoshi'] ['sub'][2].'<br/>';
echo "==========". '<br/>';

$vegetables = explode (', ','brinjal, brocolli,carrot, capsicam');
echo $vegetables [1].'<br/>';

$vegetableString = join (', ',$vegetables);
echo $vegetableString;
echo count ($vegetables).'<br/>';


$vegetables = preg_split ('/(, |,)/','brinjal, brocolli,carrot, capsicam');
echo count ($vegetables).'<br/>';
echo "==========". '<br/>';

$cars=array ("Volvo", "BMW", "Toyota");
echo "I like"." " .$cars[0].", ".$cars[1]." and ".$cars[2].". ". '<br/>';

$cars=array ("Volvo", "BMW", "Toyota");
$arrlength=count ($cars);

for ($x=0;$x<$arrlength;$x++)
echo $cars [$x]."<br>";
echo "==========". '<br/>';

$color=array (122,233,65);
//$red=$color [0];
//$green=$color [1];
//$blue=$color [2];

//echo $blue;
list ($red, $green, $blue)=$color;
echo $green."<br>";
echo "==========". '<br/>';

$person=array ('fname'=>'Hello','lname'=>'World');
$newperson =&$person;
$newperson ['lname']='Pluto';
print_r ($person);
print_r ($newperson);
echo "==========". '<br/>';

$person=array ('fname'=>'Hello','lname'=>'World');

print_r ($person);

unset ($person['lname']);
print_r ($person);
echo '<br/>';

echo "==========". '<br/>';

$name = "False";
 
if (isset($name)) {
    echo "Name is set";
}else {
    echo "Not set";
}

echo '<br/>';

if (empty($name)){
   echo "Name is empty";
}else{
    echo "Not Empty";
}

echo '<br/>';

if (isset($name) && (is_numeric($name) || $name != '')){
    echo "Name is set and it's not empty";
}else{
    echo "Name is either not set or it's empty";
}
echo '<br/>';
echo "==========". '<br/>';

$numbers = array();
for ($i=12;$i<21;$i++){
    array_push ($numbers, $i);
}
print_r($numbers);
echo "==========". '<br/>';

$numbers=range(12,20);
print_r($numbers);
echo "==========". '<br/>';

$numbers =range(12,20,2);
print_r($numbers);
echo '<br/>';
echo "==========". '<br/>';

foreach(range(11,20,2) as $evenNumber){
    echo $evenNumber. '<br/>';
}

echo "=====String=====". '<br/>';

$name="Rakib";
$string01="My name is $name New data";
echo $string01;
echo '<br/>';
echo "==========". '<br/>';

$string ="Hello World";
//echo $string[0];
//echo $string[-5];
//echo substr($string,1,4);
$length = strlen($string);
echo substr($string,$length-5);
echo PHP_EOL;
echo '<br/>';
echo substr($string,-3,2);
echo '<br/>';
echo "=====String Reverse=====". '<br/>';
$string="Hello World";
$length =strlen($string)-1;
for($i=$length;$i>=0;$i--){
    echo $string [$i];
}

echo '<br/>';

$length =strlen($string);
for($i=1; $i<=$length; $i++){
   echo $string [$i*-1];
}
echo '<br/>';

echo strrev ($string);
//wp_die();