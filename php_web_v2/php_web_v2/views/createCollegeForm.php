<html>
    <head>
        <title>Create College Form</title>
        <link rel="stylesheet" href="<?= baseUrl("/assets/css/header.css") ?>">
    </head>
    <body>
        <?php require("header.php"); ?>
        <form action="<?= baseUrl("/college/create") ?>" method="POST">
            <label>College Name</label>
            <input type="text" value="" name="name">
            <label>Address</label>
            <input type="text" value="" name="address">
            <label>Contact</label>
            <input type="text" value="" name="contact">
            <label>Picture</label>
            <input type="text" value="" name="picture">
            <button name="action" value="create">Create College</button>
        </form>
    </body>
</html>
