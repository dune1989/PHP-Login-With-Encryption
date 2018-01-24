<?php
/* Set db connection
 */
 $usernameDB = "";
 $passwordDB = "";
 $DBName = "";
 $host = "";
 
$conn = new mysqli($host,$usernameDB,$passwordDB,$DBName);

/* Set variable for Username and password
 */
$username = $_POST['username']?: '';
$password = $_POST['password']?: '';

/* secure variable username and password
 */
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

/* filter if username and password are empty
 */
if ($username == '' || $password == '') {
	echo "Username or Password should not empty.";
	exit();
}

/* fetch password according to username given by username
 */
$sql = "SELECT password FROM user WHERE username = '".$username."'";
$result = mysqli_query($conn,$sql);

/* If there is no data based on the username given
 */
if (!$result) {
	echo "There is no user based on username given.";
	exit();
}

$row = mysqli_fetch_array($result,MYSQLI_ASSOC)
$password_db = $row['password'];

/* password given by user will be compared with db password
 * using password_verify() function
 */	
$resultCheck = password_verify($password, $password_db);

if ($resultCheck) {
	//if result is TRUE, do preferred action here
	echo "Password is correct!";
	exit();
} else {
	//if result is FALSE, do preferred action here
	echo "Password is false!";
	exit();
}
?>