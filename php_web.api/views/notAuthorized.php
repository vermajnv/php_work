<html>
    <head>
        <title>Unauthorized</title>
        <link href="<?= baseUrl("/assets/css/style.css"); ?>" rel="stylesheet">
    </head>
    <body>
        <div class="notFoundWraper">
            <div class="notFound">
                <h1>Access denied</h1>
                <h3>You need to login first</h3>
                <form action="<?= baseUrl("/" . $qString) ?>" method="POST">
                    <label>Username</label>
                    <input type="text" name="username">
                    <label>Password</label>
                    <input type="password" name="password">
                    <button>Login</button>
                </form>
            </div>
        </div>

    </body>
</html>


