<html>
    <head>
        <title>Create Courses</title>
	<link rel="stylesheet" href="<?= baseURL("/assets/styles/header.css")?>"/>
	<link rel="stylesheet" href="<?= baseURL("/assets/styles/list.style.css")?>"/>    </head>
    <body>
	<?php 
	    require("./views/header.php");
	?>
	<h3>Create Course</h3>
	<form action="<?= baseURL("/courses/create")?>" method="POST">
	    <label>
		Subject Code
		<input type="text" name="courseCode">
	    </label>
	    <label>
		Duration
		<input type="text" name="duration">
	    </label>
	    <label>
		Title
		<input type="text" name="title">
	    </label>
	    <button name="action" value="create">Add Record</button>
	</form>
    </body>
</html>

