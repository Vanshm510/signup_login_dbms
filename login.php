<?php

include "logindb.php";

?>




<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style_2.css">

<script>
	
    // validation using java script
    
function validateForm() { 
 

  let y= document.forms["login"]["txt"].value;
  if (y == "") {
    alert("user name must be filled out");
    return false;}



  let h = document.forms["login"]["pswd"].value;
  if (h == "") {
    alert("password must be filled out");
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



?>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form name="login" method="post"    action="login.php"  onsubmit="return validateForm()">
					<label for="chk" aria-hidden="true">login</label>

					<input type="text" name="txt" placeholder="User name" value="<?php if(isset($_COOKIE["txt"])){echo $_COOKIE["user"];} ?>" >
					
					<input type="password" name="pswd" placeholder="Password" value="<?php if(isset($_COOKIE["pswd"])){echo $_COOKIE["pswd"];} ?>" >

                    
          <!--          Remember Me: <input type="checkbox" name="remember"> -->

					<button  name="submit">Login</button>
				</form>
			</div>

	</div>
</body>
</html>