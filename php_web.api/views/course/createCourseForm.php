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
        <h3>Create college</h3>
        <div class="FormWraper">
            <form action="<?= baseUrl("/course/create") ?>" method="POST">
                <label>Course Code</label>
                <input type="text" name="code" value="">
                <label>Duration</label>
                <input type="text" name="duration">
                <label>Title</label>
                <input type="text" name="title">
                <!--		<label>College Name</label>
                                <input type="text">-->
                <button name="action" value="create">Submit</button>
            </form>
        </div>
    </body>
</html>




