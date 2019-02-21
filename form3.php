<?php include 'config.php' ?>

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
            table{
                background-color: #00b8e6;
            }
            .lalat{
                margin-top: 20px;
            }
    </style>

    
  </head>
  <body>

    <div class="container-fluid">
        <div class="row">   
            <div class="col-sm-12" style="background: blue" style="width: 100%">
                <h1 align="center">PENDAFTARAN ONLINE</h1>
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-8">
                <ul class="nav nav-pills">
                    <li role="presentation" class="default"><a href="#">1) DATA SISWA</a></li>
                    <li role="presentation" class="default"><a href="#">2) DATA ORTU/WALI </a></li>
                    <li role="presentation" class="active"><a href="#">3) DATA SEKOLAH</a></li>
                    <li role="presentation" class="default"><a href="#">4) DATA NILAI</a></li>
                    <li role="presentation" class="default"><a href="#">5) KONFIRMASI</a></li>
                    </ul>
            </div>
         </div><br><br><br>
         <div class="col-sm-2"></div>
        <form method="post" action="datasekolah_proses.php">         
                <table class="col-sm-8" bgcolor="blue">
                    <tr>
                        <td colspan="1" bgcolor="blue">
                                    <h1 style="background: blue">DATA SEKOLAH</h1>
                        </td>
                    </tr>
                     <tr>
                         <td>
                             <br><div class="form-group">
                                            <div class=" col-sm-3 ">
                                                <label for="inputPassword3" class ="control-label">N.P.S.N sekolah</label>
                                            </div>        
                                            <div class="col-sm-8">    
                                                <input type="number" name="npsnsekolah" class="form-control" placeholder="N.P.S.N sekolah">
                                            </div>
                                 </div>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <br><div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="inputPassword3" class ="control-label">Nama Sekolah</label>
                                    </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="namasekolah" class="form-control" placeholder="Nama Sekolah">
                                        </div>
                                  </div>      
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <br><div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="inputPassword3" class ="control-label">Status Sekolah</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="statussekolah" class="form-control">
                                            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------PILIH STATUS-------</option>
                                            <option value="NEGERI">NEGERI</option>
                                            <option value="SWASTA">SWASTA</option>
                                        </select>
                                    </div>
                                </div>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <br><div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="inputPassword3" class ="control-label">Model Ujian Nasional</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="modelujian" class="form-control">
                                            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------PILIH MODEL-------</option>
                                            <option value="UNBK">UNBK</option>
                                            <option value="UNKP">UNKP</option>
                                        </select>
                                    </div>
                                </div>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <br><div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="inputPassword3" class ="control-label">Alamat Sekolah</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <textarea name="alamatsekolah" class="form-control" placeholder="Alamat Sekolah"></textarea>
                                    </div>
                                </div>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <br><div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="inputPassword3" class ="control-label">Tahun Lulus</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="tahunlulus" class="form-control">
                                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------PILIH TAHUN-------</option>
                                                <?php 
                                                    $i=date('Y');
                                                    while ($i >= 1965) {
                                                         echo "<option value='$i'>$i</option>";
                                                         $i--;
                                                     } 
                                                     
                                                 ?>
                                                 <?php 
                                                    $_tahun=$_POST['tahun'];
                                                  ?>
                                                 <option><?php echo $_tahun; ?></option>
                                        </select>
                                    </div><br><br><br>
                         </td>
                     </tr>
                </table>
            <div class="row">
                <div class="alert alert-warning col-sm-8 col-sm-offset-2 lalat" role="alert" style="background: orange;">
                      <a href="#" class="alert-link" style="color: red;">CATATAN! semua field wajib diisi!!!</a>
                </div>
           </div>
           <div class="col-sm-5 col-sm-offset-2">
                 <a href="form2.php"><button type="button" class="btn btn-primary btn-lg">Previous Step</button></a>
            </div>     
            <div class="col-sm-2 col-sm-offset-2">
                 <button type="submit" name="proses" value="OK" class="btn btn-primary btn-lg">Next Step</button>
            </div>   
        </form> 
    </div>     
  <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>    