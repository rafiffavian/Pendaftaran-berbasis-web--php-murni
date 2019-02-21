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
                <div class="row">
                    <div class="col-sm-12" style="background: blue">
                        <h1 style="text-align: center;">PENDAFTARAN ONLINE</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8"><br>
                        <ul class="nav nav-pills">
                            <li role="presentation" class="default"><a href="#">1) DATA SISWA</a></li>
                            <li role="presentation" class="default"><a href="#">2) DATA ORTU/WALI </a></li>
                            <li role="presentation" class="default"><a href="#">3) DATA SEKOLAH</a></li>
                            <li role="presentation" class="default"><a href="#">4) DATA NILAI</a></li>
                            <li role="presentation" class="active"><a href="#">5) KONFIRMASI</a></li>
                            </ul>
                    </div>
                </div><br><br>
    <form action="form5_proses.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">        
                <div class="col-sm-5 col-sm-offset-3" style="background: lavender;"><br>
                    <center><img src="gambar/exclamation (1).png"></center><br>
                    <p align="center">Proses Pendaftaran Online SELEKSI NASIONAL MASUK PERGURUAN TINGGI hampir selesai periksa kembali data-data calon siswa yang sudah anda isi</p><br>
                    <p style="color: red">&nbsp;&nbsp;&nbsp;Apakah data calon siswa sudah sesuai dan lengkap?</p>
                        <div class="col-sm-10 col-sm-offset-1" style="background: #1e88e5; height: 30px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="finish" value="finishh" style="margin-top: 8px">&nbsp;&nbsp;Ya, Data Sudah Sesuai Dan Lengkap.
                        </div>
                        <div class="col-sm-3 col-sm-offset-2" style="margin-top: 20px">
                            <p>FOTO SISWA:</p>
                        </div>
                        <div class="col-sm-7" style="margin-top: 20px">
                            <input type="file" name="gambar" id="gambar">
                        </div><br><br><br><br><br>
                </div>
             
                <div class="row">
                <div class="alert alert-warning col-sm-8 col-sm-offset-2 lalat" role="alert" style="background: orange;margin-top: 30px">
                      <a href="#" class="alert-link" style="color: red;">CATATAN! semua field wajib diisi!!!</a>
                </div>
           </div>
           <div class="col-sm-5 col-sm-offset-2">
                 <a href="form4.php"><button type="button" class="btn btn-primary btn-lg">Previous Step</button></a>
            </div>     
            <div class="col-sm-2 col-sm-offset-2">
                 <button type="submit"
                 value="OK" name="proses" class="btn btn-primary btn-lg">Next Step</button>
            </div>
        </div>
        </div>
    </form>    

        <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>