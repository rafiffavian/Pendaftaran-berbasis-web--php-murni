
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Latihan membuat form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
		button{
			width: 200px;
			height: 50px;
			background: #00ccff;
			margin: 0xp;
			border: none;
		}
	</style>
</head>
<body background="latihan/background1.png">

	
	<table align="center" width="100%">
		<tr>
			<td colspan="4">
				<a href="formulirLAT.php"><button>Sign Up</button></a>
				<a href="formLog.php" target="_blank"><button>Login</button></a>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<h1 align="center">Sign Up</h1>
				<h4 align="center">its free and takes less than 30 seconds</h4>
				<hr size="2px" color="#00cccc">
			</td>
		</tr>
	</table>	
	<form>
	<table align="center" cellpadding="5px" cellspacing="5px">			
		<tr>
			<td>
				<img src="Latihan/name.png">
			</td>
			<td>
				<input type="text" name="nama" placeholder="Your First Name">			
			</td>
			<td>
				<img src="Latihan/name.png">
			<td>
				<input type="text" name="nama2" placeholder="Your Last Name">			
			</td>
		</tr>
		<tr>
			<td>
				<img src="Latihan/email.png">
			</td>
			<td>
				<input type="email" name="email" placeholder="Your email">
			</td>
			<td>
				<img src="Latihan/alternatif.png">
			</td>
			<td>
				<input type="email" name="email" placeholder="alternatif email">
			</td>
		</tr>
		<tr>
			<td>
				<img src="Latihan/password.png">
			</td>
			<td>
				<input type="password" name="pass" placeholder="Password">			
			</td>
			<td>
				<img src="Latihan/retype.png">
			</td>
			<td>
				<input type="password" name="repass" placeholder="Confirm Password">			
			</td>


		</tr>
		<tr>
			<td colspan="4">
				<textarea name="address" placeholder="Detail Address" cols="35" rows="5"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<img src="Latihan/Male.png"><input type="radio" name="JK" value="L">Male &nbsp;&nbsp;
				<img src="Latihan/Female.png"><input type="radio" name="JK" value="P">Famale <br><br>
			</td>
		</tr>	
		<tr>
			<td colspan="4">
				<select name="Country">
					<option value="">--Nationality--</option>
					<option value="Indonesia">Indonesia</option>
					<option value="Turkey">Turkey</option>
					<option value="arab">Saudi-Arabia</option>
				</select><br><br>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<input type="checkbox" name="programer" value="programerr">I'am Programmer
				<p>if&nbsp;you&nbsp;would&nbsp;like&nbsp;to&nbsp;upload&nbsp;your&nbsp;own&nbsp;builds&nbsp;and&nbsp;invite&nbsp;your&nbsp;owns&nbsp;testers</p>
			</td>
		</tr>
		<tr>
			<td colspan="4" width="10px">
				<a href="formLog.php"></a><button>Sign Up</button>
			</td>
		</tr>
		

	</table>
</form>
	<script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
