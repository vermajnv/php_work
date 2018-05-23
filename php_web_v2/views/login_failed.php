<html>
    <head>
        <title>Login failed</title>
    </head>
    <style>
	body {
	    height: 100vh;
	    display: flex;
	    flex-direction: row;
	    justify-content: center;
	    align-items: center;
	}
	.Container {
	    border : 1px dashed red;
	}
    </style>
    <link rel="stylesheet" href="<?= baseURL("/assets/styles/list.style.css")?>"/>
    <body>
	<div class="Container">
	    <h4>You are not authorized to view this page</h4>
	    <h5>Please provide a valid username and password</h5>
	    <form action="<?= baseURL("/".$qString)?>" method="POST">
		<label>
		    username
		    <input type="text" name="username">
		</label>
		
		<label>
		    password
		    <input type="password" name="password">
		</label>
		<button type="submit" id="submit">login</button>
	    </form>
	</div>
	<script src="./assets/js/events.js"></script>
    </body>
</html>
