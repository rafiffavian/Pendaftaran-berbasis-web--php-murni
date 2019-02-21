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
            }
    </style>

    
  </head>
  <body>

        <div class="container-fluid">
            <div class="col-sm-12">
                <h1 style="text-align: center;background: blue">PENDAFTARAN ONLINE BERBASIS WEB</h1>
            </div>
            <div class="row">
                <div class="col-sm-4" style="margin-left: 400px;margin-top: 50px">
                    <div class="alert alert-success" style="background: #85e085" role="alert"><p align="center">Account Anda Telah terdaftar!</p><p align="center"> Silahkan LOGIN terlebih dahulu!.</p></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" style="margin-left: 280px">
                    <div class="jumbotron" style="background: #b3f0ff;">
                          <h1 align="center">LOGIN</h1>
                          <form>
                              <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail1">Email address</label>
                                </div>
                                <div class="col-sm-12" style="margin-top: 10px;">
                                    <div class="col-sm-2">
                                        <img style="width: 50px;" src="latihan/name2.png">
                                    </div>
                                    <div class="col-sm-9">  
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" style="margin-top: 10px">
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                    <div class="col-sm-12" style="margin-top: 10px">
                                        <label for="exampleInputPassword1">Password</label>
                                    </div>
                                    <div class="col-sm-12"> 
                                        <div class="col-sm-2">
                                            <img style="width: 50px;" src="latihan/password2.png">   
                                        </div>
                                        <div class="col-sm-9">    
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="margin-top: 10px">
                                        </div>    
                                    </div>    
                              </div>
                              <div class="col-sm-12" style="margin-top: 20px">
                                    <label>
                                      <a href="www.gmail.com">Forgot password?</a>
                                    </label>
                              </div>
                              
                          </form>
                          <a href="form1.php"><button style="margin-top: 30px; width: 150;height: 50px;background: #1a53ff"class="btn btn-default">Submit</button></a>   
                    </div>
                </div>
            </div>        
    
        </div>

     <script src="js/jquery.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
  </body>