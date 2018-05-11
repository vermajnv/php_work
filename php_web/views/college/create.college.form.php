<!--now this url representing this page-->
<!--url : localhost:9000/sourceFile/creating.college.php?clgName=gillu&no=88808080&address=kheri-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="../assets/styles/header.css">
        <link rel="stylesheet" href="../assets/styles/list.style.css">
    </head>
    <body>
        <?php require("../views/header.php");?>
        <h2>creating college</h2>
        <form action="../controllers/college_controller.php" class="form">    

            <label for="">
                Name
                <input type="text" name="clgName">
            </label>

            <label for="">
                Contact Number
                <input type="text" name="no">
            </label>

            <label for="address">
                Address
                <input type="text" name="address">
            </label>
            <button name="action" value="create">Submit</button>
        </form>
    </body>
</html>

