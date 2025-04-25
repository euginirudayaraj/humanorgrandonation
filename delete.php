	<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$uid=$_SESSION['uid'];
		
		$did=$_REQUEST['did'];
		$qt=mysqli_query($conn,"delete  from donate where id='$did'");
		if($qt){?>
		 <script> alert('Deleted successfully')
window.location.href=("userview.php");</script>
<?php } ?>
		
				
	