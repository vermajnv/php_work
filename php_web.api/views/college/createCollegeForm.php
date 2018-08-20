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
            <form action=<?= baseUrl('/college/create') ?> method="POST">
                <label>College Name</label>
                <input type="text" name="name" value="">
                <label>Address</label>
                <input type="text" name="address">
                <label>Contact Number</label>
                <input type="text" name="contact">
                <!--		<label>College Name</label>
                                <input type="text">-->
                <button name="action" value="create">Submit</button>
            </form>
        </div>
    </body>
</html>


