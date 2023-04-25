<DOCTYPE!>
<html>
  <head>
    <title>Learner Dashboard</title>
	<link href = "studentPortalStyle.css">
    <meta></meta>
  </head>
  <body>
    <header>
	  <div class = "header-row1">
	  	<nav class = "header-row1-signedIn-user-dropdown-options" align = "right">
		  <label  for = "logedin_user">
		    <img src = "img/profileIcon.png" style = "padding-top:0.5%;padding-right:0.5%" width = "1.7%">
		    <?php
			  include "connection.php";
			  $loggedInUserName = $_SESSION['username'];
			  $sqlGetLearnerEmail = "SELECT*FROM registered_learners_tbl WHERE learnerNumber =".'"'.$loggedInUserName.'"';
			  $getLearnerEmailRes = mysqli_query($conn,$sqlGetLearnerEmail);
			  $row = mysqli_fetch_object($getLearnerEmailRes);
			  			  
			  $sqlGetLearnerName = "SELECT*FROM registration WHERE emailAddrs =".'"'.$row->emailAddrs.'"';
			  $getLearnerNameRes = mysqli_query($conn,$sqlGetLearnerName);
			  $row = mysqli_fetch_object($getLearnerNameRes);
			?>
			</label>
			<select style = "padding:0.5%">
			  <option><?php echo $row->name." ".$row->surname;?></option>
			  <option VALUE = "Masseges">masseges</option>
			  <option VALUE = "http://localhost/SchoolManangementSys/Login-form.php">Switch User</option>
			  <option VALUE = "Add Photo">Add Photo</option>
			  <option VALUE = "http://localhost/SchoolManangementSys/Login-form.php">logout</option>
			  <script>
			    const select = document.querySelector("select")
                select.onchange = () => {
                  if (select.selectedIndex !== 0) {
                    window.location.href = select.value;
                  }
                };
			  </script>
			</select>
		</nav>    
	  </div><hr/>
	  <div class = "header-row2">
	    <span><img src = "img/footerLogo.png" style = "padding-bottom:2%" width = "10%"></span>
	    <span><img src = "img/SchoolManangementLogo2.png" style = "padding-left:78%" width = "11.5%"></span>
	  </div>
	</header>
	<div class = "horizontal-optionBar">
	   <ul>
	     <li><a  href = "#">Home</a></li>
		 <li><a  href = "#">Dashboard<a></li>
		 <li><a href = "#">My Subjects</a></li>
		 <li><a href = "#">FOSS</a></li>
		 <li><a href = "#">Past Exam Papers</a></li>
	   </u/>
	</div>
  </body>
  <footer style = "background-color: #01474D;">
    <div class = "footer-row" style = "padding:1% 0 1%">   	
	  <nav>
	   <p style = "color:white" align = "center" > © 2023 fumu web appplications </p>
	  </nav>
	</div>  
  </footer>
</html>
