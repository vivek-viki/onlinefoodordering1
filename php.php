<html>
<head>
<style>
body{
  font: 15px/1.5 Arial, Helvetica,sans-serif;
  padding:0;
  margin:0;
  background-color:#f4f4f4;
}
/* Global */
.container1{
  width:80%;
  margin:auto;
  overflow:hidden;
}

ul{
  margin:0;
  padding-left:500px;
}
/* Header **/
header{
  background:#35424a;
  color:#ffffff;
  padding-top:30px;
  min-height:70px;
  border-bottom:#e8491d 3px solid;
}
header a{
  color:#ffffff;
  text-decoration:none;
  text-transform: uppercase;
  font-size:16px;
}
header li{
  float:left;
  display:inline;
  padding: 0 20px 0 20px;
}
header #branding{
  float:default;
}
header .highlight, header .current a{
  color:#e8491d;
  font-weight:bold;
}

#newsletter form {
  float:right;
  margin-top:15px;
}
#newsletter input[type="email"]{
  padding:4px;
  height:25px;
  width:250px;
}
/* Boxes */
#boxes{
  margin-top:20px;
}

#boxes .box{
  float:left;
  text-align: center;
  width:30%;
  padding:10px;
}

#boxes .box img{
  width:250px;
}
body
{
	background-image:url("background.jpg");
}
.class1
{
	color:white;
}
</style>
<title>web</title>

	<?php
$username=$_POST['username'];
$email=$_POST['email1'];
$password=$_POST['mypass'];
$password1=$_POST['mypass2'];
 
if(!empty($username) || !empty($email) || !empty($password))
{
$host="localhost";
$dbusername="id11619154_vivek";
$dbpassword="vivek@1234";
$dbname="id11619154_reg";


$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);
if(mysqli_connect_error())
{
die('connect error('. mysqli_connect_error(). ')' . mysqli_connect_error());
}
else
{
$INSERT="INSERT INTO onlineform(username, password,email)values('$username' , '$password', '$email')";
if($conn->query($INSERT))
echo "inserted";
$conn->close();
}
}
else
{
echo "all fields are required";
die();
}
?>
</head>
<body>
 <header>
      <div class="container1">
        <div id="branding">
          <h1><span class="highlight">ONLINE FOOD ORDERING</span> </h1>
        </div>
        <nav>
          <ul>
	 <li><a href="index.html">Home</a></li>
            <li class="current"><a href="3.html">Gallery</a></li>
            <li><a href="b.html">Notifications</a></li>
             <li><a href="index.html">Log-out</a></li>
          </ul>
        </nav>
      </div>
   </header>
<style type="text/css">
.blinking{animation:blinkingtext 2s infinite;font-size:45;font-family:Times new roman;}
	@keyframes blinkingtext
	{
		20%{color:yellow;}
		49%{color:red;}
		50%{color:blue;}
		99%{color:pink;}
		100%{color:white;}
	}
</style>
<center>
<p class="blinking"><b>Select dishes</b></p>
<form  method="post" action="1.php">
<table >
<table border="5"  >
<tr>
<th><span class="class1">Food items</span></th>
<th><span class="class1">Drinks and desert</span></th>
</tr>
<tr>
<td><img src="7.jpg" width="194px" height="120px" id="1" onClick="menu(id);"><br/>
    <input type="checkbox" name="1"/><b><font color="Red">Idly and vada</font></b> <input type="text" name="q1" size="2"><b><font color="Red">Quatity</font></b> </td>
<td><img src="8.jpg" width="194px" height="120px" id="2" onClick="menu(id);"><br/>
    <input type="checkbox" name="2"/><b><font color="Red">Coffee</font></b> <input type="text" name="q2" size="2"><b><font color="Red">Quatity</font></b> </td>
</tr>
<tr>
<td><img src="9.jpg" width="194px" height="120px" id="3" onchange="menu("id");"><br/>
    <input type="checkbox" name="3"/><b><font color="Red">Masala Dosa</font></b> <input type="text" name="q3" size="2"><b><font color="Red">Quatity</font></b> </td>
<td><img src="10.jpg" width="194px" height="120px" id="4" onchange="menu("id");" ><br/>
    <input type="checkbox" name="4"/><b><font color="Red">Tea</font></b> <input type="text" name="q4" size="2"><b><font color="Red">Quatity</font></b> </td>
</tr>
<tr>
<td><img src="11.jpg" width="194px" height="120px" id="5" onchange="menu("id");"><br/>
    <input type="checkbox" name="5"/><b><font color="Red">Puri</font></b> <input type="text" name="q5" size="2"><b><font color="Red">Quatity</font></b> </td>
<td><img src="12.jpg" width="150px" height="150px" id="6" onchange="menu("id");"><br/>
    <input type="checkbox" name="6"/><b><font color="Red">Slice Juice</font></b><input type="text" name="q6" size="2"><b><font color="Red">Quatity</font></b> </td>
</tr>
<tr>
<td><img src="13.jpg" width="194px" height="120px" id="7" onchange="menu("id");"><br/>
    <input type="checkbox" name="7"/><b><font color="Red">Rice</font></b> <input type="text" name="q7" size="2"><b><font color="Red">Quatity</font></b> </td>
<td><img src="14.jpg" width="194px" height="120px" id="8" onchange="menu("id");"><br/>
    <input type="checkbox" name="8"/><b><font color="Red">Coco Cola</font></b><input type="text" name="q8" size="2"><b><font color="Red">Quatity</font></b> </td>
</tr>
<tr>
<td><img src="15.jpg" width="194px" height="120px" id="9" onchange="menu("id");"><br/>
    <input type="checkbox" name="9"/><b><font color="Red">Chapathi</font></b> <input type="text" name="q9" size="2"><b><font color="Red">Quatity</font></b> </td>
<td><img src="16.jpg" width="194px" height="120px" id="10" onchange="menu("id");"><br/>
    <input type="checkbox" name="10"/><b><font color="Red">Limca</font></b><input type="text" name="q10" size="2"><b><font color="Red">Quatity</font></b> </td>
</tr>
<tr>
<td><img src="17.jpg" width="194px" height="120px" id="11" onchange="menu("id");"><br/>
    <input type="checkbox" name="11"/><b><font color="Red">Porota</font></b> <input type="text" name="q11" size="2"><b><font color="Red">Quatity</font></b> </td>
<td><img src="18.jpg" width="194px" height="120px" id="12" onchange="menu("id");"><br/>
    <input type="checkbox" name="12"/><b><font color="Red">Jamun</font></b> <input type="text" name="q12" size="2"><b><font color="Red"></font></b>Quatity </td>
</tr>
<tr>
<td><img src="20.jpg" width="194px" height="120px" id="13" onchange="menu("id");"><br/>
    <input type="checkbox" name="13"/><b><font color="Red">Veg South Indian Thali</font></b> <input type="text" name="q13" size="2"><b><font color="Red">Quatity</font></b> </td>
<td><img src="21.jpg" width="194px" height="120px" id="14" onchange="menu("id");"><br/>
    <input type="checkbox" name="14"/><b><font color="Red">Peda</font></b> <input type="text" name="q14" size="2"><b><font color="Red">Quatity</font></b> </td>
</tr>
<tr>
<td><img src="22.jpg" width="194px" height="120px" id="15" onchange="menu("id");"><br/>
    <input type="checkbox" name="15"/><b><font color="Red">Non-veg South Indian Thali</font></b> <input type="text" name="q15" size="2"><b><font color="Red">Quatity</font></b> </td>
<td><img src="23.jpg" width="194px" height="120px" id="16" onchange="menu("id");"><br/>
    <input type="checkbox" name="16"/><b><font color="Red">Chocolate Cone</font></b> <input type="text" name="q16" size="2"><b><font color="Red">Quatity</font></b> </td>
</tr> 
<tr>
<td><img src="24.jpg" width="194px" height="120px"id="17" onchange="menu("id");"><br/>
    <input type="checkbox" name="17"/><b><font color="Red">Veg North Indian Thali</font></b> <input type="text" name="q17" size="2"><b><font color="Red">Quatity</font></b> </td>
<td><img src="25.jpg" width="194px" height="120px" id="18" onchange="menu("id");"><br/>
    <input type="checkbox" name="18"/><b><font color="Red">Vanilla Cone</font></b> <input type="text" name="q18" size="2"><b><font color="Red">Quatity</font></b> </td>
</tr>         
<tr>
<td><img src="26.jpg" width="194px" height="120px" id="19" onchange="menu("id");"><br/>
    <input type="checkbox" name="19"/><b><font color="Red">Non-veg North Indian Thali</font></b> <input type="text" name="q19" size="2"><b><font color="Red">Quatity</font></b> </td>
<td><img src="27.jpg" width="194px" height="120px" id="20" onchange="menu("id");"><br/>
    <input type="checkbox" name="20"/><b><font color="Red">Jalebi</font></b> <input type="text" name="q20" size="2"><b><font color="Red">Quatity</font></b> </td>
</tr>    
</table><br/><br/>
<input type="Submit" value="Submit">
</form>
</center>
<script type="text/javascript">
function menu(id)
{
	var val=document.getElementById(id);
	switch(val)
	{
		case 1: alert("1 Plate of Idle and vada is cost of Rs 35"); 
		          break;
		case 2: alert("1 Cup of Coffee is cost of Rs 15");
				  break;
		case 3: alert("1 Plate of Masala Dosa is cost of Rs 40");
		          break;
		case 4: alert("1 Cup of Tea is cost of Rs 15");
		          break;
		case 5: alert("1 Plate of Puri is cost of Rs 35");
		          break;
		case 6: alert("1 Bottle of Slice Juice is cost of Rs 30");
		          break;
		case 7: alert("1 Plate of Puliyogare is cost of Rs 30");
		          break;
	    case 8: alert("1 Bottle of Coco cola is cost of Rs 30");
		          break;
		case 9: alert("1 Plate of Chapathi is cost of Rs 30");
		          break;
	    case 10: alert("1 Bottle of Limca is cost of Rs 20");
		          break;
		case 11: alert("1 Plate of Parota is cost of Rs 35");
		          break;
		case 12: alert("1 Plate of Gamun is cost of Rs 30");
		          break;
		case 13: alert("1 Plate of Veg South Indian Tali is of cost of Rs 100");
		          break;
		case 14: alert("4 Pieces of Peda is cost of Rs 20");
		          break;
		case 15: alert("1 Plate of Non-veg South Indian Tali is of cost of Rs 110");
		          break;
		case 16: alert("1 Piece of Cone Chocolate Ice Cream is cost of Rs 30");
		          break;
		case 17: alert("1 Plate of Veg North-Indian Tali is of cost Rs 110");
		          break;
		case 18: alert("1 Piece of Cone Vanilla Ice Cream is cost of Rs 30");
		          break;
		case 19: alert("1 Plate of Non-veg North-Indian Tali is of cost of Rs 120");
		          break;
		case 20: alert("4 Pieces of Jalebi is cost of Rs 20");
		          break;
	}
}
</script>          
</body>
</html>