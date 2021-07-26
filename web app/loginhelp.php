<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'authentication');

if(count($_POST)>0) {
// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$result = mysqli_query($connection,"SELECT * FROM credentials WHERE EMAIL='" . $_POST["email"] . "' and PASSWD = '". $_POST["password"]."'");

	$count  = mysqli_num_rows($result);


//$data = "SELECT EMAIL from credentials";
//$data2 = "SELECT PASSWD from credentials";

if ($count ==0) {
    echo "Error while logging In";
}
else {
    header('location:loginsuccessful.php');
   
}
}

mysqli_query ($connection,$result);


?>