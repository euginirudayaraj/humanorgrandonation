<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	if(isset($_POST['btn']))
	{

$file_name=$_FILES['img']['name'];  
$file_loc=$_FILES['img']['tmp_name'];
$folder = "upload/";   

$path=move_uploaded_file($file_loc,$folder.$file_name);
$license=$file_name;
	$qry=mysqli_query($conn,"insert into hregist values('','$hname','$loc','$address','$email','$phone','$aname','$license','$psw')");
		if($qry)
		{
		echo"<script> alert('Registerd sucessfully')</script>";
		
		}
		else
		{
		echo "<script> alert('Enter the fields correctly')</script>";
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
  <li><a  href="index.php">Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="admin.php">Admin login</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a class="active" href="hospital.php">Hospital Login</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="donor.php">Donor Login</a></li>
   <li><a href="#">&nbsp;</a></li>

</ul>
<div id="bg1"><p>HUMAN ORGAN DONATION SYSTEM PORTAL </p></div>

<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()" enctype="multipart/form-data">
  <table width="42%" border="0" align="center">
	<tr>
	<td colspan="2" align="center"><strong>HOSPITAL REGISTRATION </strong></td>
	</tr>
	<tr>
      <td width="43%">&nbsp;</td>
      <td width="57%">&nbsp;</td>
     
    </tr>
    <tr>
     
      <td>Hospital Name</td>
      <td>
        <input name="hname" type="text" id="hname" onChange="return name ()"/>
      </td>
      
    </tr>
    <tr>
     
      <td>Location</td>
      <td><input name="loc" type="text" id="loc" />
      </td>
     
    </tr>
	
	
	
	 <tr>
     
      <td>Hospital Address</td>
      <td><textarea name="address"></textarea>
      </td>
      
    </tr>
	
	
	
	
    <tr>
     
      <td>Official Email Id</td>
      <td><input name="email" type="email" id="email" required/></td>
     
    </tr>
	
	
	  <tr>
     
      <td>Contact no </td>
      <td><input name="phone" type="text" id="phone"  /></td>
      
    </tr>


	 <tr>
     
      <td>Hospital Admin Name</td>
      <td><input name="aname" type="text" id="aname"  /></td>
     
    </tr>


	 <tr>
     
      <td>Hospital License</td>
      <td><input name="img" type="file" id="license"  /></td>
     
    </tr>


    <tr>
     
      <td>Password</td>
      <td><input name="psw" type="password" id="psw" /></td>
      
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