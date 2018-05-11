<html>
    <head>
        <title>Course List</title>
	<link rel="stylesheet" href="../assets/styles/header.css"/>
	<link rel="stylesheet" href="../assets/styles/list.style.css"/>
    </head>
    <body>
	<?php
	    require("../views/header.php");
	?>
	<h2>Course list</h2>
	<a class="common" href="/php_web/controllers/course_controller.php?action=createForm">Add Courses</a>
	<table id="tbl">
	    <tr>
		<th>Code</th>
		<th>Duration</th>
		<th>Title</th>
	    </tr>
	    <?php foreach ($rows as $row) {
		?>
	    <tr>
		<td><?= $row["CODE"];?></td>
		<td><?= $row["DURATION"]?></td>
		<td><?= $row["TITLE"]?></td>
		<td><a class="common" href="/php_web/controllers/course_controller.php?action=updateForm&courseCode=<?= $row["CODE"];?>">Update</a></td>
		<td><a class="common" href="/php_web/controllers/course_controller.php?action=delete&courseCode=<?= $row["CODE"];?>">Delete</a></td>
	    </tr>
	    <?php }?>
	</table>
    </body>
</html>


