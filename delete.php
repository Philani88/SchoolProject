<?php
include "connection.php";
if(isset($_GET['idN'])){
  $idN = $_GET['idN'];	
  $sqldel = "DELETE FROM registration WHERE ID  =".$idN;
  $isDeleted = mysqli_query($conn,$sqldel);

if($isDeleted){
	include "DBTable-listing.php";	
}
else{
	echo "Error deleting record:". mysqli_error($conn);
	include "DBTable-listing.php";
}
}
?>