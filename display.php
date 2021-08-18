<html>
<head>
<style>  
.error {color: #FF0001;}  
body
{
	background-image: linear-gradient(to right top, #ff1414, #fa6900, #e99b00, #cec600, #a8eb12);
}
p
{
	color:cyan;
	font-size:30px;
	font-weight:bold;
	text-align:center;
}

h1
{
	text-align:center;
	color: brown;
	font-size:52px;
	font-weight:bold;
}	
h2,a
{
	text-align:center;
	color: pink;
	font-size:36px;
	font-weight:bold;
}
</style>
</head>
<body>
<?php 
		
    	echo "<h1>You have sucessfully registered.</h1>";  
        echo "<h2>Your Input:</h2>";  
        echo "<p>Name: " .$_GET["name"];  
        echo "<br><br>";  
        echo "Email: " .$_GET["email"];  
        echo "<br><br>";  
        echo "Phone No: " .$_GET["mobileno"];  
        echo "<br><br>";  
        echo "Password: " .$_GET["password"];  
        echo "<br><br>";    
		echo "Date of Birth: ".$_GET["day"].":".$_GET["month"].":".$_GET["year"];
        echo "<br><br>";  
        echo "Weight: " .$_GET["weight"]."</p>";		  
?> 
</body>
</html>