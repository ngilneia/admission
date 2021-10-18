<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('header.php');
include_once("db_connect.php");
?>
<title>Admission Form</title>
<?php include('container.php'); ?>
<div class="container">
	<h2>Admission Form</h2>
	<div class="row well alert alert-success">
		<?php
		$name = htmlspecialchars(trim($_POST['name'])) ?? "NA";
		$date = htmlspecialchars(trim($_POST['date'])) ?? "NA";
		if (isset($_POST['submit'])) {
			$stmt = $conn->prepare("INSERT INTO applicants(name,date) VALUES(?,?)");
			if ($stmt->bind_param("ss",	$name,	$date)) {
				if ($stmt->execute()) {
					echo "You're Registered Successfully!";
				} else {
					echo "Error in registering...Please try again later!";
				}
			} else {
			}
		} else {
			die('Invalid Request');
		}

		?>
	</div>

</div>
<?php include('footer.php'); ?>