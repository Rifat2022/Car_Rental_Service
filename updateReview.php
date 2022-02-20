<?php
session_start();
if (isset($_SESSION['email'])) {
   $email=$_SESSION['email'];
}elseif (isset($_SESSION['user_email_address'])) {
    $email=$_SESSION['user_email_address'];
}
$carid = $_GET['id'];
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


        $rating = $_POST["rating"];
        $number = $_POST["number"];

                    $update = $conn->query("UPDATE `car_table` SET `carCatagory` = '$catagory' , `companyName` = '$company_name', `seats` = '$seats', `cost` = '$cost', `address` = '$address',`status` = '$status', `rating` = '$rating', `author` = '$email',`model`= '$model',`number`= '$number'  where `carId` = '$carid'");

                    $conn->close();


                    if ($update) {
                        $status = 'success';
                        $statusMsg = "car listed successfully.";
						header("location: mypost.php");
                    } else {
                        $statusMsg = "Car list failed, please try again.";
                    }


        // Display status message
        echo $statusMsg;


}





    ?>
