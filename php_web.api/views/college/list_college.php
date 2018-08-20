<!DOCTYPE html>
<html>
    <head>
        <title>College List</title>
        <link rel="stylesheet" href="<?= baseUrl('/assets/css/style.css') ?>">
        <link rel="stylesheet" href="<?= baseUrl('/assets/css/header.css') ?>">
    </head>
    <body>
        <?php
        require("./views/header.php");
        ?>
        <h3>List of Colleges...</h3>
        <a href="<?= baseUrl("/college/createForm") ?>">Create College</a>
        <div class="FormWraper">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Id</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Picture</th>
                </tr>
                <?php foreach ($rows as $row) { ?>
                    <tr>
                        <td><?= $row["name"] ?></td>
                        <td><?= $row["collegeId"] ?></td>
                        <td><?= $row["contactNo"] ?></td>
                        <td><?= $row["address"] ?></td>
                        <td><img src="./assets/images/<?= $row["picture"] ?>"></td>
                        <td>
                            <form action="<?= baseUrl('/college/updateForm'); ?>" method="POST" class="FormBtn">
                                <input type="hidden" name="collegeId" value="<?= $row["collegeId"] ?>">
                                <button>Update</button>
                            </form>
                        </td>

                        <td>
                            <form action="<?= baseUrl('/college/delete'); ?>" method="POST" class="FormBtn">
                                <input type="hidden" name="clgId" value="<?= $row["collegeId"] ?>">
                                <button>Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>