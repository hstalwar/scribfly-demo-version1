<html>
<head>
	<title>Scribfly Demo</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<!-- <link rel="stylesheet" type="text/css" href="view.css" media="all"> -->
</head>
<body>
<?php 
	$myfirstname = $_POST["form-firstname"];
	$mylastname = $_POST["form-lastname"];
	$myemailaddress = $_POST["form-emailaddress"];
	$mypassword = sha1($_POST["form-password"]);
	$mylawfirm = $_POST["form-lawfirmname"];
	$mylawfirmaddress = $_POST["form-lawfirmaddress"];
	$myuserrole = $_POST["form-role"];
	
	// Hard Coded values right now
	$myfirstname = "James";
	$mylastname = "Stewart";
	$myemailaddress = "james.stewart@awesome.com";
	$mypassword = sha1("password");
	$mylawfirm = "Stewart Attorney at Law";
	$mylawfirmaddress = "405, James Court, Roswell, GA 30076";
	$myuserrole = "Paralegal";

	// Database values for the account
	$user_name = "root";
	$password = "scribfly";
	$database = "scribfly_db";
	$table_name = "scribfly_users";
	$server = "127.0.0.1";

	$db_connect = mysql_connect($server, $user_name, $password);
	if ($db_connect) 
	{
		print("Server connected !! <BR>");

		$db_handle = mysql_select_db($database, $db_connect);
		if ($db_handle)
		{
			print("Table selected !! <BR>");

			// Look up the other values from the Pricing Model table based on the adjusted score.
			$myinsert_query = "INSERT INTO $table_name (scribfly_firstname, scribfly_lastname, scribfly_emailaddress, scribfly_pwd, scribfly_lawfirm, scribfly_lawfirmaddress, scribfly_userrole)".
			" VALUES ('$myfirstname', '$mylastname', '$myemailaddress', '$mypassword', '$mylawfirm', '$mylawfirmaddress', '$myuserrole')";

			$retval = mysql_query($myinsert_query, $db_connect);
			if (! $retval)
			{
				die('Could not enter data: ' . mysql_error());
			}
			echo "Entered data successfully\n";
			mysql_close($db_connect);
		}
	}
	else
	{
		print("Server not found !!");
	}
?>
</body>
</html>
