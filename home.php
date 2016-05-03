 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <script type="text/javascript" src="js/functions.js"></script>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>School Management System</title>
 <link href="css/online.css" rel="stylesheet" type="text/css" />
 <style type="text/css" media="all">
 @import "online.css";
 </style>
 <script language="javascript">
 // function for comfirm box !!
 function logoutcon()
 {
  var conlog = confirm('Are you sure you want to log out !!');
  if(conlog)
  {
   alert(window.location="index.php");
  }
  else
  {
  return false;
  }
 }
 </script>
</head>


<body class="twoColFixLtHdr">
<div id="header">
  <!-- end #header -->
</div>
<div id="container">
  <div id="container1"></div>
  <div id="sidebar1">
    <div id="subsidebar1">
      <div id="subsidebar3"> Navigation </div>
	  <div id="subsidebar2"><a href="admissionform.php">Add Student Info</a></div>
      <div id="subsidebar2"><a href="viewinfo.php">View Info</a> 
      </div>
       <div id="subsidebar2"><a href="deleteinfo.php">Delete Info</a> 
      </div>
      <div id="subsidebar2"><a href="index.php" onclick="logoutcon();">Log out</a> 
      </div>
    </div>
    <!-- end #sidebar1 -->
  </div>
  
  
  <div id="mainContent">
    <div id="mainContent1">
    <div id="middletxtheadermain">
      <div id="middletxtheader" align="right">Welcome</div>
      <div id="middletxt1">
       <div align="center"><img src="images/aaa.jpg" alt="Online Shopping" width="400" height="100"/> </div>
      </div>
      </div>
      <div id="middletxt">
       <div id="middletxtheader" align="right"></div>
        <!-- end #middletxt -->
       <div align="center"><img src="images/school.jpg" alt="Pump" width="420" height="420" align="center" /> </div>
      </div>
    </div>
    <!-- end #mainContent -->
  </div>
  <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
  <div id="footer">
    (C) Copyright School Admission Project P. Limited
    <!-- end #footer -->
  </div>
  <!-- end #container -->
</div>
</body>
</html>