<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>Welcome Page</title>
    </head>
    <body style="background-color:white">
        <div style="display:block;margin-left:auto;margin-right:auto;text-align:center;">
            <h2>Welcome to </h2>
        </div>
	<div style="width:400px;height:200px;overflow:hidden;display:block;margin-left:auto;margin-right:auto;">
            <img src="openshift.png" width="400px" height="auto"/>
        </div>
	
	 <div style="display:block;margin-left:auto;margin-right:auto;text-align:center;">
	    <h2>Application Information</h2>
          <table border="1">
            <thead>
              <tr>
                <th>Env Var</th>
                <th>Value</th>
              <tr>
            </thead>
            <tbody>
              <tr>
                <td>Pod IP</td>
                <td><?php echo $_SERVER['SERVER_ADDR'] ?></td>
              </tr>
              <tr>
                <td>Pod Port</td>
                <td><?php echo $_SERVER['SERVER_PORT'] ?></td>
              </tr>
            </tbody>
          </table>
		 </div>
    </body>
</html>
