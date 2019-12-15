<html>
<head><title>Display forms</title>
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
	background-image:url("http://localhost/food ordering1/images/background.jpg");
}
table
{
	background-image:url("http://localhost/food ordering1/images/29.jpg");
}
.class1
{
	color:green;
}
</style>
</head>
<body>
 <header>
      <div class="container1">
        <div id="branding">
          <h1><span class="highlight">ONLINE FOOD ORDERING</span> </h1>
        </div>
        <nav>
          <ul>
            <li><a href="C:\Users\ADMIN\Desktop\food ordering2\2.html">Home</a></li>
            <li class="current"><a href="C:\Users\ADMIN\Desktop\food ordering2\3.html">Gallery</a></li>
            <li><a href="C:\Users\ADMIN\Desktop\food ordering2\b.html">Notifications</a></li>
             <li><a href="C:\Users\ADMIN\Desktop\food ordering2\2.html">Log-out</a></li>
          </ul>
        </nav>
      </div>
   </header>
<?php
$item1=0;
$item2=0;
$item3=0;
$item4=0;
$item5=0;
$item6=0;
$item7=0;
$item8=0;
$item9=0;
$item10=0;
$item11=0;
$item12=0;
$item13=0;
$item14=0;
$item15=0;
$item16=0;
$item17=0;
$item18=0;
$item19=0;
$item20=0;
$price1=35;
$price2=15;
$price3=40;
$price4=15;
$price5=35;
$price6=30;
$price7=30;
$price8=30;
$price9=30;
$price10=20;
$price11=35;
$price12=30;
$price13=100;
$price14=20;
$price15=110;
$price16=30;
$price17=110;
$price18=30;
$price19=120;
$price20=20;
if(isset($_POST['1']))
$item1=$_POST["q1"];
if(isset($_POST['2']))
$item2=$_POST["q2"];
if(isset($_POST['3']))
$item3=$_POST["q3"];
if(isset($_POST['4']))
$item4=$_POST["q4"];
if(isset($_POST['5']))
$item5=$_POST["q5"];
if(isset($_POST['6']))
$item6=$_POST["q6"];
if(isset($_POST['7']))
$item7=$_POST["q7"];
if(isset($_POST['8']))
$item8=$_POST["q8"];
if(isset($_POST['9']))
$item9=$_POST["q9"];
if(isset($_POST['10']))
$item10=$_POST["q10"];
if(isset($_POST['11']))
$item11=$_POST["q11"];
if(isset($_POST['12']))
$item12=$_POST["q12"];
if(isset($_POST['13']))
$item13=$_POST["q13"];
if(isset($_POST['14']))
$item14=$_POST["q14"];
if(isset($_POST['15']))
$item15=$_POST["q15"];
if(isset($_POST['16']))
$item16=$_POST["q16"];
if(isset($_POST['17']))
$item17=$_POST["q17"];
if(isset($_POST['18']))
$item18=$_POST["q18"];
if(isset($_POST['19']))
$item19=$_POST["q19"];
if(isset($_POST['20']))
$item20=$_POST["q20"];
$total1=$item1*$price1;
$total2=$item2*$price2;
$total3=$item3*$price3;
$total4=$item4*$price4;
$total5=$item5*$price5;
$total6=$item6*$price6;
$total7=$item7*$price7;
$total8=$item8*$price8;
$total9=$item9*$price9;
$total10=$item10*$price10;
$total11=$item11*$price11;
$total12=$item12*$price12;
$total13=$item13*$price13;
$total14=$item14*$price14;
$total15=$item15*$price15;
$total16=$item16*$price16;
$total17=$item17*$price17;
$total18=$item18*$price18;
$total19=$item19*$price19;
$total20=$item20*$price20;
$total=($total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9+$total10+$total11+$total12+$total13+$total14+$total15+$total16+$total17+$total18+$total19+$total20);
$total+=($total*2)/100;
?>
<center>
<h3><span class="class1">Your order</span></h3>
<table border=2>
<tr>
<th >Food name</th>
<th>Food Items</th>
<th>Price</th>
<th>Total</th>
</tr>
<tr>
<td><?php print("idly and vada");?></td>
<td><?php print("$item1");?></td>
<td><?php print("$price1");?></td>
<td><?php print("$total1");?></td>
</tr>
<tr>
<td><?php print("coffee");?></td>
<td><?php print("$item2");?></td>
<td><?php print("$price2");?></td>
<td><?php print("$total2");?></td>
</tr>
<tr>
<td><?php print("masala dosa");?></td>
<td><?php print("$item3");?></td>
<td><?php print("$price3");?></td>
<td><?php print("$total3");?></td>   
</tr>
<tr> 
<td><?php print("tea");?></td>
<td><?php print("$item4");?></td>
<td><?php print("$price4");?></td>
<td><?php print("$total4");?></td>
</tr>  
<tr> 
<td><?php print("puri");?></td>
<td><?php print("$item5");?></td>
<td><?php print("$price5");?></td>
<td><?php print("$total5");?></td>
</tr>  
<tr> 
<td><?php print("slice juice");?></td>
<td><?php print("$item6");?></td>
<td><?php print("$price6");?></td>
<td><?php print("$total6");?></td>
</tr>  
<tr> 
<td><?php print("rice");?></td>
<td><?php print("$item7");?></td>
<td><?php print("$price7");?></td>
<td><?php print("$total7");?></td>
</tr>  
<tr> 
<td><?php print("coco cola");?></td>
<td><?php print("$item8");?></td>
<td><?php print("$price8");?></td>
<td><?php print("$total8");?></td>
</tr>  
<tr>
<td><?php print("chapathi");?></td> 
<td><?php print("$item9");?></td>
<td><?php print("$price9");?></td>
<td><?php print("$total9");?></td>
</tr>  
<tr> 
<td><?php print("limca");?></td>
<td><?php print("$item10");?></td>
<td><?php print("$price10");?></td>
<td><?php print("$total10");?></td>
</tr>  
<tr> 
<td><?php print("Porota");?></td> 
<td><?php print("$item11");?></td>
<td><?php print("$price11");?></td>
<td><?php print("$total11");?></td>
</tr>  
<tr>
<td><?php print("jamun");?></td>  
<td><?php print("$item12");?></td>
<td><?php print("$price12");?></td>
<td><?php print("$total12");?></td>
</tr>
<tr>
<td><?php print("Veg South Indian Thali ");?></td> 
<td><?php print("$item13");?></td>
<td><?php print("$price13");?></td>
<td><?php print("$total13");?></td>
</tr>    
<tr> 
<td><?php print("peda");?></td> 
<td><?php print("$item14");?></td>
<td><?php print("$price14");?></td>
<td><?php print("$total14");?></td>
</tr>  
<tr> 
<td><?php print("Non-veg South Indian Thali ");?></td> 
<td><?php print("$item15");?></td>
<td><?php print("$price15");?></td>
<td><?php print("$total15");?></td>
</tr>  
<tr> 
<td><?php print("Chocolate Cone");?></td> 
<td><?php print("$item16");?></td>
<td><?php print("$price16");?></td>
<td><?php print("$total16");?></td>
</tr>  
<tr> 
<td><?php print("Veg North Indian Thali ");?></td> 
<td><?php print("$item17");?></td>
<td><?php print("$price17");?></td>
<td><?php print("$total17");?></td>
</tr>  
<tr> 
<td><?php print("Vanilla Cone");?></td> 
<td><?php print("$item18");?></td>
<td><?php print("$price18");?></td>
<td><?php print("$total18");?></td>
</tr>  
<tr> 
<td><?php print("Non-veg North Indian Thali");?></td> 
<td><?php print("$item19");?></td>
<td><?php print("$price19");?></td>
<td><?php print("$total19");?></td>
</tr>  
<tr> 
<td><?php print("Jalebi ");?></td> 
<td><?php print("$item20");?></td>
<td><?php print("$price20");?></td>
<td><?php print("$total20");?></td>
</tr>  
</table><br/><br/>
<span class="class1"><?php print"<h3>Total bill including GST of 2% : <b>$total</b></h3>";?></span>
<h3><b><i><font color="Blue">Your order will be deliver within few minutes </font></b></i></h3>
<h3><b><i><font color="Green">Thank you for visiting our site . Please Visit once again</font></b></i></h3>
</center>
</body>
</html>
