<html>
<head>
<title>
User Registration Form
</title>
</head>
<body>
<?php
if(isset($_POST["create"]))
{
echo "please filled out";
}
?>
<?php
// define variables and set to empty values
$firstname = $email = $lastname = $phonenumber =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$firstname = test_input($_POST["firstname"]);
$lastname = test_input($_POST["lastname"]);
$email = test_input($_POST["email"]);
$phonenumber = test_input($_POST["phonenumber"]);
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="container">
<h1>Registration</h1>
<p>fill up the form with correct values</p>
<label for="firstname"><b>First Name</b></label>
<input type="text" name="firstname" required>

<label for="firstname"><b>First Name</b></label>
<input type="text" name="firstname" required>


<label for="lastname"><b>Last Name</b></label>
<input type="text" name="lastname" required>


<label for="email"><b>Email</b></label>
<input type="text" name="Email" required>


<label for="phonenumber"><b>Phone Number</b></label>
<input type="text" name="phonenumber" required>


<label for="password"><b>Password</b></label>
<input type="password" name="password" required>

<input type="submit" name="create" value="Sign Up"></input>
</form>

</div>
<?php
echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;echo "<br>";
echo $email;
echo "<br>";
echo $phonenumber;

?>



</body>
</html>
