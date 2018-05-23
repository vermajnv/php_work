<html>
    <head>
        <title>Page Not Found..</title>
	<style>
	    
	    * {
		margin : 0;
		padding: 0;
	    }
	    body {
		height: 100vh;
		width: 100%;
		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
		
	    }
	    h2 {
		color : red;
	    }
	    
	    span {
		color: green;
		background-color: lightgray;
		border-radius: 2px;
	    }
	    .Container {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		border : 1px dashed red;
		height: 40%;
		width: 50%
	    }
	</style>
    </head>
    <body>
        <div class="Container">
	    <h2>404:Page Not Found</h2>
	    <p>The Resource <span>'<?= $_POST["route"]?>'</span><- You requested is not found on server. Please Check path again</p>
	</div>
    </body>
</html>
