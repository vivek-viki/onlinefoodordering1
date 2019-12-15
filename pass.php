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
	background-image:url("http://localhost/food ordering1/images/background.jpg");
}
/* Bordered form */
form {
  border:0px solid #f1f1f1;
  padding:0px 450px 500px 450px;
}

/* Full-width inputs */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}



/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 25%;
  border-radius: 25%;
}

/* Add padding to containers */
.container{
  padding: 16px;
}
.class1
{
color:#ffffff;
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
            <li><a href="http://localhost/food ordering1/index.html">Home</a></li>
            <li class="current"><a href="http://localhost/food ordering1/3.html">Gallery</a></li>
            <li><a href="http://localhost/food ordering1/a.html">About</a></li>
            <li class="current"><a href="http://localhost/food ordering1/5.html">Sign-up</a></li>
             <li><a href="http://localhost/food ordering1/signin.html">Sign-in</a></li>
          </ul>
        </nav>
      </div>
   </header>
<form id='login' action='http://localhost/food ordering1/php1.php' method='post' accept-charset='UTF-8'>
 <div class="imgcontainer">
    <img src="http://localhost/food ordering1/images/avtar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b><span class="class1">Username</span></b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="paas1"><span class="class1"><b>Password</b></span></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="submit">Sign In</button>
<a href=""  ><span class="class1">forgot password</span></a>
  </div>

</form>
</body>
</html>
