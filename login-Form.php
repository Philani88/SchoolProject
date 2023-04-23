<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="loginFormStyle.css">
    <title>Login To Portal</title>
  </head>
  <header align = "center" style = "width:20%;padding-left:40%" >
    <img src = "img/SchoolManangementLogo2.png" style = "padding-top:1%; width:100%">
  </header>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form" method = "POST" action = "processLogin.php" role = "form">
          <input name = "username" type="text" placeholder="username"/>
          <input name = "password"type="password" placeholder="password"/>
          <button>login</button>
          <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
      </div>
    </div>
  </body>
  <footer>
	<div class = "footer-row" style = "padding-top:1%">   	
	  <nav>
	   <p style = "color:white" align = "center" > © 2023 fumu web appplications </p>
	  </nav>
	</div>  
  </footer>
</html>