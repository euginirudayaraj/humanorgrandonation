<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$uid=$_SESSION['uid'];
	$hid=$_REQUEST['hid'];
	
	 $cdate=date("Y-m-d");
if(isset($_POST['btn']))
{

		$max_qry = mysqli_query($conn,"select max(id) from donate");
		$max_row = mysqli_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
	$qry=mysqli_query($conn,"insert into donate values('$id','$uid','$hid','$dob','$bg','$ocup','$rt','$name','$phone','$email','','$cdate','$organ')");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
	
}

}

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


	 <form id="f1" name="f1" method="post" action="#" >
  <table width="44%" height="428" border="0" align="center">
		
		<tr>
        <td colspan="2"  align="center" ><div class="style5"><h3>Eye Donation</h></div></td>
     
    </tr>
	
    <tr>
    
      <td height="50">Your Blood Group</td>
      <td>
        <input name="bg" type="text" id="bg" required/>
      </td>
    </tr>
	
	
	
	
	
   <tr>
     
      <td width="45%" height="45">Organ</td>
      <td width="55%" ><select name="organ" required>
	  <option value="">Select</option>
	  <option value="Kidney">Kidney</option>
	   <option value="Liver">Liver</option>
	  <option value="Eye">Eye</option>
	   <option value="heart">heart</option>
	    <option value="Lungs">Lungs</option>

	  </select></td>
    </tr>
	
	
	    <tr>
    
      <td height="42">Date Of Birth</td>
      <td><input name="dob" type="date" id="dob" required/></td>
      
    </tr>
    <tr>
      <td height="43">Occupation</td>
      <td>
        <input name="ocup" type="text" id="ocup" required/>
     </td>
    </tr>
	
    <tr>
     <td height="48">Relation Type</td>
      <td><input name="rt" type="text" id="rt" required/></td>
    </tr>
	
	<tr>
     <td height="46">Relation  Name </td>
      <td><input name="name" type="text" id="name"required /></td>
    </tr>
  <tr>
       <td height="48">Relation  Number </td>
      <td><input name="phone" type="text" id="phone" required  pattern="[6789][0-9]{9}"  title="firstnumber should be start with 6 or 7 or 8 or 9 range 10"/></td>
    </tr>
		
	<tr>
      <td>Relation Email</td>
      <td><input type="text" name="email" id="email" required></td>
    </tr>
	<tr>
     
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>


<div> &nbsp;</div>
<br>
<br>
<div id="footer"> <strong></strong></div>