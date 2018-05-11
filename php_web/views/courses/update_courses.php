<html>
    <head>
        <title>title</title>
	<link rel="stylesheet" href="../assets/styles/list.style.css"/>
	<link rel="stylesheet" href="../assets/styles/header.css"/>
    </head>
    <body>
	<?php 
	    include("../views/header.php");
	?>
	<form action="/php_web/controllers/course_controller.php">
	    <input type="hidden" name="courseCode" value="<?= $courseCode?>">
	    <label>Enter Course Code
		<input type="text" name="newCode" value="<?= $row["CODE"]?>">
	    </label>
	    
	    <label>Duration of Course
		<input type="text" name="newDuration" value="<?= $row["DURATION"]?>">
	    </label>
	    
	    <label>Title of the course
		<input type="text" name="newTitle" value="<?= $row["TITLE"]?>">
	    </label>
	    <button type="submit" name="action" value="update">Update</button>
	</form>
    </body>
</html>
