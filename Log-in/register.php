<script>
	function c2()
	{
		window.location="./../Web-Sources-login/index.php";
	}
</script>
<script type="text/javascript">
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>


<?php
$con=mysqli_connect("localhost","root","","envirus");

$first_name=mysqli_real_escape_string($con,$_POST['fname']);
$last_name=mysqli_real_escape_string($con,$_POST['lname']);
$username=mysqli_real_escape_string($con,$_POST['uname']);
$state=mysqli_real_escape_string($con,$_POST['state']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$age=mysqli_real_escape_string($con,$_POST['age']);

$sql = "INSERT INTO users (first_name, last_name, username, email,state,phone,age,password) VALUES ('$first_name', '$last_name','$username','$email','$state','$phone','$age','$password')";
session_start();
$_SESSION['state']=$state;
if(mysqli_query($con, $sql)){
    echo "<script>c2();</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}


?>