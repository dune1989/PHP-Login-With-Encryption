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
		<!--- <script src="lib/lib.js" type="text/javascript" language="javascript"></script> --->
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

<script language="javascript">	
    //redirect to create form
    $(document).ready(function(){
        //if create button click
        $("#createPassId").click(function(){
            $(location).attr('href', 'http://172.21.95.190/yard/gatepass_private_create_edit.php?id=<?php echo $tool_id; ?>');
        });
        
        //if submit form click
        $("#submitFrm").click(function(){
            var fdate = $("select[name='fdate_year']").val() + $("select[name='fdate_month']").val() + $("select[name='fdate_day']").val();
            var tdate = $("select[name='tdate_year']").val() + $("select[name='tdate_month']").val() + $("select[name='tdate_day']").val();

            if (fdate > tdate) {
                alert("From date cannot be greater than to date");
                //document.frmmarshal.fdate_day.focus();
                $("select[name='tdate_day']").focus();
                return false;
             }
            
            //submit form
            $("form[name='searchPrivateGatePass']").submit();
         });    
    });
</script>
</head>
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0">
        <!--- <div class="header">
            <div class="header-left">
                <img src="img/westportlogo.gif" alt="" height="51" width="321" border="0">
            </div>
            <div class="header-right">
                <span>Private Operator Container Gate Pass System - Request Form</span>
            </div>
        </div> --->
		<div class="container">            
            <form id="form-body" name="searchPrivateGatePass" action="gatepass_private_display.php" method="post">
                <h3>Login With Encryption</h3>
                <!--- <h4>Login Form</h4> --->
                <div class="form-container">
                    <div class="clearfix"><hr/></div>
                        <span>Username:</span>
                        <fieldset>
                            <input placeholder="Serial No" type="text" tabindex="1" name="serial_no">
                            <input type="hidden" tabindex="1" name="tool_id" value = "<?php echo $tool_id; ?>">
                        </fieldset>
                        <span>Password:</span>
                        <fieldset>
                            <input placeholder="Container No" type="text" tabindex="1" name="cont_no" maxlength="11" onkeyup="javascript:chkcntno()">
                        </fieldset>
                    <div class="clearfix"><hr/></div>
                    <div class="left-side">
                        <fieldset>
                            <button name="search" id="submitFrm" >Search</button>&nbsp;<button name="createPass" type="button" id="createPassId" value="<?php echo $tool_id ?>">Create Pass</button>
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
        <!--- <div class="footer">
            <div class="footer-middle">
                <span>Copyright of WESTPORTS MALAYSIA SDN.BHD. All Rights Reserved.</span>
            </div>
        </div> --->
        <script>
            //fetch value from input
        </script>    
	</body>
</html>