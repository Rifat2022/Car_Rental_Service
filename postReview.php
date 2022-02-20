<?php

session_start();
if (isset($_SESSION['email'])) {
   $author=$_SESSION['email'];
}elseif(isset($_SESSION['user_email_address'])) {
    $author=$_SESSION['user_email_address'];
}
$statusMsg = "";
if (isset($_POST['submit'])) {

	$conn = new mysqli("localhost", "root", "", "car_rental");

        // If file upload form is submitted
		$catagory = $_POST["catagory"];
		$company_name = $_POST["company_name"];
		$model = $_POST["model"];
		$seats= $_POST["seats"];
		$cost = $_POST["cost"];
		$address = $_POST["address"];
		$status= $_POST["status"];
		$email = $_SESSION["email"];
    $number= $_POST["number"];

		$rating = $_POST["rating"];
 $imagetmp= addslashes (file_get_contents($_FILES['picFile']['tmp_name']));

                    $insert = $conn->query("INSERT into car_table ( `carCatagory`, `companyName`, `seats`, `cost`, `address`,`status`, `rating`,`author`,`model`,`picFile`,`number`) VALUES ('$catagory','$company_name','$seats','$cost','$address','Available for rent','$rating','$author','$model','$imagetmp','$number')");

                    $conn->close();


                    if ($insert) {
                        $status = 'success';
                        $statusMsg = "Car listed successfully.";
                    } else {
                        $statusMsg = "Car list failed, please try again.";
                    }


        // Display status message
        echo $statusMsg;
}
header("Location: browse_cars.php");




    ?>
