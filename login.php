<?php
$username = $_POST['username'];
$password = $_POST['password'];


		$conn = new mysqli('127.0.0.1', 'root', 'kipngeno33', 'mrr');
		if(mysqli_connect_error()){
			die("Connect Error ". $conn->connect_error);
		}
else{	
$USERNAME=$_POST['username'];
$PASSWORD=$_POST['password'];
mysqli_select_db($conn,"user");
$RESULT4="select * from user where username='$USERNAME'and password='$PASSWORD'";
$RESULT=mysqli_query($conn,$RESULT4);
$ROW=mysqli_fetch_array($RESULT);
if($ROW['username']==$USERNAME && $ROW['password']==$PASSWORD)
{
echo '<script language="javascript">';
echo 'alert("SUCCESSFUL LOGIN")';
echo '</script';
header("location:station.html");

}
else{
echo'<script language="javascript">';
echo 'alert("incorrect details")';
echo'</script>';
header("location:first.html");
}

}
?>
