<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="placement";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$login=false;
$showerror=false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {


$user=$_POST['txt'];
$pass=$_POST['pswd'];



$usersql = "SELECT * FROM user WHERE user ='$user'";
$result = mysqli_query($conn, $usersql);
$numuserrows = mysqli_num_rows($result);
if ($numuserrows > 0) {

    $passsql = "SELECT * FROM user WHERE pass ='$pass'";
$result = mysqli_query($conn, $passsql);
$numpassrows = mysqli_num_rows($result);
if ($numpassrows > 0) {


    $login=true;
    if ($login){
        

/*        
if(!empty($_POST["remember"])) {
	setcookie ("user",$_POST["txt"],time()+ 3600);
	setcookie ("pass",$_POST["pswd"],time()+ 3600);
	echo "Cookies Set Successfuly";
} else {
	setcookie("user","");
	setcookie("pass","");
	echo "Cookies Not Set";
}
*/
        session_start();
        $_SESSION['user']=$_POST['txt'];
        header("location: home.php");

    }

}

else{
    $showerror="invalid password";
}
  

} else {

$showerror="invalid user name ";


}



    }}

?>
