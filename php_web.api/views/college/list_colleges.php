<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= baseURL("/assets/styles/header.css") ?>">
        <link rel="stylesheet" href="<?= baseURL("/assets/styles/list.style.css") ?>">
    </head>
    <body>
	<?php require("./views/header.php"); ?>
	<a id="deleteClg" class="common" href="<?= baseURL("/colleges/createForm") ?>">create college</a>
        <table id="tbl">
            <tr>
                <th>Name</th>
                <th>College Id</th>
                <th>Contact No</th>
                <th>Address</th>
            </tr>
	    <?php
	    foreach ($rows as $row) {
		?>
    	    <tr>
    		<td><?= $row["name"]; ?></td>
    		<td><?= $row["collegeId"]; ?></td>
    		<td><?= $row["contactNo"]; ?></td>
    		<td><?= $row["address"]; ?></td>
    		<td>
    		    <form action="<?= baseURL("/colleges/delete") ?>" method="POST">
			<input type="hidden" name="clgId" value="<?= $row["collegeId"]?>">
    			<button>Delete</button>
    		    </form>
    		</td>
		<td>
    		    <form action="<?= baseURL("/colleges/updateForm") ?>" method="POST">
			<input type="hidden" name="clgId" value="<?= $row["collegeId"]?>">
    			<button>Update</button>
    		    </form>
    		</td>
    		<!--<td><a id="deleteClg" class="common" href="&clgId= ?>">Delete</a></td>-->
    <!--                <td><a id="updateClg" class="common" href="update.college.form.php?clgId=<?= $row["collegeId"] ?>">Update</a></td>-->
    		<!--<td><a id="updateClg" class="common" href="<?= baseURL("/colleges/updateForm") ?>&clgId=<?= $row["collegeId"] ?>">Update</a></td>-->
    	    </tr>
		<?php
	    }
	    ?>
        </table>

    </body>
</html>
