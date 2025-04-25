<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$hid=$_SESSION['hid'];
	?>

<html>
<title>Organ Donate</title>
<style>
p
{
	color:#000000;
	text-align: center;
	text-transform: uppercase;
	 font-size:40px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 30px;
  overflow: hidden;
  background-color: #666699;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
   border-radius:0px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

#footer {
  padding: 45px;
  background: #666699;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  border-radius:10px;
  text-align:center;
  text-decoration:blink;
   font-family: Arial;
   font-size:15px;
}
#bg1 {

  padding:80px;
  background:url("images/1.jpg");
  background-repeat: no-repeat;
  background-size: 100%  300px;
  border-radius:5px;
   border-radius:0px;
   font-size:35px;
}

</style>
</head>
<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
	  <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a  href="hhome.php">Hospital Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a class="active" href="viewd.php">View Donors</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="viewh.php">View Hospitals</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php">LogOut</a></li>
</ul>
<div id="bg1"><p>HUMAN ORGAN DONATION SYSTEM PORTAL </p></div>

<h2 align="center"> Donor Details</h2>

<table width="102%" align="center">
	<tr>
		<td colspan="10">&nbsp;</td>
		</tr>	
		    <tr>
          <td width="2%">&nbsp;</td>
          <td width="3%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		   <td width="10%"><div align="center" class="style6"><strong>Donor Name</strong> </div></td>
		    <td width="9%"><div align="center" class="style6"><strong>DOB</strong> </div></td>
			 <td width="9%"><div align="center" class="style6"><strong>Contact</strong> </div></td>
			  <td width="9%"><div align="center" class="style6"><strong>Address</strong> </div></td>
			 <td width="8%"><div align="center" class="style6"><strong>Occupation</strong> </div></td>
			  <td width="8%"><div align="center" class="style6"><strong>Relation</strong> </div></td>
			  <td width="11%"><div align="center" class="style6"><strong>Contact</strong> </div></td>
			   <td width="11%"><div align="center" class="style6"><strong>Organ</strong> </div></td>
			     </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from donate where hid='$hid' && status='1'");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		$uid=$row['uid'];
		$qry1=mysqli_query($conn,"select * from register where id='$uid'");
		$row1=mysqli_fetch_array($qry1)
		
		
		?>

        <tr>
		 <td width="2%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row1['name'];?></div></td>
			  <td><div align="center"><?php echo $row['dob'];?></div></td>
			 <td><div align="center"><?php echo $row1['phone'];?></div></td>
			   <td><div align="center"><?php echo $row1['address'];?></div></td>
			   <td><div align="center"><?php echo $row['ocup'];?></div></td>
			   <td><div align="center"><?php echo $row['rtype'];?></div></td>
			   <td><div align="center"><?php echo $row['rphone'];?></div></td>
			      <td><div align="center"><?php echo $row['organ'];?></div></td>
			   	 
		 
        </tr>
		
		
		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td>&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
		}
		
		?>
				<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>




<div> &nbsp;</div>
<br>
<br>
<div id="footer"> <strong></strong></div>

