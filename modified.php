 <?php
  include "connection.php";
  if (isset($_POST['id'])){
  $sql = "delete from registration where id = '".$_POST['id']."'";
  $result = mysqli_query($sql);  
  }
  $id = $_REQUEST['idN'];
  $firstName = $_REQUEST['firstN']; 
  $lastName = $_REQUEST['lastN'];
  $password1 = $_REQUEST['password1'];
  $password2 = $_REQUEST['password2'];
  $email = $_REQUEST['email'];
  $grade = $_REQUEST['grade'];
  $classID =$_REQUEST['classID'];
  if(!isset($_FILES["idCopy"]['name'])){
	  echo "something wrong";
  }
  $fileToMove = $_FILES['idCopy']['tmp_name'];
  $idCopyPath = "./uploadFiles/".$_FILES['idCopy']['name'];
  if(move_uploaded_file($fileToMove,$idCopyPath)){
		  echo '<p>'."The ID COPY was uploaded successfully".'</p>';
  }
   $sqlRegistration = "INSERT INTO registration(ID,firstN,lastN,password1,password2,email,idCopy) VALUES ('$id','$firstName','$lastName','$password1','$password2','$email','$idCopyPath')";
   $resultForRegister = mysqli_query($conn,$sqlRegistration);
   if($resultForRegister){
	 $sqlSchoolL = "INSERT INTO schoollearner(leanerNumber,nationalID,grade,classID,schoolTitle) VALUES (00000,'$id',$grade,'$classID','clsRep')";
     $resultFOrSchoolL = mysqli_query($conn,$sqlSchoolL);
     if($resultFOrSchoolL){  
         $sqlLastID = mysqli_insert_id($conn);
	     echo ("<p>Account was successfully created to login and check the progress of your application use <br></p>");
	     echo ("Login Number: L00000".$sqlLastID. " and the passaword you used during regestration. ".'<br>');
     }  
   }
   $sql = "select * from registration";
   $result =  mysqli_query($conn,$sql);
   
?>
<html>
  <body>
    <table width = 100% border = "1" cellspacing = "1" cellpadding = "1">
	  <tr>
	    <td>ID</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Password</td>
		<td>Confirm Password</td>
		<td>Email</td>
		<td>ID Copy</td>
		<td>Acction</td>
	  </tr>
	  <?php
	    while($row = mysqli_fetch_object($result)){?>
		  <tr>
		    <td>"
			  <?php echo $row->ID;?>	
			</td> 
		    <td>
			  <?php echo $row->firstN;?>
            </td>			
		    <td>
			  <?php echo $row->lastN;?>
			</td>
		    <td>
			  <?php echo $row->password1;?>
			</td>	
		    <td>
			  <?php echo $row->password2;?>
            </td>			  
		    <td> 
			  <?php echo $row->email;?>
		    </td>
			<td> 
			  <?php echo $row->idCopy;?>
		    </td>
		    <td>
		      <a href = "delete.php?idN= <?php echo $row->ID;?>" onclick = "return confirm('Are You Sure')">Deregister</a> | 
			  <a href = "edit.php? idN = <?php echo $row->ID;?>" onclick = "return confirm('Are You Sure')">Edit</a>
		    </td>
		 </tr>		  
		<?php }
	  ?>
	</table>
  </body>
</html>