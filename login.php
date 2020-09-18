<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="login_css.css">
        <title>Registration system PHP and MySQL</title>
    </head>

    <body>

    <?php
	include("connection.php");
	session_start();
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // Check user is exist in the database
			$result = mysqli_query($conn, "SELECT * FROM `logins` WHERE username='$username' AND passwords='$password'");
			$result1 = $result;
			
			// Associative array
			$row = mysqli_fetch_assoc($result1);
			$role = $row['role'];
			
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
				$_SESSION['type']=$role;
                // Redirect to user dashboard page
                header("Location: home.php");
            }
        }
    ?>

<div class="container">
		<div class="header">
			<div class="img-holder">
				<img class="img-circle" src="https://static3.depositphotos.com/1003631/209/i/950/depositphotos_2099183-stock-photo-fine-table-setting-in-gourmet.jpg" alt="image can't be loaded">
			</div>
			<h1>
				Login
			</h1>			
		</div>
		<div class="form_container">
			<form action="" method="post">
				<div>
					<input type="text" name="username"autofocus required>
					<label for="">
						Username
					</label>
				</div>

				<div>
					<input type="password" name="password" id="password" autofocus required>
					<label for="">
						Password
					</label>
				</div>

				<div>
					<input type="submit" value="Login" name="submit">
				</div>
			</form>
		</div>
		<div class="forgot_password">
			<p>Have an account?
				<a href="register.php">
					sign up here
				</a>
			</p>
		</div>
	</div>
    </body>
</html>