<html>
    <head>
        <title>College List</title>
        <link rel="stylesheet" href="<?= baseUrl("/assets/css/header.css") ?>">
    </head>
    <body>
        <?php require("header.php"); ?>
        <a href="<?= baseUrl("/college/createForm") ?>">Create College</a>
        <table>
            <tr>
                <th>Name</th>
                <th>College Id</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Picture</th>
            </tr>
            <?php foreach ($rows as $row) { ?>
                <tr>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['collegeId']; ?></td>
                    <td><?= $row['address']; ?></td>
                    <td><?= $row['contactNo']; ?></td>
                    <td><?= $row['picture']; ?></td>
                    <td>
                        <form action="<?= baseUrl("/college/delete") ?>" method="post">
                            <input type="hidden" name="collegeId" value="<?= $row['collegeId'] ?>">
                            <button name="">Delete</button>
                        </form>
                    </td>

                    <td>
                        <form action="<?= baseUrl("/college/updateForm") ?>" method="post">
                            <input type="hidden" name="collegeId" value="<?= $row['collegeId'] ?>">
                            <button name="">Update</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>


