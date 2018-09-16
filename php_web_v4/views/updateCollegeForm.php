<html>
    <head>
        <title>Update College</title>
        <link rel="stylesheet" href="<?= baseUrl("/assets/css/header.css") ?>">
    </head>
    <body>
        <?php require("header.php"); ?>
        <form action="<?= baseUrl("/college/update") ?>" method="POST">
            <label>College Name</label>
            <input type="text" value="<?= $rows['name'] ?>" name="name">
            <label>Address</label>
            <input type="text" value="<?= $rows['address'] ?>" name="address">
            <label>Contact</label>
            <input type="text" value="<?= $rows['contactNo'] ?>" name="contact">
            <label>Picture</label>
            <input type="text" value="<?= $rows['picture'] ?>" name="picture">
            <input type="hidden" value="<?= $rows['collegeId'] ?>" name="collegeId">
            <button name="" value="">Update</button>
        </form>
    </body>
</html>


