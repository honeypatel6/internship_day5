<?php 
//count()
$a = array(
	'Name' => "honey patel",
	'Usr_Name' => "honeypatel64",
	'Mobile' => 9876543215,
);
$c = count($a);
echo "<pre> A ";
print_r($a);
echo "<br/>Given Array Contains $c Fields.";
?>

<br>
<?php
//array_count_values()
$arr = array("C","php","c","android","php","java");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong> ";
}
?>

<br>
<?php
//array_sum
$myarray = array(1,2,3,4,5); echo array_sum($myarray);
?>

<br>
<?php
//array_product
$a=array(5,5);
echo(array_product($a));
?>

<br>
<?php
//array_reverse()
$a=array("a"=>"abc","b"=>"pqr","c"=>"xyz");
print_r(array_reverse($a));
?>

<br>
<?php
//in_array()
$arr = array('c', 'c++', 'java', 'android', 'php');
$temp = in_array('php',$arr); echo $temp;
?>

<br>
<?php
//array_rand
$a=array("apple","grapes","watermelon","cherry","lichi");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
?>

<br>
<?php
//array_unique
$arr = array('c', 'c++','android', 'java', 'android', 'php'); print_r(array_unique($arr));
?>

<br>
<?php
//array_marge
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
?>

<br>
<?php
//array_search
$myarr = array('c', 'c++','android', 'java', 'php');
$check = array_search('android', $myarr); echo $check; // Return Index
?>

<br>
<?php
//range()
$number = range(0,5);
print_r ($number);
?>

<br>
<?php
//sort
$arr = array(80,60,50,40,8,74); sort($arr);
print_r($arr);
?>

<br>
<?php
//rsort
$arr = array(80,60,50,40,8,74); rsort($arr);
print_r($arr);
?>

<br>
<?php
//asort()
$arr = array(80,60,50,40,8,74); asort($arr);
print_r($arr);
?>

<br>
<?php
//ksort()key sort
$arr = array(
"Banana" => "Yellow", "Apple" => "Red",
"Mango" => "Green");
ksort($arr);
foreach ($arr as $key => $value) { echo "<br />$key - $value ";
}
?>

<br>
<?php
//krsort()
$arr = array(
 
"Banana" => "Yellow", "Apple" => "Red",
"Mango" => "Green"); krsort($arr);
foreach ($arr as $key => $value) { echo "<br />$key - $value ";
}
?>














