<?php 
// check if you are redirected by the form and not any other way
if (isset($_POST['submit_food'])) {
// connect to database
require_once('../connection.php');
// get all data from the form
$name = $_POST['name'];
$image = $_POST['image'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];

// insert the data into the database
$sql = "INSERT INTO food(name, image, price, description, category)VALUES('$name', '$image', $price, '$description', '$category')";

if (mysqli_query($conn, $sql)) {
    header('Location: ../index.php');
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);  

// redirect to the foods page
}else{
    header('Location: ../index.php');
    exit();
}
?>
