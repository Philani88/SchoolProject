<DOCTYPE!>
<html>
  <head>
    <title>Learner Dashboard</title>
	<link href = "studentPortalStyle.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
			  <option VALUE = "http://localhost/SchoolProject/login-form.php">Switch User</option>
			  <option VALUE = "Add Photo">Add Photo</option>
			  <option VALUE = "http://localhost/SchoolProject/login-form.php">logout</option>
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
	<div class = "announcements-horizontal-row" style = "background-color:tan">
	  <p style = "font-weight:bold;background-color:grey;padding:0.15% 0.25% 0.35%">Announcements:</p>
	  <p style = "font-weight:bold;color: grey;padding:0 1% 0.45%">no announcements...</p>
	</div><br>
	<div style = "width:99%;height:190%;padding-bottom:3%">
	  <section style = "float : left;width : 55rem">
	    <div class = "mid-section-colomn-left" align= "left" style = "padding-bottom:5%;border:3pt solid #01474D;width : `100%">
		  <h3 style = "padding-left:1%;"><img src = "img/menuIcon.png">Recently accessed subjects</h3><hr/>
		  <span>
		    <ul class = "recent-subj-list">
			  <li><a><img width = "30%"caption ="maths" src = "img/mathsCover.png"></img></a></li>
			  <li><a><img width = "30%"caption ="maths" src = "img/mathsCover.png"></img></a></li>
			  <li><a><img width = "30%"caption ="maths" src = "img/mathsCover.png"></img></a></li>
			</ul>
			<style>
			  ul.recent-subj-list > li {
                display: inline;
				padding: 0.75%;
              }
			</style>
		  </span> 
        </div><br><br>
		<div class = "mid-section-colomn-left" style = "padding-bottom:5%;border:3pt solid #01474D;width : 99%">
		    <h3 style = "padding-left:1%;">All subjects</h3><hr>
			<span align = "center">
		    <ul class = "all-subj-list">
			  <li><a><img width = "15%"caption ="maths" src = "img/mathsCover.png"></img></a></li>
			  <li><a><img width = "15%"caption ="maths" src = "img/mathsCover.png"></img></a></li>
			  <li><a><img width = "15%"caption ="maths" src = "img/mathsCover.png"></img></a></li>
			  <li><a><img width = "15%"caption ="maths" src = "img/mathsCover.png"></img></a></li>
			  <li><a><img width = "15%"caption ="maths" src = "img/mathsCover.png"></img></a></li>
			  <li><a><img width = "15%"caption ="maths" src = "img/mathsCover.png"></img></a></li>
			  <li><a><img width = "15%"caption ="maths" src = "img/mathsCover.png"></img></a></li>	  
			</ul>
			<style>
			  ul.all-subj-list > li {
				padding: 3%;
              }
			</style>
			</span>
		</div> 
	  </section>
	  <aside style = "padding:6% 18% 0 0;float : right">
	    <div class = "mid-section-colomn-right" style = "padding-bottom:10%;border:3pt solid #01474D;width : 200%">
		  <h3 style = "padding-left:1%;">Available servers</h3><hr>
		  <a href = "#">server 1</a>
		</div><br><br><br>
		<div class = "mid-section-right-col-events" style = "border:3pt solid #01474D;width : 230%">
		  <h3 style = "padding-left:1%;">Messeges</h3><hr>
		  <ul class = "events-list">
			  <li><a href = "#"><p>Messege link1</p></a></li> 
			  <li><a href = "#"><p>Messege link2</p></a></li> 
		  </ul>
		  <style>
			  ul.events-list > li, .mid-section-right-col-events{
				padding: 2%;
              }
			</style>
		</div><br><br><br>
		<div class = "mid-section-right-col-events" style = "border:3pt solid #01474D;width : 230%">
		  <h3 style = "padding-left:1%;">Events</h3><hr>
		  <ul class = "events-list">
			  <li><a><img caption ="maths" src = "img/option1.png">Math</img></a></li>
			  <li><a><img caption ="maths" src = "img/option1.png">Math</img></a></li>
			  <li><a><img caption ="maths" src = "img/option1.png">Math</img></a></li>
			  
		  </ul>
		  <style>
			  ul.events-list > li, .mid-section-right-col-events{
				padding: 2%;
              }
			</style>
		</div><br><br><br>
		<div class = "mid-section-right-col-calender" style = "border:3pt solid #01474D;width : 230%">
		  <h3 style = "padding-left:1%;">School calender</h3><hr>
		  <ul class = "events-list">
			  <li><a><img caption ="maths" src = "img/option1.png">Math</img></a></li>
			  <li><a><img caption ="maths" src = "img/option1.png">Math</img></a></li>
			  <li><a><img caption ="maths" src = "img/option1.png">Math</img></a></li>
			  
		  </ul>
		  <style>
			  ul.events-list > li, .mid-section-right-col-events{
				padding: 2%;
              }
			</style>
		</div>
	  </aside><br>
	</div><br>
	<span style = "padding-bottom:20%">
	  <div style = "border:3.5pt solid grey;padding:0.75% 0 2.25% 30%; background-color: tan">
	    <div>
	      <form method = "post" action= "findSubject.php">
		    <input name = "subj-search" style = "width:50%;text-align:left;padding:2.5% 1% 1.5%" type = "text" placeholder = "learning subject to search for?"/>
		    <a href= "#" role = "button"><img src = "img/searchIcon.png" width = "3%"></a>
			<div style = "padding-right:50.25%" align = "center">
			  <p>: e.g. Mathematics</p><hr/>
		    </div>
		  </form>
	    </div>
	    <nav style = " padding:0.65% 1.95% 0.65% .65%;width:26.5%;border:5pt solid grey;float : right">
	        <img src = "img/footerLogo.png"style = "width:100%;border:5pt solid grey;">
	    </nav>
	  </div>	
	</span><br>
  </body>
  <footer style = "background-color: #01474D;">
    <div class = "footer-row" style = "padding:1% 0 2.5% 0">   	
	  <nav>
	   <p style = "padding-left:20%;color:white" align = "center" > © 2023 fumu web appplications </p>
	  </nav>
	</div>  
  </footer>
</html>
