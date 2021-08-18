<!DOCTYPE html>  
<html>  
<head>  
<style>  
.error {color: #FF0001;}  
body
{
	background-image: linear-gradient(to right top, #ff1414, #fa6900, #e99b00, #cec600, #a8eb12);
}
form
{
	color:cyan;
	font-size:30px;
	font-weight:bold;
	text-align:center;
}
form input, form select
{
	font-size:22px;
	font-weight:bold;
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
$nameErr = $emailErr = $mobilenoErr = $genderErr = $passErr = $vpassErr = $dobErr = $weightErr ="";  
$name = $email = $mobileno = $pass = $vpass = $day = $month = $year = $weight = $tweight = "";  
  
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{        
    if (empty($_POST["name"]))
	{  
        $nameErr = "Name is required";  
    } 
	else 
	{  
        $name = input_data($_POST["name"]);  
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
		{  
            $nameErr = "Only alphabets and white space are allowed";  
        }  
    }  
    if (empty($_POST["email"])) 
	{  
            $emailErr = "Email is required";  
    } 
	else 
	{  
        $email = input_data($_POST["email"]);  
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{  
            $emailErr = "Invalid email format";  
        }  
    }  
    if (empty($_POST["mobileno"])) 
	{  
        $mobilenoErr = "Mobile no is required";  
    }
	else 
	{  
        $mobileno = input_data($_POST["mobileno"]);  
        if (!preg_match ("/^[0-9]*$/", $mobileno)) 
		{  
			$mobilenoErr = "Only numeric value is allowed.";  
        }  
        if (strlen ($mobileno) != 10)
		{  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
        }  
    }  
    
	if (empty($_POST["password"]))
	{  
        $passErr = "Password is required";  
    } 
	else 
	{  
        $pass = input_data($_POST["password"]);  
        if (strlen ($pass) <4) 
		{  
            $passErr = "Password of 4 or more characters required";  
        }  
    }
	if (empty($_POST["vpassword"]))
	{  
        $vpassErr = "Verify Password is required";  
    } 
	else 
	{  
        $pass = input_data($_POST["password"]);
		$vpass = input_data($_POST["vpassword"]);  
        if ($pass!=$vpass) 
		{  
            $vpassErr = "Passwords don't match!!";  
			$passErr = "Passwords don't match!!"; 
        }  
    }
    $day=$_POST["day"];
	$month=$_POST["month"];
	$year=$_POST["year"];
	if($day==-1)
	{
		$dobErr="DD Day is required";
	}
	else
	{
		$day = input_data($_POST["day"]);
	}
	if($month==-1)
	{
		$dobErr="MM Month is required";
	}
	else
	{
		$month = input_data($_POST["month"]);
	}
	if($year==-1)
	{
		$dobErr="YYYY Year is required";
	}
	else
	{
		$year = input_data($_POST["year"]);
	}
	if (empty($_POST['weight']))
	{  
        $weightErr = "Weight is required";  
    }
	else
	{
		$weight = input_data($_POST["weight"]);
		if (!preg_match ("/^[0-9]*$/", $weight)) 
		{  
			$weightErr = "Only numeric value is allowed.";  
        }
	}
}  
function input_data($data) 
{  
	$data = trim($data);  
	$data = stripslashes($data);  
	$data = htmlspecialchars($data);  
	return $data;  
}  
?>  
  
<h1>Registration Form</h1>  
<br>  
<form method="post">    
    Name:   
    <input type="text" name="name">  
    <span class="error">* <?php echo $nameErr; ?> </span>  
    <br><br>  
    E-mail:   
    <input type="text" name="email">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
    <br><br>  
    Phone No:   
    <input type="text" name="mobileno">  
    <span class="error">* <?php echo $mobilenoErr; ?> </span>  
    <br><br>  
    Password:   
    <input type="text" name="password">  
    <span class="error">* <?php echo $passErr; ?> </span>  
    <br><br>  
    Verify Password:   
    <input type="text" name="vpassword">  
    <span class="error">* <?php echo $vpassErr; ?> </span>  
    <br><br>
	Date of Birth (DOB):
	<select name="day" id="day"/>
		<option value="-1">Day:</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>	
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
	</select>
	<select name="month" id="month">
		<option >Month:</option>
		<option value="January">January</option>
		<option value="February">February</option>
		<option value="March">March</option>
		<option value="April">April</option>
		<option value="May">May</option>
		<option value="June">June</option>
		<option value="July">July</option>
		<option value="August">August</option>
		<option value="September">September</option>
		<option value="October">October</option>
		<option value="November">November</option>
		<option value="December">December</option>
	</select>
	<select name="year" id="year">
		<option value="-1">Year:</option>
		<option value="2019">2020</option>
		<option value="2019">2019</option>
		<option value="2018">2018</option>
		<option value="2017">2017</option>
		<option value="2016">2016</option>
		<option value="2015">2015</option>
		<option value="2014">2014</option>
		<option value="2013">2013</option>
		<option value="2012">2012</option>
		<option value="2011">2011</option>
		<option value="2010">2010</option>
		<option value="2009">2009</option>
		<option value="2008">2008</option>
		<option value="2007">2007</option>
		<option value="2006">2006</option>
		<option value="2005">2005</option>
		<option value="2004">2004</option>
		<option value="2003">2003</option>
		<option value="2002">2002</option>
		<option value="2001">2001</option>
		<option value="2000">2000</option>
		<option value="1999">1999</option>
		<option value="1998">1998</option>
		<option value="1997">1997</option>
		<option value="1996">1996</option>
		<option value="1995">1995</option>
		<option value="1994">1994</option>
		<option value="1993">1993</option>
		<option value="1992">1992</option>
		<option value="1991">1991</option>
		<option value="1990">1990</option>
		<option value="1989">1989</option>
		<option value="1988">1988</option>
		<option value="1987">1987</option>
		<option value="1986">1986</option>
		<option value="1985">1985</option>
		<option value="1984">1984</option>
		<option value="1983">1983</option>
		<option value="1982">1982</option>
		<option value="1981">1981</option>
		<option value="1980">1980</option>
	</select>
	<span class="error">* <?php echo $dobErr; ?> </span>  
	<br><br>  
	Weight:
    <input type="text" name="weight"> 
	<select name="tweight" id="tweight">	
		<option value="lb">lb</option>
		<option value="kg">kg</option>
	</select>
    <span class="error">* <?php echo $weightErr; ?> </span>  
    <br><br>
	<input type="submit" name="submit" value="Submit">   
    <br> 
</form>  
  
<?php  
    if(isset($_POST['submit'])) 
	{  
		if($nameErr == "" && $emailErr == "" && $mobilenoErr == ""  && $passErr == "" && $vpassErr=="" && $dobErr=="" && $weightErr == "") 
		{  
			echo "<h2>You have sucessfully registered!!!";  
			echo '<br><a href="display.php?name='.$name.'&email='.$email.'&mobileno='.$mobileno.'&password='.$pass.'&day='.$day.'&month='.$month.'&year='.$year.'&weight='.$weight.'">Display Data</a></h2>';
		} 
		else 
		{  
			echo "<h2>You didn't filled up the form correctly!!!</h2><br>";  
		}  	
    }  
?>  
  
</body>  
</html>  