<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
            body{
                background: linear-gradient(45deg,  rgba(66, 183, 245,0.8) 0%,rgba(66, 245, 189,0.4) 100%);}
  
    </style>

     
  </head>
  <body onload="myFunction()" style="margin:0;">


  	<div class="container-fluid">
		<br><br><br>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="jumbotron">
					  <h1>Data Berhasil Di Proses!</h1>
				</div>
			</div>
		</div>	
  		<div style="margin-top: 50px;" id="loader"></div>

        <div style="display:none;" id="myDiv" class="animate-bottom">
          <h2>Tada!</h2>
          <p>Some text in my newly loaded page..</p>
        </div>
        <div class="col-sm-2 col-sm-offset-5">
                 <a href="form(final).php?id=<?php echo $_GET['id']; ?>"><button type="button" name="proses" class="btn btn-primary btn-lg" style="width: 200px; height: 100px;">Next Step</button></a>
            </div>
        <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
    <script type="text/javascript">
    
    </script>
</html>		