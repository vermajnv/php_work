<html>
    <head>
        <title>Create College</title>
        <link rel="stylesheet" href="<?= baseUrl('/assets/css/header.css') ?>">
        <link rel="stylesheet" href="<?= baseUrl('/assets/css/style.css') ?>">
    </head>
    <body>
        <?php
        require("./views/header.php");
        ?>
        <h3>Update college</h3>

        <div class="FormWraper">
            <form action="<?= baseUrl('/college/update') ?>" method="POST">
                <label>College Name</label>
                <input type="text" name="name" value="<?= $college["name"] ?>">
                <label>Address</label>
                <input type="text" name="address" value="<?= $college["address"] ?>">
                <label>Contact Number</label>
                <input type="text" name="contact" value="<?= $college["contactNo"] ?>">
                <!--<label>College Name</label>-->
                <input type="hidden" name="clgId" value="<?= $college["collegeId"] ?>">
                <button name="action" value="update">Update</button>
            </form>
        </div>
    </body>
</html>