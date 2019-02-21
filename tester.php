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
            .preload{
            	width: 100%;
            	height: 100%;
            	position: fixed;
            	top: 0;
            	left: 0;
            	z-index: 1;
            }
            .logo{
            	width: 300px;
            	height: 70px;
            	margin: 150px auto 50px auto;
            	font-size: 50px;
            	text-shadow: -1px 2px 2px red;
            	 text-align: center;
            	 color: azure;
            }  
            .loader-frame{
            	width: 70px;
            	height: 70px;
            	margin-top: auto;
            	position: relative;
            }

            .loader1, .loader{
            	position: absolute;
            	border: 5px solid transparent;
            	border-radius: 50%;
            }  
            .loader1{
            	width: 70px;
            	height: 70px;
            	border-top: 5px solid azure;
            	border-bottom: 5px solid azure;
            	animation: clockwisespin 2s linear 5;
            }
            .loader2{
            	width: 60px;
            	height: 60px;
            	border-top: 5px darkturquoise;
            	border-bottom: 5px darkturquoise;
            	top: 5px; left: 5px;
            	animation: anticlockwisespin 2s linear 5;
            }
            @keyframes clockwisespin {
            	from {transform: rotate(0deg);}
            	to {transform: rotate(360deg);}
            }
            @keyframes anticlockwisespin {
            	from {transform: rotate(0deg);}
            	to {transform: rotate(-360deg);}
            }
            @keyframes fadeout{
            	from {opacity: 1;}
            	to {opacity: 0;}
            }

    </style>

     
  </head>
  <body>

  	<div class="preload">
  		<div class="logo">
  			ice-<span style="color: darkturquoise;">cubes</span>
  		</div>
  		<div class="loader-frame">
  			<div class="loader1" id="loader1"></div>
  			<div class="loader2" id="loader2"></div>
  		</div>
  	</div>


   <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
    <script type="text/javascript">
       (function() {
       	
       		var preload = document.getElementById('preload');
       		var loading = 0;
       		var id = setInterval(frame, 64);

       		function frame(){
       			if (loading == 100) {
       				clearInterval(id);
       				window.open("form(final).php","_self");
       			} else {
       				loading = loading + 1;
       				if(loading == 90){
       					preload.style.animation = "fadeout is ease";
       				}
       			}
       		}
       }) 

             
    </script>
</html>		            