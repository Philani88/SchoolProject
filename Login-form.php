<!DOCTYPE html>
  <html>
    <head>
	  <meta charset = "utf-8">
	  <title>LOGIN_SESSION</title>
	</head>
	<body>
	  <form method = "POST" action = "processlogin.php" role = "form" class = "form-horizontal">
		<table class = "form-header">
		  <div class = "form-header">
		    <h2>Space for other atributes:</h2><hr/>	
		  </div>
		<div class = "form-group">
		  <tr id = "Row-input">
		    <td>
			  <div class = "col-md">
			    <label for = "first" class= "label">Learner Number</label>
			      <input type="text" class = "form-control" name = "first" >
			  </div>
			</td>
		    <td>
			  <div class = "col-md">
			    <label for="first" class="label">Password</label>
			    <input type="password" class="form-control" name = "password" >
			  </div>
			</td>
		  </tr> 
		  <tr>
		    <td>
		      <div class ="col-md">
		        <button type = "submit" class = "button">Submit</button>
			  </div>
			</td>
		  </tr>
		</div>
		</table>
	  </form>
	</body>
  </html>