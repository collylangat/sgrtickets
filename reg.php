<?php



$servername ='localhost';
$username='root';
$password='kipngeno33';
$dbname='mrr';

$conn = new mysqli($servername,$username,$password,$dbname);

if (!$conn) {
	die('Connection failed' mysql_connect_error());
	# code...
}
else{
	echo "Connection succesful";
}


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$idno = $_POST['idno'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


		$conn = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'mrr');
		if(mysqli_connect_error()){
			die("Connect Error ". $conn->connect_error);
		}
else{
		$sql = "INSERT INTO user (fname,lname,idno,email,username,password)
		VALUES ('$fname','$lname','$idno','$email','$username','$password')";

		if ($conn->query($sql)===TRUE){
			echo "new record";
		}
}
?>
