</html>
<?php
 //session_start();
 include("database.php");
 if($_GET['prid']==""){ ?>
   <script>
   alert('Select the product');
   alert(window.location='productdisplay.php');
 </script>
 <?php
 }
 if(isset($_GET['prid']))
 {
  
  $pid=$_GET['prid'];
 //echo "User name :".$username;
 //echo "pid : ".$pid;
 }
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <script type="text/javascript" src="js/functions.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/count.js"></script>
 <script type="text/javascript" src="js/ajax_captcha.js"></script>
 <script type="text/javascript" src="js/productmaster.js"></script>
 <script type="text/javascript" src="js/producteditvalidation.js"></script>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Student Admission Project</title>
 <link href="online.css" rel="stylesheet" type="text/css" />
 <style type="text/css" media="all">
  @import "online.css";
 </style>
 <script language="javascript">
 // function for comfirm box !!
 function isConfirmlog()
 {
  var r = confirm('Are you sure you want to log out !!');
  if(!r)
  {
   return false;
  }
  else
  {
  alert(window.location='logout.php');
  }
 }
 function del()
 {
  var r = confirm('Are you sure you want to Delete this product ??');
  if(!r)
  {
   return false;
  }
  else
  {
  alert(window.location='delete.php');
  }
 }
 function charcount()
 {
  document.getElementById('static').innerHTML = "Characters Remaining:  <span  id='charsLeft1'>   200 </span>";
  document.getElementById('static1').innerHTML = "Characters Remaining:  <span  id='charsLeft2'>   300 </span>";   
  document.getElementById('static2').innerHTML = "Characters Remaining:  <span  id='charsLeft3'>   500 </span>";
  document.getElementById('static3').innerHTML = "Characters Remaining:  <span  id='charsLeft4'>   100 </span>";   
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
      <div id="middletxtheader">Student Master</div>
      <div id="middletxt1">
        <p>Please Edit the details of  Students here.</p>
      </div>
      </div>
 <?php
  $get= @mysql_query("SELECT * FROM admissionform WHERE  id='$pid' ")or die(mysql_error());
  $num = @mysql_num_rows($get);
  for($i=0;$i<$num;$i++)
  {
   $pid= @mysql_result($get,$i,'id');
   $studentname= @mysql_result($get,$i,'studentname');
   $fname= @mysql_result($get,$i,'fathersname');
   $mname= @mysql_result($get,$i,'mothersname');
   $occp= @mysql_result($get,$i,'occuaptaion');
   $gender= @mysql_result($get,$i,'gender');
   $phone= @mysql_result($get,$i,'phonenumber');
   $address= @mysql_result($get,$i,'address');
   $city= @mysql_result($get,$i,'city');
   $state= @mysql_result($get,$i,'state');
   $standard= @mysql_result($get,$i,'standard');
   $totalfees= @mysql_result($get,$i,'totalfees');
   $paidamount= @mysql_result($get,$i,'paidamount');
   $remainingamount=$totalfees-$paidamount;
   
  
   
  }
 ?>
      <div id="middletxt">
        <form action="" method="post" name="frm_prd_edit" id="frm_prd_edit" enctype="multipart/form-data">
          <table width="100%" border=0>
            <tr>
              <td height="22"><table width="100%" border=0>
                  <tr>
                    <th colspan="5" id="formhedear">Edit Student Details.</th>
                  </tr>
                  <tr>
                    <td height="34" colspan="2"></td>
                    <td colspan="3"><div align="right"><font color="#FF0000">*</font><span class="style3"> Mandatory	Fields &nbsp; </span></div></td>
                  </tr>
                  
                   <tr>
        <td>
        <b>StudentName:</b>
        </td>
        <td>
        <input type="text" name="txtsname" size="25" value="<?php echo $studentname; ?>" />
        </td>
        </tr>
         <tr>
        <td>
        <b>Father's Name:</b>
        </td>
        <td>
        <input type="text" name="txtfaname" size="25"value="<?php echo $fname; ?>"  />
        </td>
        </tr>
         <tr>
        <td>
        <b>Mother's Name:</b>
        </td>
        <td>
        <input type="text" name="txtmname"  size="25"value="<?php echo $mname; ?>" />
        </td>
        </tr>
		<tr>
        <td>
        <b>Occupation:</b>
        </td>
        <td>
        <input type="text" name="txtoccupation"  size="25"value="<?php echo $occp; ?>" />
        </td>
        </tr>
         <tr>
        <td>
        <b>Gender:</b>
        </td>
        <td>
        <input type="radio" name="smail" value="Male" checked />Male
		<input type="radio" name="smail" value="female" />FeMale
		
        </td>
        </tr>
         <tr>
        <td>
        <b>PhoneNumber:</b>
        </td>
        <td>
        <input type="text" name="txtphone" size="25"value="<?php echo $phone; ?>"  />
        </td>
        </tr>
         <tr>
        <td>
        <b>Address:</b>
        </td>
        <td>
        <input type="text" name="txtaddress" size="25"value="<?php echo $address; ?>"  />
        </td>
        </tr>
         <tr>
        <td>
        <b>City:</b>
        </td>
        <td>
        <input type="text" name="txtcity"  size="25"value="<?php echo $city; ?>" />
        </td>
        </tr>
         <tr>
        <td>
        <b>State:</b>
        </td>
        <td>
        <input type="text" name="txtstate" size="25"value="<?php echo $state; ?>"  />
        </td>
        </tr>
        <tr>
        <td>
        <b>Standard:</b>
        </td>
        <td>
       <select name="seldsize" id="seldsize" style="width:180px;">
                        <option value="null">Select Standard</option>
			<option value="L kg" <?php if($standard =="L kg") echo "selected"; ?>>L kg </option>
			<option value="U kg" <?php if($standard =="U kg") echo "selected"; ?>>U kg</option>
			<option value="1st" <?php if($standard =="1st") echo "selected"; ?> >1st</option>
			<option value="2nd" <?php if($standard =="2nd") echo "selected"; ?>>2nd</option>	
			<option value="3rd"<?php if($standard =="3rd") echo "selected"; ?>>3rd</option>
			<option value="4th" <?php if($standard =="4th") echo "selected"; ?>>4th</option>
			<option value="5th" <?php if($standard =="5th") echo "selected"; ?>>5th</option>
		   </select>   
        </td>
        </tr>
		 <tr>
        <td>
        <b>TotalFees:</b>
        </td>
        <td>
        <input type="text" name="txtfees" id="txtfees" size="25"value="<?php echo $totalfees; ?>" />
        </td>
        </tr>
		 <tr>
        <td>
        <b>Paid Amount:</b>
        </td>
        <td>
        <input type="text" name="txtpamount" id="txtpamount" size="25"value="<?php echo $paidamount; ?>" />
        </td>
        </tr>
        <tr>
        <td>
       
        </td>
        <td>
        <input type="submit" name="smain" class="btn" value="EDIT" />
        </td>
        </tr>
        
              </table></td>
            </tr>
          </table>
        </form>
        <!-- end #middletxt -->
      </div>
    </div>
    <!-- end #mainContent -->
  </div>
  <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
  <div id="footer">
    (C) Copyright Student Admission Systems P. Limited
    <!-- end #footer -->
  </div>
  <!-- end #container -->
</div>
 
<?php
if(isset($_POST["smain"]))
{
	$studentname=$_POST["txtsname"];
	$fathername=$_POST["txtfaname"];
	$mothername=$_POST["txtmname"];
	$occupation=$_POST["txtoccupation"];
	$gender=$_POST["smail"];
	$phonenumber=$_POST["txtphone"];
	$address=$_POST["txtaddress"];
	$city=$_POST["txtcity"];
	$state=$_POST["txtstate"];
	$standard=$_POST["seldsize"];
	//$photo=$_POST["photoimg"];
	$totalfees=$_POST["txtfees"];
	$amount=$_POST["txtamount"];
	$paidamount=$_POST["txtpamount"];
	//$remainingamount=$_POST["txtramount"];
	$dateofadmission=$_POST["txtadmission"];
	$remainingamount=$totalfees-$paidamount;
	
	$sql="update  admissionform set studentname='$studentname',fathersname='$fathername',mothersname ='$mothername',occuaptaion='$occupation',gender='$gender',phonenumber='$phonenumber',address='$address',city='$city',state='$state',standard='$standard',totalfees=$totalfees,paidamount=$paidamount,remainingamount=$remainingamount where id='$pid'";
	$res=mysql_query($sql);
	if($res>0)
	{
		echo "<script>alert('Edit  Successfull');</script>";
	}
	else
	{
		echo mysql_error();
	}
						
					
				
	   
mysql_close($con);	
}

?>

</body>
