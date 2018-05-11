<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/styles/header.css">
        <link rel="stylesheet" href="../assets/styles/list.style.css">
    </head>
    <body>
        <?php require("../views/header.php");?>
	<a id="deleteClg" class="common" href="/php_web/controllers/college_controller.php?action=createForm">create college</a>
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
                    <!--<td><a id="deleteClg" class="common" href="delete.college.php?clgId=<?= $row["collegeId"]?>">Delete</a></td>-->
                    <td><a id="deleteClg" class="common" href="/php_web/controllers/college_controller.php?action=delete&clgId=<?= $row["collegeId"]?>">Delete</a></td>
<!--                <td><a id="updateClg" class="common" href="update.college.form.php?clgId=<?= $row["collegeId"]?>">Update</a></td>-->
                    <td><a id="updateClg" class="common" href="/php_web/controllers/college_controller.php?action=updateForm&clgId=<?= $row["collegeId"]?>">Update</a></td>
                </tr>
                    <?php
                     }
                    ?>
        </table>

    </body>
</html>
