<?php
$connect = mysqli_connect("localhost", "root", "", "car_rental");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM car_table
	WHERE companyName LIKE '%".$search."%'
	OR address LIKE '%".$search."%'
	OR cost LIKE '%".$search."%'
	OR model LIKE '%".$search."%'
	OR carCatagory LIKE '%".$search."%'
	";
}
else
{
	$query = "";
}
if($query==""){

}
else{
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Company Name</th>
							<th>Model</th>
							<th>Seats</th>
							<th>Cost per day</th>
							<th>Category</th>
							<th>Status</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{

		$output .= '
			<tr>
				<td>'.$row["companyName"].'</td>
				<td>'.$row["model"].'</td>
				<td>'.$row["seats"].'</td>
				<td>'.$row["cost"].'</td>
				<td>'.$row["carCatagory"].'</td>
					<td>'.$row["status"].'</td>
				<td><a class="boxed-btn3" href="car_details.php?id='.$row["carId"].'">View Post</a></td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
}

?>
