<?
//the example of inserting data with variable from HTML form
//input.php
mysql_connect("localhost","root"," ");//database connection
mysql_select_db("starsevaregistration");

//inserting data order
$order = "INSERT INTO employees
			(Name, Address)
			VALUES
			('$name',
			'$address')";

//declare in the order variable
$result = mysql_query($order);	//order executes
if($result){
	echo("<br>Input data is succeed");
} else{
	echo("<br>Input data is fail");
}
?>