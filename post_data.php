<?php

include_once 'database.php';
if(isset($_POST['save']))
{
	 $company = $_POST['company'];
	 $post = $_POST['post'];
	 $salary = $_POST['salary'];
	 $type = $_POST['type'];
	 $description = $_POST['description'];
	 $environment = $_POST['environment'];
	 $responsibility = $_POST['responsibility'];
	 $location = $_POST['location'];
	 $rating = $_POST['rating'];



	 $sql = "INSERT INTO car_table (company,post,salary,type,description,environment,responsibility,location,rating)
	 VALUES ('$company','$post','$salary','$type','$description','$environment','$responsibility','$location','$rating')";
	 if (mysqli_query($conn, $sql)) {
		echo "New post created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}



if(isset($_POST['save_feedback']))
{
	 $message = $_POST['message'];
	 $name = $_POST['name'];




	 $sql = "INSERT INTO feedback (message,name)
	 VALUES ('$message','$name')";
	 if (mysqli_query($conn, $sql)) {
		header("Location: home.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

if(isset($_POST['save_subscribe']))
{
	 $email = $_POST['email'];




	 $sql = "INSERT INTO subscribe (email)
	 VALUES ('$email')";
	 if (mysqli_query($conn, $sql)) {
		header("Location: home.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
