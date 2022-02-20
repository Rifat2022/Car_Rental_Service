<?php

session_start();

$error = "";
// store session data
if (isset($_POST['signin'])) {

    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "email or Password is invalid";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = new mysqli("localhost", "root", "", "car_rental");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

		$sql = "SELECT * FROM login WHERE email='" . $email . "' AND password='" . $password . "'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $_SESSION["email"] = $email;

			while ($row = $result->fetch_assoc()) {

                $_SESSION["utype"] = $row['admin'];
            }

        } else {
            $error = "email or Password is invalid";
        }
        $conn->close();
    }
}
