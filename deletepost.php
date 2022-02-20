<?php
$carid = $_GET['id'];
if (isset($_POST['submit'])) {


$conn = new mysqli("localhost", "root", "", "car_rental");


// sql to delete a record
$sql = "DELETE FROM car_table WHERE carId='$carid'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";

} else {
  echo "Error deleting record: " . $conn->error;
}
header("Location: admin.php");

}
