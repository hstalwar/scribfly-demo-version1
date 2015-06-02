<html>
<head>
	<title>Scribfly Demo</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<!-- <link rel="stylesheet" type="text/css" href="view.css" media="all"> -->
</head>
<body>
<?php 
	$mycasenumber = $_POST["form-casenumber"];
	$mystate = $_POST["form-state"];
	$mycounty = $_POST["form-county"];
	$mycourt = $_POST["form-court"];
	$myclerkemail = $_POST["form-clerkemail"];
	$myplaintiffemail = $_POST["form-plaintiffemail"];
	$mydefendentemail = $_POST["form-defendentemail"];
	
	// Hard Coded values right now
	$mycasenumber = "49A7896VB2";
	$mystate = "Georgia";
	$mycounty = "Fulton";
	$mycourt = "State Court";
	$myclerkemail = "clerk@state.fulton.gov";
	$myplaintiffemail = "khilbert@hilbertlaw.com, jhilbert@hilbertlaw.com, ehilber@hilbertlaw.com";
	$mydefendentemail = "htalwar@scribfly.com, khilbert@scribfly.com";

	// Database values for the account
	$user_name = "root";
	$password = "scribfly";
	$database = "scribfly_db";
	$table_name = "scribfly_cases";
	$server = "127.0.0.1";

	$db_connect = mysql_connect($server, $user_name, $password);
	if ($db_connect) 
	{
		//print("Server connected !! <BR>");
		$db_handle = mysql_select_db($database, $db_connect);
		if ($db_handle)
		{
				// Look up the other values from the Pricing Model table based on the adjusted score.
				$myinsert_query = "INSERT INTO $table_name (casenumber, state, county, court, clerkemail, plaintiffemail, defendentemail) 
				VALUES ($mycasenumber, $mystate, $mycounty, $mycourt, $myclerkemail, $myplaintiffemail, $mydefendentemail)";

				$query_inputresult = mysql_query($myuserinput_query);
				
				if ($query_inputresult)
				{
					print("Case successfully added !!");

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
