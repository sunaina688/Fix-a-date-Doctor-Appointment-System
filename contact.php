<?php 
$con=mysqli_connect("localhost","root","","hospitalms");
if(isset($_POST['btnSubmit']))
{
	$name = $_POST['txtName'];
	$email = $_POST['txtEmail'];
	$contact = $_POST['txtPhone'];
	$message = $_POST['txtMsg'];

	$query="insert into contact(name,email,contact,message) values('$name','$email','$contact','$message');";
	$result = mysqli_query($con,$query);
	
	if($result)
    {
    	echo '<script type="text/javascript">'; 
		echo 'alert("Thankyou for contacting us. Our team will soon connect with you!");'; 
		echo 'window.location.href = "index.php";';
		echo '</script>';
    }
}