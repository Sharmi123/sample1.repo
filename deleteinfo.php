<?php   
 include("database.php");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <script type="text/javascript" src="js/functions.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/count.js"></script>
 <script type="text/javascript" src="js/ajax_captcha.js"></script>
 <script type="text/javascript" src="js/productmaster.js"></script>
 <script type="text/javascript" src="js/productmastervalidation.js"></script>
 <script type="text/javascript" src="scripts/jquery.min.js"></script>
 <script type="text/javascript" src="scripts/jquery.form.js"></script>


  

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Student Admission Project</title>
 <link href="css/online.css" rel="stylesheet" type="text/css" />
 <style type="text/css" media="all">
  @import "online.css";
 </style>
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
      <div id="subsidebar2"><a href="home.php">Home</a>
      </div>
      <div id="subsidebar2"><a href="index.php" >Log out</a> 
      </div>
    </div>
    <!-- end #sidebar1 -->
  </div>
  <div id="mainContent">
    <div id="mainContent1">
    <div id="middletxtheadermain">
      <div id="middletxtheader">View Info Master</div>
      <div id="middletxt1">
        <p>View Students Details Information.</p>
      </div>
      </div>
      <div id="middletxt">
      
       <div id="middletxtheader" align="right">Delete Students Info </div>
        <!-- end #middletxt -->
      <form name="frm_stock" id="frm_stock" method="post" action="">
      <table border="1" cellpadding="0" cellspacing="0" width="685" height="300">
       <tr>
        <th align="center">Name</th>
        <th align="center">Father's Name</th>
		<th align="center">Gender</th>
        <th align="center">Standard</th>
        <th align="center">TotalFees</th>
		<th align="center">PaidMoney</th>
		 <th align="center">Remain</th>
		  <th align="center">DateofAdmiision</th>
            <th align="center">Photo</th>
       
       </tr>

     <?php
    $get= @mysql_query("SELECT * FROM admissionform ")or die(mysql_error());
    $num = @mysql_num_rows($get);
    for($i=0;$i<$num;$i++)
    {
		$id=@mysql_result($get,$i,'id');
     $name= @mysql_result($get,$i,'studentname');
     $fname=@mysql_result($get,$i,'fathersname');
	 $gender=@mysql_result($get,$i,'gender');
	 $standard=@mysql_result($get,$i,'standard');
	 $tfees=@mysql_result($get,$i,'totalfees ');
	 $paidmoney=@mysql_result($get,$i,'paidamount');
	 $remain=@mysql_result($get,$i,'remainingamount');
	 $dateofadd=@mysql_result($get,$i,'dateofaddmission');
	 $photo=@mysql_result($get,$i,'photo');
	 
	 
     ?>
       <tr>
       <td width="80"><?php echo   $name;?></td>
       <td width="200"><?php echo  $fname;?></td>
	  
       <td width="150"><?php echo  $gender;?></td>
       <td width="150"><?php echo  $standard;?></td>
       <td width="150"><?php echo  $tfees;?></td>
       <td width="150"><?php echo  $paidmoney;?></td>
       <td width="150"><?php echo  $remain;?></td>
       <td width="150"><?php echo  $dateofadd;?></td>
        <td align="center"><img id="imgg" width="90px" height="90px" src="studentimages/<?php echo $photo;?>"/></td>
        <td align="center">Delete<a href="delete.php?prid=<?php echo $id; ?>"><img src="images/del.jpg" height="64" width="64" name="imgedit" value="Delete"></a></td>
       </tr>
 <?php
    }
 ?>
      </table>
      </form>	
      </div>
    </div>
    <!-- end #mainContent -->
  </div>
  <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
  <div id="footer">
    (C) Copyright Student Admission Form P. Limited
    <!-- end #footer -->
  </div>
  <!-- end #container -->
</div>
 
  

</body>
</html>