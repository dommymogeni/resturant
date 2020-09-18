<?php 

include('connection.php');
// start the session (required on all pages using session variables)
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" type="text/css" href="./style.css"/>
<!-- font-awesome links -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
</head>
<body>

<?php
if($_SESSION['type'] == "admin"){ ?>
    <!-- navbar -->
    <nav>
        <a href="/aminproject/home.php"><i class="fas fa-hamburger"></i></a>
        <div>
            <a href="./new.php"><i class="fas fa-plus-circle"></i> Add food</a>   
            <a href="./home.php">View food</a>
            <a href="./contact.php">contact us</a>
            <a href="./logout.php">Logout</a>
        </div>
    </nav>
<?php }?>


<?php
if($_SESSION['type'] == "User"){ ?>
    <!-- navbar -->
    <nav>
        <a href="/aminproject/home.php"><i class="fas fa-hamburger"></i></a>
        <div>   
            <a href="./home.php">View food</a>
            <a href="./contact.php">contact us</a>
            <a href="./logout.php">Logout</a>
        </div>
    </nav>
<?php }?>