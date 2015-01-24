
<!DOCTYPE html>
<html>
<head>
<title>
<?php
echo $webtitle;
?> 
-
<?php
echo $webmotto;
?>
</title>
<style>
body {
background-color:#F8F8F8;
}
#navbar {
width:100%;
height:30%;
margin-left:-8px;
margin-top:-8px;
box-shadow:10px 10px 5px #888888;
background-color:white;
}
#loginbox {
background-color:#F2F2F2;
border:solid 1px #D8D8D8;
width:400px;
height:300px;
margin-top:150px;
margin-left:900px;
padding:2%;
}



</style>
</head>
<body>
<div id = "navbar">
<a href = "#"><strong>Panel</strong></a>
<a href = "#"><strong>News</strong></a>
<a href = "#"><strong>Contact</strong></a>
<a href = "#"><strong>Help</strong></a>
</div>
<div id = "texthead">
<?php
echo $webtitle;
?>
<p> : </p>
<?php
echo $webmotto;
?>
</div>
<div id = "loginbox">
<div id = "loginhead">
<p>Userpanel</p>
</div>
<form action="/content/login.php" method="POST">
<input type="text" value="Username" onclick="this.value=''" name="username"/>
<input type="password" value="Password" onclick="this.value=''" name="password"/>
<input type="submit" value="Inloggen" name="loginbutton"/>
</form>
<form action="/content/register.php" method="POST">
<input type="submit" value="Register" name="loginbutton"/>
</form>
</div>







</body>
</html>
