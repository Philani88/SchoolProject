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
			  <option VALUE = "http://localhost/SchoolProject/Login-form.php">Switch User</option>
			  <option VALUE = "Add Photo">Add Photo</option>
			  <option VALUE = "http://localhost/SchoolProject/Login-form.php">logout</option>
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
	<nav class = "horizontal-optionBar" style = "background-color:#01474D">
	   <style>
        #example {
        width: 50%;
        height: 10%;
        padding-left: 24.2%;
        display: -webkit-flex;
        /* Safari */
        -webkit-align-items: stretch;
        /* Safari 7.0+ */
        display: flex;
        align-items: center;
      }
      #example li {
        -webkit-flex: 1;
        /* Safari 6.1+ */
        flex: 1;
        list-style: none;
		text-align: left;
      }
      </style>
	  <ul id="example">
        <li>
	      <ul>
	         <li><a style = "text-decoration: none;color:white" href ="#"><p><img src = "img/homeIcon.png" width = "17%" style = "padding-right:2%" >Home</p></a></li>
	      </ul>
	    </li>
        <li>
	      <ul>
	         <li><a style = "text-decoration: none;color:white" href ="#"><p><img src ="img/dashboardIcon.png" width = "17%" style = "padding-right:2%">Dashboard</p></a></li>
		  </ul>
        <li>
	      <ul>
	         <li><a style = "text-decoration: none;color:white" href = "#"><p><img src ="img/mySubjectsIcon.png" width = "17%" style = "padding-right:2%">My subjects</p></a></li>
		  </ul> 
	    </li>
	    <li>
	      <ul>
	         <li><a style = "text-decoration: none;color:white" href = "#"><p>FOSS</p></a></li>
		  </ul> 
	    </li>
	    <li>
	      <ul>
	         <li><a  style = "text-decoration: none; color:white" href = "#"><p>Past Exam Papers</p></a></li>
		  </ul> 
	    </li>
      </ul>
    </nav>
    <div class = "announcement-bar" style = "background-color: tan" >
	  <p style = "background-color: grey; padding: 0.35%;font-weight:bold">ANNOUNCEMENTS:</p>
	  <p style = "color: grey;padding-bottom: 0.25%">no announcements...</p>	
	</div>
	  <section class = "mid-left-section-colunm">
	    <div style = "border:2px solid #01474D;">
		   <h3><img src = "img/menuIcon.png" ></img>Recently accessed subjects</h3>
		<div>
	  </section><br>
  </body>
  <footer style = "background-color: #01474D;">
    <div class = "footer-row" style = "padding:1% 0 1%">   	
	  <nav>
	   <p style = "color:white" align = "center" > © 2023 fumu web appplications </p>
	  </nav>
	</div>  
  </footer>
</html>
