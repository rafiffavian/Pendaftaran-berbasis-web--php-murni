<?php include 'config.php'; 
// session_start();
// session_destroy();
// header('location:form1.php');

?>
   
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
            <h1 align="center" style="background: blue;">PENDAFTARAN ONLINE BERBASIS WEB</h1>
            <div class="col-sm-12">
                <h1 align="center">Sign Up</h1>
                <h4 align="center">its free and takes less than 30 seconds</h4>
                <hr><br><br>
            </div>
              <form action="datasiswa_proses.php" method="post">
                <div class="col-sm-12" style="padding-right: 10px;padding-left: 20px">
                    <div class=" col-sm-6 form-group">
                                   <div class="col-sm-1"> 
                                        <center><img style="margin-top: 8px;margin-left: 110px;width: 15px;" src="Latihan/name.png"></center>
                                   </div>
                                   <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top: 7px;margin-left: 80px;">First Name</label>
                                   <div class="col-sm-6">
                                      <input type="text" name="firstname" class="form-control" id="inputPassword3" placeholder="Your First Name" value="<?php echo getSession('form_signup','firstname');?>">
                                   </div>

                     </div>
                     <div class=" col-sm-6 form-group">
                                   <div class="col-sm-4" style="margin-top: 8px;"> 
                                        <img style="margin-bottom: 5px; width: 15px;" src="Latihan/name.png">
                                        <label for="inputPassword3" class="control-label" style="margin-left:5px;">Your Last Name</label>
                                   </div>
                                   
                                   <div class="col-sm-6">
                                        <input type="text" name="lastname" class="form-control" id="inputPassword3" placeholder="Your Last Name" value="<?php echo getSession('form_signup','lastname'); ?>">
                                   </div>    
                      </div>                   
                                     
                 </div>
                 <div class="col-sm-12">
                     <div class=" col-sm-6 form-group">
                                   <div class="col-sm-1"> 
                                        <center><img style="margin-top: 8px;margin-left: 115px;width: 15px;" src="Latihan/email.png"></center>
                                   </div>
                                   <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top: 7px;margin-left: 85px">Email</label>
                                   <div class="col-sm-6">
                                      <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="Your Email" value="<?php echo getSession('form_signup','email'); ?>">
                                   </div>
                                     
                     </div>
                     <div class=" col-sm-6 form-group">
                                   <div class="col-sm-4"> 
                                        <img style="margin-bottom: 5px;margin-left: 5px; width: 15px;" src="Latihan/alternatif.png">
                                        <label for="inputPassword3" class="control-label" style="margin-top: 7px;margin-left: 5px;">Alternative Email</label>
                                   </div>
                                   <div class="col-sm-6">
                                      <input type="text" name="aemail" class="form-control" id="inputPassword3" placeholder="Alternative Email" style="margin-left: 5px;" value="<?php echo getSession('form_signup','aemail'); ?>">
                                   </div>
                                     
                     </div>
                 </div>  
                 <div class="col-sm-12">  
                     <div class=" col-sm-6 form-group">
                                   <div class="col-sm-1"> 
                                        <center><img style="margin-top: 8px;margin-left: 115px;width: 15px;" src="Latihan/password.png"></center>
                                   </div>
                                   <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top: 7px;margin-left: 85px">Password</label>
                                   <div class="col-sm-6">
                                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Your Password" value="<?php echo getSession('form_signup','password'); ?>">
                                   </div>
                                     
                     </div>
                     <div class=" col-sm-6 form-group">
                                   <div class="col-sm-4"> 
                                        <img style="margin-bottom: 5px;margin-left: 5px; width: 15px;" src="Latihan/retype.png">
                                        <label for="inputPassword3" class="control-label" style="margin-top: 7px;">Confirm Password</label>
                                   </div>
                                   <div class="col-sm-6">
                                      <input type="Password" name="cpassword" class="form-control" id="inputPassword3" placeholder="cpassword" style="margin-left: 5px;" value="<?php echo getSession('form_signup','cpassword'); ?>">
                                   </div>
                                     
                     </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-7" style="margin-top: 10px;">
                        <div class="form-group col-sm-4">
                            <img src="latihan/placeholder.png" style="margin-left: 110px;">
                            <label class="control-label">&nbsp;Address</label>
                        </div>     
                        <div class="col-sm-7">
                            <textarea class="form-control" name="address" rows="3" placeholder="Detail Address" style="height: 100px;" value=""><?php echo getSession('form_signup','address'); ?></textarea>
                        </div>
                    </div>   
                </div><br> 
                <div class="row">   
                    <div class="col-sm-3" style="margin-left: 150px">
                        <div class="radio">
                              <img src="Latihan/Male.png">  
                              <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" <?php echo getSession('form_signup','optionsRadios')=="option1"?"checked":NULL ?>>
                                <p style="font-family: Times New Roman">Male</p>
                              </label>
                        </div>
                        <div class="radio" style="margin-top: 10px;">
                              <img src="Latihan/Female.png">                              
                              <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" <?php echo getSession('form_signup','optionsRadios')=="option2"?"checked":NULL ?>>
                                <p style="font-family:Times New Roman ">Female</p>
                              </label>
                        </div>
                    </div> 
                </div> 
                <div class="row">
                    <div class="col-sm-3">
                        <select name="negara" class="form-control" style="margin-left: 150px">
                            <option>--Pilih Negara--</option>
                            <option value="Indonesia" <?php echo getSession('form_signup','negara')=="Indonesia"?"selected":NULL ?>>Indonesia</option>
                            <option value="Saudi" <?php echo getSession('form_signup','negara')=="Saudi"?"selected":NULL ?>>Saudi Arabia</option>
                            <option value="Turkey" <?php echo getSession('form_signup','negara')=="Turkey"?"selected":NULL ?>>Turkey</option>
                            <option value="Tunisia" <?php echo getSession('form_signup','negara')=="Tunisia"?"selected":NULL ?>>Tunisia</option>
                        </select>
                    </div>
                </div><br>
                <div class="row">
                     <div class="checkbox" style="margin-left: 160px">
                            <label>
                              <input type="checkbox"> I'am Programmer
                              <p>if&nbsp;you&nbsp;would&nbsp;like&nbsp;to&nbsp;upload&nbsp;your&nbsp;own&nbsp;builds&nbsp;and&nbsp;invite&nbsp;your&nbsp;owns&nbsp;testers</p>
                            </label>
                          </div>
                    </div>
                </div><br>
                <div class="col-sm-12">  
                    <div class="col-sm-4" style="margin-left: 100px"> 
                         <a href="form(home).php"><button type="button" class="btn btn-primary btn-lg" style="margin-left: 300px;width: 150px">Home</button></a>
                    </div>
                        <div class="col-sm-4" style="margin-left: 50px;">
                    <button type="submit" class="btn btn-primary btn-lg" name="proses" value="OK" style="width: 150px">Next</button>
                    </div>
                </div><br><br><br><br><br><br><br><br><br> 
              </form>    
        </div>

         <script src="js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
  </body>