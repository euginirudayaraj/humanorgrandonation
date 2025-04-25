<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	 $uid=$_SESSION['uid'];
	
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
  <li><a class="active" href="uhome.php">Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="userview.php">View Details</a></li>
   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php">LogOut</a></li>
</ul>
<div id="bg1"><p>HUMAN ORGAN DONATION SYSTEM PORTAL </p></div>

	<h2 align="center">Hospital Details</h2>

			<table width="102%" align="center">
	<tr>
		<td colspan="10">&nbsp;</td>
		</tr>	
		    <tr>
          <td width="2%">&nbsp;</td>
          <td width="9%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		   <td width="13%"><div align="center" class="style6"><strong>Hospital Name</strong> </div></td>
		    <td width="15%"><div align="center" class="style6"><strong>Location</strong> </div></td>
			 <td width="13%"><div align="center" class="style6"><strong>Address</strong> </div></td>
			  <td width="14%"><div align="center" class="style6"><strong>Email</strong> </div></td>
			  <td width="17%"><div align="center" class="style6"><strong>Phone</strong> </div></td>
		    <td width="17%"><div align="center" class="style6"><strong>Click To Donate</strong> </div></td>
        </tr>
		</form>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		
		

		$qry=mysqli_query($conn,"select * from hregist");
		$i=1;
		while($row=mysqli_fetch_array($qry))
		{
		?>

        <tr>
		 <td width="2%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['hname'];?></div></td>
			  <td><div align="center"><?php echo $row['location'];?></div></td>
			 <td><div align="center"><?php echo $row['address'];?></div></td>
			   <td><div align="center"><?php echo $row['email'];?></div></td>
			   <td><div align="center"><?php echo $row['phone'];?></div></td>
			  <td><div align="center"><a href="donate.php?hid=<?php echo $row['id'];?>">Donate To</a></div></td>
		 
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