<!DOCTYPE HTML>
<html>  
<body>

<?php
$errName="";
$name="";
$errEmail="";
$email="";

if ($_SERVER["REQUEST_METHOD"] =="POST") {
	if(isset($_POST["name"])){
		if(!preg_match('/^(?=.*\d)(?=.*[Aman])[123]$/',$_POST["name"])) {
			$errName="only letters and white space allowed";
		}
		else
		{
			$name=$_POST["name"];
	}
}
	if (empty($_POST["name"])){
		$errName="please enter name.";
	}







	if(isset($_POST["email"])){
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errEmail = "Invalid email format";
}
	else	{
		$email=$_POST["email"];
	}
	}
	if (empty($_POST["email"])){
		$errEmail="please enter email";
	}
	}
?>

<form name="surveyname" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
Name:<br>
<input type="text"  name="name" placeholder="entername" value="<?php echo htmlspecialchars($name);?>">
<span class="error"><?php echo $errName; ?></span><br><br>
Address:<br>
 <input type="text" value="Address" placeholder="address"><br><br>
e-mail:
 <br><input type="text" name="email" placeholder=" enteremail"  value="<?php echo htmlspecialchars($email);?>">
<span class="error"><?php echo $errEmail; ?></span><br><br>
Linked in a profile:<br> <input value="text" name="enter your linked in a profile url"><br><br>
<p>welcome technology you are interested in:<br>
 <select>
  <option value="php">java</option>
  <option value="java">java</option>
  <option value="android">android</option>
  
 
  <option value="shell scripting">shell scripting</option>
   <option value="ios">ios</option>
  
</select> 
<br><br>
<input type="checkbox" name="newsletter" value="form"> would you like to subscribe our newsletter<br><br>

<input type="radio" name="newsletter" value="week" checked> weekly<br>
  <input type="radio" name="newsletter" value="month"> monthly<br>
  <input type="radio" name="newsletter" value="ossassion"> ossassionly<br>


<input type="submit">
</form>

</body>
</html>