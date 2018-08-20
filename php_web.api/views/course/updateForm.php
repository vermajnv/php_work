<html>
    <head>
        <title>Create College</title>
        <link rel="stylesheet" href="<?= baseUrl("/assets/css/style.css") ?>">
        <link rel="stylesheet" href="<?= baseUrl("/assets/css/header.css") ?>">
    </head>
    <body>
        <?php
        require("./views/header.php");
        ?>
        <h3>Update Course</h3>

        <div class="FormWraper">
            <form action="<?= baseUrl("/course/update") ?>" method="POST">
                <label>Course Code</label>
                <input type="text" name="newCode" value="<?= $course["CODE"] ?>">
                <label>Duration</label>
                <input type="text" name="newDuration" value="<?= $course["DURATION"] ?>">
                <label>Title</label>
                <input type="text" name="newTitle" value="<?= $course["TITLE"] ?>">
                <!--<label>College Name</label>-->
                <input type="hidden" name="courseCode" value="<?= $course["CODE"] ?>">
                <button name="action" value="update">Update</button>
            </form>
        </div>
    </body>
</html>
