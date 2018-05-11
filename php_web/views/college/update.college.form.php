<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Update college Details</title>
	<link rel="stylesheet" href="../assets/styles/header.css">
        <link rel="stylesheet" href="../assets/styles/list.style.css">
    </head>
    <body>
	<?php require("../views/header.php"); ?>
	<h1>Update college Details</h1>
	<!--redirecting towards update college file-->
	<form action="/php_web/controllers/college_controller.php">
	    <input type="hidden" name="whereId" value="<?= $clgId; ?>">
	    <label for="">
		Update College Name
		<input type="text" name="newName" value="<?= $row["name"]; ?>">

	    </label>

	    <label for="">
		Update Contact No
		<input type="text" name="newNo" value="<?= $row["contactNo"]; ?>">
	    </label>

	    <label for="">
		Update Address
		<input type="text" name="newAddress" value="<?= $row["address"]; ?>">
	    </label>
	    <button value="update" name="action">update</button>
	</form>
    </body>
</html>