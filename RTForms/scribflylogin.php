<html>
<head>
	<title>Scribfly Demo</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<!-- <link rel="stylesheet" type="text/css" href="view.css" media="all"> -->
</head>
<body>
<?php 
	$myemailaddress = $_POST["form-email"];
	$mypassword = sha1($_POST["form-password"]);
	
	// Hard Coded values right now
	$myemailaddress = "john.doe@doelawfirms.com";

	// Database values for the account
	$user_name = "root";
	$password = "scribfly";
	$database = "scribfly_db";
	$table_name = "scribfly_users";
	$server = "127.0.0.1";

	$db_connect = mysql_connect($server, $user_name, $password);
	if ($db_connect) 
	{
		//print("Server connected !! <BR>");
		$db_handle = mysql_select_db($database, $db_connect);
		if ($db_handle)
		{
				// Look up the other values from the Pricing Model table based on the adjusted score.
				$myuserinput_query = "SELECT * FROM $table_name WHERE scribfly_emailaddress = 'myemailaddress' AND scribfly_pwd = 'mypassword'";
				$query_inputresult = mysql_query($myuserinput_query);
				
				if ($query_inputresult)
				{
					$number_records = mysql_num_rows($query_inputresult);
					print("Number of records found: ");
					echo "$number_records <BR>";

					while($row = mysql_fetch_array($query_inputresult))
					{
					

					}
				}
		}
		else
		{
			print("Database not found");
		}
		mysql_close($db_connect);
	}
?>
</body>
</html>
