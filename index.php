<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>Welcome Page</title>
    </head>
    <body style="background-color:white">
	    	    
        <div style="display:block;margin-left:auto;margin-right:auto;text-align:center;">
            <h2>Bienvenue Welcome to you quick demo application running on </h2>
        </div>
	<div style="width:400px;height:60px;overflow:hidden;display:block;margin-left:auto;margin-right:auto;">
            <img src="openshift.png" width="400px" height="auto"/>
        </div>
	
	<div style="display:block;margin-left:auto;margin-right:auto;text-align:center;">
            <h3>Application Information</h3>
		<p> The internal server IP is <b><?php echo $_SERVER['SERVER_ADDR'] ?></b>
		    and the port number is <b><?php echo $_SERVER['SERVER_PORT'] ?> </b></p>
        </div>

    </body>
</html>
