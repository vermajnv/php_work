<!DOCTYPE html>
<html>
    <head>
        <title>Courses</title>
        <link rel="stylesheet" href="<?= baseUrl("/assets/css/style.css") ?>">
        <link rel="stylesheet" href="<?= baseUrl("/assets/css/header.css") ?>">
    </head>
    <body>
        <?php
        require("./views/header.php");
        ?>
        <a href="<?= baseUrl("/course/createForm") ?>">Create Course</a>
        <div class="FormWraper">
            <table>
                <tr>
                    <th>CODE</th>
                    <th>Duration</th>
                    <th>Title</th>
                </tr>
                <?php
                foreach ($rows as $row) {
                    ?>
                    <tr>
                        <td><?= $row["CODE"] ?></td>
                        <td><?= $row["DURATION"] ?></td>
                        <td><?= $row["TITLE"] ?></td>
                        <td>
                            <form action="<?= baseUrl("/course/updateForm") ?>" method="POST" class="FormBtn">
                                <button name="code" value="<?= $row["CODE"] ?>">Update</button>
                            </form>
                        </td>
                        <td><form action="<?= baseUrl("/course/delete") ?>" method="POST" class="FormBtn">
                                <button name="code" value="<?= $row["CODE"] ?>">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>

