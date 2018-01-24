<? 
//Early PHP process start here
?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
		<title>PHP Login With Password Encryption</title>
		<meta content="Muhammad Hafiz Hussin" name="author">
		<meta content="" name="copyright">
		<meta content="PHP Login With Password Encryption" name="keywords">
		<meta content="http://localhost" name="description">
<style type="text/css">
    /*CSS styling goes here*/
</style>
<!-- Page Styling -->
<link rel="stylesheet" type="text/css" href="css/styling.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>	
    //any javascript processing
</script>
</head>
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0">
		<div class="container">            
            <form id="form-body" name="loginForm" action="login_process.php" method="post">
                <h3>Login With Encryption</h3>
                <!--- <h4>Login Form</h4> --->
                <div class="form-container">
                    <div class="clearfix"><hr/></div>
                        <span>Username:</span>
                        <fieldset>
                            <input placeholder="Username" type="text" tabindex="1" name="username">
                        </fieldset>
                        <span>Password:</span>
                        <fieldset>
                            <input placeholder="Password" type="password" tabindex="1" name="password">
                        </fieldset>
                    <div class="clearfix"><hr/></div>
                    <div class="left-side">
                        <fieldset>
                            <button name="submit" type="submit" id="submitFrm">Login</button>
                        </fieldset>
                    </div>    
                    <div class="right-side">
                        <fieldset>
                            &nbsp;
                        </fieldset>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
        <script>
            /* To validate username and password input
			 */
			 $(document).ready(function(){
				//if submit form click
				$("#submitFrm").click(function(){
					var username = $("input[name='username']").val();
					var password = $("input[name='password']").val();
					
					//if username or password is empty
					if (username === "" || password === ""){
						alert("Username or Password must no be empty");
						return false;
					}
					
					//submit form
					$("form[name='loginForm']").submit();
				 });    
			}); 
        </script>    
	</body>
</html>