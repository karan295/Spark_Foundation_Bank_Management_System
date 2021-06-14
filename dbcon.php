 <?php
		  
// $con=mysqli_connect("localhost","id17018779_database1234","DataBase1234","id17018779_database_test");

$dbServername="localhost";
$dbUsername="root";
// $dbPassword="L0EhQ7n=+*vWu204";
$dbPassword="";
$dbName="database_test";

$con=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);




// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>