<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$hid=$_SESSION['hid'];
	
		$did=$_REQUEST['did'];
			$phone=$_REQUEST['phn'];
		$msg="Organ Donation application accepted";
		$qy=mysqli_query($conn,"update donate set status='1' where id='$did'");
		
		?>
		
		<iframe src="http://smsserver9.creativepoint.in/api.php?username=fantasy&password=596692&to=<?php echo $phone;?>&from=FSSMSS&message=Dear User your msg is <?php echo $msg;?> Sent By FSMSG FSSMSS&PEID=1501563800000030506&templateid=1507162882948811640"style="display:send sucess">
</iframe>
		<?php
	if($qy){?>
		 <script> alert('Accept successfully')
window.location.href=("hhome.php");</script>
<?php } ?>
	
?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

</body>
</html>
