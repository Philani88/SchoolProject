<?php
  include "connection.php";
  $sql = "select * from registration";
  $result = mysqli_query($conn,$sql);
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
		     <a href = "delete.php?idN= <?php echo $row->ID;?>" onclick = "return confirm('Are You Sure')">Deregister</a> | 
			 <a href = "edit.php? idN = <?php echo $row->ID;?>" onclick = "return confirm('Are You Sure')">Edit</a>
		   </td>
		 </tr>		  
		<?php }
	  ?>
	</table>
  </body>
</html>