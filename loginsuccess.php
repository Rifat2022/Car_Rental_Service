<?php 
session_start();
$email = $_SESSION["email"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
</head>

<body>
 <h1>logged in as <?php echo $email;?></h1>
 
 <a href="logout.php">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button>
        </a>
   
</body>

</html>