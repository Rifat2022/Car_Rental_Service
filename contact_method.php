<?php
session_start();
$statusMsg = "";
if (isset($_POST['submit'])) {

	$conn = new mysqli("localhost", "root", "", "car_rental");

        // If file upload form is submitted
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$message = $_POST["message"];

                    $insert = $conn->query("INSERT into contact (`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')");

                    $conn->close();


                    if ($insert) {
                        $status = 'success';
                        $statusMsg = " message sent successfully.";
                    } else {
                        $statusMsg = "failed, please try again.";
                    }


        // Display status message
        echo $statusMsg;
}
header("Location: home.php");




    ?>
