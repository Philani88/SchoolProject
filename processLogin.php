<div class="processedlogin">
  <?php 
    include "connection.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
	  session_start();
          if(isset($_POST['password']) && isset($_POST['username'])){
			$userN = "name";
			$userPass  = "password";
	        $username = $_POST['username'];
		    $password = $_POST['password'];
		    if($username != "" && $password != ""){
			  $sqlPasswCheck = "SELECT*FROM registration WHERE password = ".'"'.$password.'"';
			  $sqlUsernameCheck = "SELECT*FROM registered_learners_tbl WHERE learnerNumber = ".'"'.$username.'"';
			  $passwordCheck = mysqli_query($conn,$sqlPasswCheck);
			  $usernameCheck = mysqli_query($conn,$sqlUsernameCheck);
			  $passwordCheckRes = mysqli_fetch_array($passwordCheck);
			  $usernameCheckRes = mysqli_fetch_array($usernameCheck);
			  if(isset($usernameCheckRes)){
				  if(isset($passwordCheckRes)){
					  $_SESSION['username'] = $username;
					  include "learnerPortal.php"; 
				  }
				  else{
					  echo '<p>'."incorrect username and password".'</p>';
				  }
			  }
			  else{
				  echo '<p>'."incorrect username and password".'</p>';
			  }
		    }
		    else{
			  echo ("Missing inputs from the form entry fields.");
			  include "Login-form.php";
		    }	 
	      }
		else{
			 echo '<script>alert("INPUT CORRECT USER LOGIN CREDENTIALS!")</script>';
             include "login-Form.php";			 
		}
	}
  ?>			
</div>