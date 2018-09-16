<html>
    <head>
        <title>Un-authorized access..!</title>
    </head>
    <body>
        <h1>You Are not authorized to access this page</h1>
        <form action="<?= baseUrl("/" . $queryString); ?>" method="post">
            <label>Username</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="text" name="password">
            <button>Login</button>
        </form>
    </body>
</html>
