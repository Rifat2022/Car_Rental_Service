<?php
$useremail = $_GET['id'];
if (isset($_POST['submit'])) {


$conn = new mysqli("localhost", "root", "", "car_rental");


// sql to delete a record
$sql = "DELETE FROM login WHERE email='$useremail'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";

} else {
  echo "Error deleting record: " . $conn->error;
}
header("Location: admin.php");

}
