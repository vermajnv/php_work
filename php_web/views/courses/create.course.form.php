<html>
    <head>
        <title>Create Courses</title>
	<link rel="stylesheet" href="../assets/styles/list.style.css"/>
	<link rel="stylesheet" href="../assets/styles/header.css"/>
    </head>
    <body>
	<?php 
	    require("../views/header.php");
	?>
	<h3>Create Course</h3>
	<form action="/php_web/controllers/course_controller.php">
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

