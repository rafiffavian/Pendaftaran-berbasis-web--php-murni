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
        <form action="form4_proses.php?id=<?php echo $_GET['id']; ?>" method="post">
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
                            <li role="presentation" class="active"><a href="#">4) DATA NILAI</a></li>
                            <li role="presentation" class="default"><a href="#">5) KONFIRMASI</a></li>
                            </ul>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-1">
                        <table class="table table-contextual" style="margin-left: 55px;">
                            <tr>
                                <td colspan="5  " style="background: blue"><h1>DATA NILAI</h1></td>
                            </tr>
                            <tr>
                                <td rowspan="2" class="info"><p style="text-align: center;margin-top: 20px">MATA PELAJARAN</p></td>
                                <td colspan="4" class="info"><p align="center">SEMESTER</p></td>
                            </tr>
                            <tr>

                                <td class="danger"><p align="center">1</p></td>
                                <td class="danger"><p align="center">2</p></td>
                                <td class="danger"><p align="center">3</p></td>
                                <td class="danger"><p align="center">4</p></td>

                            </tr>
                            <tr> 
                                <td class="danger">Ilmu Pengetahuan Alam</td>               
                                <td class="success"><input type="number" name="ipa1"></td>
                                <td class="success"><input type="number" name="ipa2"></td>
                                <td class="success"><input type="number" name="ipa3"></td>
                                <td class="success"><input type="number" name="ipa4"></td>
                                
                            </tr>
                            <tr>
                                <td class="danger">Matematika</td>  
                                <td class="success"><input type="number" name="mtk1"></td>
                                <td class="success"><input type="number" name="mtk2"></td>
                                <td class="success"><input type="number" name="mtk3"></td>
                                <td class="success"><input type="number" name="mtk4"></td>
                                
                            </tr>
                            <tr>
                                <td class="danger">Bahasa Indonesia</td>  
                                <td class="success"><input type="number" name="bindo1"></td>
                                <td class="success"><input type="number" name="bindo2"></td>
                                <td class="success"><input type="number" name="bindo3"></td>
                                <td class="success"><input type="number" name="bindo4"></td>
                                
                            </tr>
                            <tr> 
                                <td class="danger">Bahasa Inggris</td> 
                                <td class="success"><input type="number" name="bing1"></td>
                                <td class="success"><input type="number" name="bing2"></td>
                                <td class="success"><input type="number" name="bing3"></td>
                                <td class="success"><input type="number" name="bing4"></td>
                                
                            </tr>
                                    
                        </table>
                    </div><br><br>
                    <div class="row">
                        <div class="alert alert-warning col-sm-8 col-sm-offset-2 lalat" role="alert" style="background: orange;">
                              <a href="#" class="alert-link" style="color: red;">CATATAN! semua field wajib diisi!!!</a>
                        </div>
                   </div>
                   <div class="col-sm-5 col-sm-offset-2">
                         <a href="form3.php?id=<?php echo $_GET['id'] ?>"><button type="button" class="btn btn-primary btn-lg">Previous Step</button></a>
                    </div>     
                    <div class="col-sm-2 col-sm-offset-2">
                         <button type="submit" name="proses" class="btn btn-primary btn-lg">Next Step</button>
                    </div>
                </div>
        </form>        

    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>