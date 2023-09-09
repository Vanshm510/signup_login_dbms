<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "placement";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$showalert = false;
$showerror = false;



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['submit'])) {
    $na = $_POST['name'];
    $user = $_POST['txt'];
    $age = $_POST['age'];
    $address = $_POST['add'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
    $em = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pswd'];
    $cpass = $_POST['cpswd'];

    $existusersql = "SELECT * FROM user WHERE user ='$user'";
    $result = mysqli_query($conn, $existusersql);
    $numexistuserrows = mysqli_num_rows($result);
    if ($numexistuserrows > 0) {

      $showerror = "user name already exist";

    } else {


      $existemailsql = "SELECT * FROM user WHERE em ='$em'";
      $result_1 = mysqli_query($conn, $existemailsql);
      $numexistemailrows = mysqli_num_rows($result_1);

      if ($numexistemailrows > 0) {

        $showerror = "email already exist";

      } elseif ($pass == $cpass) {

        $uppercase = preg_match('@[A-Z]@', $pass);

        $lowercase = preg_match('@[a-z]@', $pass);

        $number = preg_match('@[0-9]@', $pass);


        $special = preg_match('@[^\w]@', $pass);

        if (!$uppercase || !$lowercase || !$number || !$special || strlen($pass) < 8) {



          $showerror = "password should be atleast 8 character in length and should contain atleast one upper case ,one number and one special character";
          
        } else {
          $hash = password_hash($pass, PASSWORD_DEFAULT);
          $sql = "INSERT INTO user (na, user, age,addr,city,st,pin,em,phone,pass,dt)
      VALUES ('$na', '$user', '$age','$address','$city','$state','$pin','$em','$phone','$pass','current_timestamp()')";



          if (mysqli_query($conn, $sql)) {

            $showalert = "record has been inserted successfully";



          }
        }
      } else {

        $showerror = "password do not match";


      }



    }




  }
}

?>