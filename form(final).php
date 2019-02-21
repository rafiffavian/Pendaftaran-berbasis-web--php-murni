
<?php 

    include 'form(final)_proses.php';

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
        <div class="row">
                <div class="col-sm-12" style="background: blue">
                    <h1 style="text-align: center;">OUTPUT PENDAFTARAN</h1>
                </div>
        </div>
        <div class="row">
            <div class="col-sm-5" style="margin-top: 50px;margin-left: 50px;">
                <table class="table table-contextual">
                        <tr>
                            <td colspan="2" style="background: blue"><h1>DATA SISWA</h1></td>
                        </tr>
                        </tr>
                        <tr>

                            <td class="danger"><p align="center">N.I.K</p></td>
                            <td class="danger"><p align="center"><?php echo "$rowsiswa->nama_lengkap"; ?></p></td>
                            
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">N.I.S.N</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">N.I.S</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">NAMA LENGKAP</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">JENIS KELAMIN</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">TANGGAL LAHIR</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">AGAMA</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">ALAMAT</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">NO.HP</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">RATA-RATA RAPOR</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                </table>  
                <table class="table table-contextual">
                        <tr>
                            <td colspan="2" style="background: blue"><h1>DATA SEKOLAH</h1></td>
                        </tr>
                        <tr>

                            <td class="danger"><p align="center">N.P.S.N SEKOLAH</p></td>
                            <td class="danger"><p align="center"><?php echo "$rowsekolah->npsn_sekolah"; ?></p></td>
                            
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">NAMA SEKOLAH</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">STATUS SEKOLAH</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">MODEL UJIAN</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">ALAMAT SEKOLAH</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">TAHUN LULUS</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                </table>              
            </div>
            <div class="col-sm-5 col-sm-offset-1" style="margin-top: 10px;">
                <table class="table table-contextual">
                    <br><br>
                         <tr>
                            <td colspan="2" style="background: blue"><h1>DATA ORANG TUA</h1></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="danger"><p style="background: #536dfe;" align="center">DATA AYAH</p></td>
                        </tr>
                        <tr>

                            <td class="danger"><p align="center">NAMA AYAH</p></td>
                            <td class="danger"><p align="center"><?php echo "$rowayah->nama_lengkap"; ?></p></td>
                                
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">PENDIDIKAN AYAH</p></td>               
                            <td class="danger"><p align="center"><?php echo "$rowayah->pendidikan"; ?></p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">PEKERJAAN</p></td>               
                               <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">PENGHASILAN</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">NO.HP</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger" colspan="2"><p align="center" style="background:#536dfe;">DATA IBU</p></td>               
                        </tr>
                        <tr>

                            <td class="danger"><p align="center">NAMA IBU</p></td>
                            <td class="danger"><p align="center"><?php echo "$rowibu->nama_lengkap"; ?></p></td>
                                
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">PENDIDIKAN IBU</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">PEKERJAAN</p></td>               
                               <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">PENGHASILAN</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">NO.HP</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                         <tr> 
                            <td class="danger" colspan="2"><p align="center" style="background:#536dfe;">DATA WALI</p></td>               
                        </tr>
                        <tr>

                            <td class="danger"><p align="center">NAMA WALI</p></td>
                            <td class="danger"><p align="center"><?php echo $rowwali?"$rowwali->nama_lengkap":NULL; ?></p></td>
                                
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">PENDIDIKAN WALI</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">PEKERJAAN</p></td>               
                               <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">PENGHASILAN</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                        <tr> 
                            <td class="danger"><p align="center">NO.HP</p></td>               
                            <td class="danger"><p align="center">_ _ _ _ _</p></td>
                        </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7 col-sm-offset-2" style="margin-left: 300px;">
                <table class="table table-contextual">
                        <br><br>
                             <tr>
                                <td colspan="2" style="background: blue"><h1>DATA NILAI</h1></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="danger"><p style="background: #536dfe;" align="center">Ilmu Pengetahuan Alam</p></td>
                            </tr>
                            <tr>

                                <td class="danger"><p align="center">Semester 1</p></td>
                                <td class="danger"><p align="center"><?php echo "$rowipa->nilai_satu"; ?></p></td>
                                    
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Semester2</p></td>               
                                <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Semester3</p></td>               
                                   <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Semester4</p></td>               
                                <td class="danger"><p align="center"><?php echo "$rowipa->nilai_empat"; ?></p></td>
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Rata-Rata Nilai</p></td>               
                                <td class="danger"><p align="center"><?php echo "$rowipa->rata_ipa"; ?></p></td>
                            </tr>
                            <tr> 
                                <td class="danger" colspan="2"><p align="center" style="background:#536dfe;">Matematika</p></td>               
                            </tr>
                             <tr>

                                <td class="danger"><p align="center">Semester 1</p></td>
                                <td class="danger"><p align="center"><?php echo "$rowmtk->nilai_satu"; ?></p></td>
                                    
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Semester2</p></td>               
                                <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Semester3</p></td>               
                                   <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Semester4</p></td>               
                                <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Rata-Rata Nilai</p></td>               
                                <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                             <tr> 
                                <td class="danger" colspan="2"><p align="center" style="background:#536dfe;">Bahasa Indonesia</p></td>               
                            </tr>
                             <tr>

                                <td class="danger"><p align="center">Semester 1</p></td>
                                <td class="danger"><p align="center"><?php echo "$rowbindo->nilai_satu"; ?></p></td>
                                    
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Semester2</p></td>               
                                <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Semester3</p></td>               
                                   <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Semester4</p></td>               
                                <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Rata-Rata Nilai</p></td>               
                                <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                             <tr> 
                                <td class="danger" colspan="2"><p align="center" style="background:#536dfe;">Bahasa Inggris</p></td>               
                            </tr>
                             <tr>

                                <td class="danger"><p align="center">Semester 1</p></td>
                                <td class="danger"><p align="center"><?php echo "$rowbing->nilai_satu"; ?></p></td>
                                    
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Semester2</p></td>               
                                <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Semester3</p></td>               
                                   <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Semester4</p></td>               
                                <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                            <tr> 
                                <td class="danger"><p align="center">Rata-Rata Nilai</p><br></td>               
                                <td class="danger"><p align="center">_ _ _ _ _</p></td>
                            </tr>
                            <tr> 
                                <td class="danger" colspan="2" style="background:#536dfe;"></td>               
                            </tr>
                             <tr> 
                                <td class="danger"><p align="center">Rata-Rata Total</p></td>               
                                <td class="danger"><p align="center"><?php echo "$rowratatotal"; ?></p></td>
                            </tr>
                </table>
            </div>    
        </div>
        <div>
            <center><img src="folderupload/<?php echo $rowsiswa->foto_siswa;?>" style ="width: 100px; height: 100px;" ></center><!-- <img src='$folder/$nama' width='100px' height='50px'><br> -->
        </div><br>
        <div class="row">
                <div class="alert alert-warning col-sm-8 col-sm-offset-2 lalat" role="alert" style="background: orange;">
                      <a href="#" class="alert-link" style="color: red;">CATATAN! Silahkan Periksa data, Jika Ada Data Yang Salah ,Klik tombol KEMBALI dan Perbaiki ,Jika Semua Data Sudah Benar Maka Klik Tombol FINISH!!!</a>
                </div>
           </div>
           <div class="col-sm-5 col-sm-offset-2">
                 <button type="button" onclick="history.go(-6)" class="btn btn-primary btn-lg">KEMBALI</button>
            </div>     
            <div class="col-sm-2 col-sm-offset-2">
                 <a href="form(finish).php"><button type="button" class="btn btn-primary btn-lg">FINISH</button></a>
            </div>
    </div>
 <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>