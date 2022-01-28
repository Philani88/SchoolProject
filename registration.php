<!DOCTYPE html>
<html>
<?php
  include "connection.php";
  $sql = "INSERT INTO registration (firstN,lastN,password1,password2,email)";
?>
<form enctype ='multipart/form-data' id = "form" action = "modified.php" method = "POST" role="form" class="form-horizontal" >
   <div class="page-header">
      <h2>Register Account</h2>
      <p>If you already have an account with us, please login at the login page.</p>   
   </div>

    <div class = "form-group">
	  <label for = "file" class = "col-md-3 control-label">ID copy <i>(PDF only)</i></label>
	  <input type = "file" name = "idCopy" accept = ".pdf">
    </div>
     <div class="form-group">
       <label for="first" class="col-md-3 control-label">First Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="firstN" >
       </div>
     </div>
     <div class="form-group">
       <label for="last" class="col-md-3 control-label">Last Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="lastN" >
       </div>
     </div>
	 <div class = "form-group">
	   <label for = "ID" class = "col-md-3 control-label">ID</label>
	   <div class = "col-md-9">
	     <input type = "text" class = "form-control" name = "idN">
	   </div>
	 </div>
     <div class="form-group">
       <label for="email" class="col-md-3 control-label">Email</label>
       <div class="col-md-9">
       <input type="email" class="form-control" name="email">
       </div>
     </div> 
     <div class="form-group">
       <label for="email" class="col-md-3 control-label">Grade applied for</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="grade">
       </div>
     </div>
     <div class="form-group">
       <label for="email" class="col-md-3 control-label">Stream applied for</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="classID">
       </div>
     </div>	 	 
     <div class="form-group">
       <label for="password1" class="col-md-3 control-label">Password</label>
       <div class="col-md-9">
       <input type="password" class="form-control" name="password1">
       </div>
      </div>
    <div class="form-group">
      <label for="password2" class="col-md-3 control-label">Password Confirm</label>
      <div class="col-md-9">
        <input type="password" class="form-control" name="password2">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-offset-3 col-md-9">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="privacy" > I agree to the <a href="#">privacy policy</a>
          </label>
        </div>
      </div>
    </div>     
    <div class="form-group">
      <div class="col-md-offset-3 col-md-9">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </div>
  </form> 
<html>