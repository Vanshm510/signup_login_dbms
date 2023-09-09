<?php

include "signdb.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style_1.css">
<script>
	
    // validation using java script
    
function validateForm() { 
  let x = document.forms["sign"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }

  let y= document.forms["sign"]["txt"].value;
  if (y == "") {
    alert("user name must be filled out");
    return false;
  }
  

  let c = document.forms["sign"]["age"].value;
  if (c == "") {
    alert("Age must be filled out");
    return false;
  }

  let a = document.forms["sign"]["add"].value;
  if (a == "") {
    alert("Address must be filled out");
    return false;
  }

  let b = document.forms["sign"]["city"].value;
  if (b == "") {
    alert("City must be filled out");
    return false;
  }

  let d = document.forms["sign"]["state"].value;
  if (d == "") {
    alert("State must be filled out");
    return false;
  }

  let e = document.forms["sign"]["pin"].value;
  if (e == "") {
    alert("Postal pin code must be filled out");
    return false;
  }

  let f = document.forms["sign"]["email"].value;
  if (f== "") {
    alert("Email must be filled out");
    return false;
  }

  let g = document.forms["sign"]["phone"].value;
  if (g == "") {
    alert("Phone Number must be filled out");
    return false;
  }

  let h = document.forms["sign"]["pswd"].value;
  if (h == "") {
    alert("password must be filled out");
    return false;
  }
  
  let i = document.forms["sign"]["cpswd"].value;
  if (i == "") {
    alert("RE-ENTER the same password");
    return false;
  }  
} 

</script>
</head>
<body>


<?php

if($showerror)
{
  echo "<script>alert('$showerror');</script>";
  
}


if($showalert)
{
  echo "<script>alert('$showalert')</script>";
  header("location: login.php");
}




?>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form name="sign" method="post"    action="sign.php"  onsubmit="return validateForm()">
					<label for="chk" aria-hidden="true">Sign Up</label>
                    <input type="text" name="name" placeholder="Full name"  pattern="[a-zA-Z ]+" >
					<input type="text" name="txt" placeholder="User name"  pattern="[a-zA-Z0-9]+" >
                    <input type="number" min="1" name="age" placeholder="Age"  pattern="[0-9]+">
                    <input type="text" name="add" placeholder="Address" >
                    <input type="text" name="city" placeholder="City" >
					<input type="text" name="state" placeholder="State" >
                    <input type="text" name="pin" placeholder="Postal Pin Code"  pattern="[0-9]+">
					<input type="email" name="email" placeholder="Email" >
                    <input type="text" name="phone" placeholder="Phone Number" pattern="[0-9]+">
					<input type="password" name="pswd" placeholder="Password" 	>
                    <input type="password" name="cpswd" placeholder="Confirm Password" >
					<button name="submit">Sign up</button>
          <button><a href="login.php">Login</a></button><a href=""></a>
				</form>
			</div>

		
	</div>
</body>
</html>