<html>
    <head>
        <title>Course List</title>
	<link rel="stylesheet" href="<?= baseURL("/assets/styles/header.css")?>"/>
	<link rel="stylesheet" href="<?= baseURL("/assets/styles/list.style.css")?>"/>
    </head>
    <body>
	<?php
	    require("./views/header.php");
	?>
	<h2>Course list</h2>
	<a class="common" href="<?= baseURL("/courses/createForm")?>">Add Courses</a>
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
		<td>
    		    <form action="<?= baseURL("/courses/updateForm") ?>" method="POST">
			<input type="hidden" name="courseCode" value="<?= $row["CODE"];?>">
    			<button>Update</button>
    		    </form>
    		</td>
		<td>
    		    <form action="<?= baseURL("/courses/delete") ?>" method="POST">
			<input type="hidden" name="courseCode" value="<?= $row["CODE"];?>">
    			<button>Delete</button>
    		    </form>
    		</td>
<!--		<td><a class="common" href="<?= baseURL("/courses/updateForm")?>&=<?= $row["CODE"];?>">Update</a></td>
		<td><a class="common" href="<?= baseURL("/courses/delete")?>&courseCode=">Delete</a></td>-->
	    </tr>
	    <?php }?>
	</table>
    </body>
</html>


