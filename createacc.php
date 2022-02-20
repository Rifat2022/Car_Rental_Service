<?php
$statusMsg = "";
if (isset($_POST['submit'])) {

	$conn = new mysqli("localhost", "root", "", "car_rental");

        // If file upload form is submitted
        $name = $_POST["uname"];
        $email = $_POST["uemail"];
        $password = $_POST["pass"];



        if (isset($_POST["submit"])) {
            $status = 'error';


                    $insert = $conn->query("INSERT into login (`name`,`email`, `password`) VALUES ('$name','$email','$password')");

                    $conn->close();


                    if ($insert) {
                        $status = 'success';
                        $statusMsg = "user created successfully.";
                        header("location: login.php");
                    } else {
                        $statusMsg = "user creation failed, please try again.";
                    }
                }

        // Display status message
        echo $statusMsg;

}




    ?>
	<a href="login.php">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Login</button>
        </a>

	<a href="index.php">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Register Again</button>
        </a>
