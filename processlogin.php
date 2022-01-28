<!DOCTYPE>
<html>
  <?php 
    include "connection.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
	  session_start();
          if(isset($_POST['password']) && isset($_POST['first'])){
			$userN = "name";
			$userPass  = "password";
	        $lnumber = $_POST['first'];
		    $password = $_POST['password'];
		    if($lnumber != "" && $password != ""){
			  setcookie($userN,$lnumber);
			  setcookie($userPass,$password);
			  $lnumberArray = explode('l',$lnumber,2);
			  $learnerNumber = $lnumberArray[1];
			  $sql = "SELECT*FROM schoollearner";
			  $results = mysqli_query($conn,$sql);
			  while($row = mysqli_fetch_object($results)){
				  if($row->leanerNumber == $learnerNumber){
					  $_SESSION['userID'] = $learnerNumber;
					  break;
				  }
			    }
			  $sqlPasswCheck = "SELECT*FROM registration WHERE password1 = ".'"'.$password.'"';
			  $passwordRes = mysqli_query($conn,$sqlPasswCheck);
			  $sqlUsername = "SELECT*FROM schoollearner WHERE leanerNumber = ".$learnerNumber; 
			  $usernameRes = mysqli_query($conn,$sqlUsername);
			  $cornfirmPassw = mysqli_fetch_array($passwordRes);
			  $checkUsername = mysqli_fetch_array($usernameRes);
			  if(isset($checkUsername)){
				  if(isset($cornfirmPassw)){
					  $_SESSION['user'] = $lnumber;
					  include "mainpage.html";
				  }
				  else{
					  echo '<p>'."incorrect username or password".'</p>';
					  include "Login-form.php";
				  }
			  }
			  else{
				  echo '<p>'."incorrect username or password".'</p>';
				  include "Login-form.php";
			  }
		    }
		    else{
			  echo ("Missing inputs from the form entry fields.");
			  include "Login-form.php";
		    }	 
	      }
	} 
  ?>
 
</html>