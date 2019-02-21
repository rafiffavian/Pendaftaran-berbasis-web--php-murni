
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
                    <li role="presentation" class="active"><a href="#">2) DATA ORTU/WALI </a></li>
                    <li role="presentation" class="default"><a href="#">3) DATA SEKOLAH</a></li>
                    <li role="presentation" class="default"><a href="#">4) DATA NILAI</a></li>
                    <li role="presentation" class="default"><a href="#">5) KONFIRMASI</a></li>
                    </ul>
            </div>
         </div><br><br><br>
        <form action="dataortu_proses.php" method="post">
            <table width="50%" align="center">
                    <tr>
                        <td colspan="1" bgcolor="blue">
                            <h1 style="background: blue">DATA AYAH</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                    <div class=" col-sm-4 ">
                                        <label for="inputPassword3" class ="control-label">Nama Lengkap</label>
                                    </div>        
                                    <div class="col-sm-8">    
                                        <input type="text" name="namaayah" class="form-control" placeholder="Nama Lengkap" value="<?=getSession('form2','namaayah');?>">
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                    <div class="col-sm-4">
                                        <label for="inputPassword3" class ="control-label">Pendidikan</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <select name="pendidikanayah" class="form-control">
                                            <option>&nbsp;&nbsp;-------PILIH PENDIDIKAN-------</option>
                                            <option value="tidaksekolah" <?php echo getSession('form2','pendidikanayah')=="tidaksekolah"?"selected":NULL ?>>Tidak Sekolah</option>
                                            <option value="sd/mi" <?php echo getSession('form2','pendidikanayah')=="sd/mi"?"selected":NULL ?>>SD/MI</option>
                                            <option value="smp/mts" <?php echo getSession('form2','pendidikanayah')=="smp/mts"?"selected":NULL ?>>SMP/MTS</option>
                                            <option value="sma/smk/ma" <?php echo getSession('form2','pendidikanayah')=="sma/smk/ma"?"selected":NULL ?>>SMA/SMK/MA</option>
                                            <option value="diploma" <?php echo getSession('form2','pendidikanayah')=="diploma"?"selected":NULL ?>>DIPLOMA</option>
                                        </select>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Pekerjaan</label>
                                    <div class="col-sm-5">
                                      <select name="pekerjaanayah" class="form-control">
                                          <option>&nbsp;&nbsp;-------PILIH PEKERJAAN-------</option>
                                          <option value="buruh" <?php echo getSession('form2','pekerjaanayah')=="buruh"?"selected":NULL ?>>BURUH</option>
                                          <option value="tani" <?php echo getSession('form2','pekerjaanayah')=="tani"?"selected":NULL ?>>TANI</option>
                                          <option value="wiraswasta" <?php echo getSession('form2','pekerjaanayah')=="wiraswasta"?"selected":NULL ?>>WIRASWASTA</option>
                                          <option value="pns" <?php echo getSession('form2','pekerjaanayah')=="pns"?"selected":NULL ?>>PNS</option>
                                          <option value="tni/polri" <?php echo getSession('form2','pekerjaanayah')=="tni/polri"?"selected":NULL ?>>TNI/POLRI</option>
                                      </select>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Penghasilan</label>
                                    <div class="col-sm-5">
                                        <select name="penghasilanayah" class="form-control">
                                            <option>&nbsp;&nbsp;-------PILIH PENGHASILAN-------</option>
                                            <option value="500rb" <?php echo getSession('form2','penghasilanayah')=="500rb"?"selected":NULL ?>>500rb</option>
                                            <option value="500-1juta" <?php echo getSession('form2','penghasilanayah')=="500-1juta"?"selected":NULL ?>>500-1juta</option>
                                            <option value="1jt-3juta" <?php echo getSession('form2','penghasilanayah')=="1jt-3juta"?"selected":NULL ?>>1jt-3juta</option>
                                            <option value="3jt-5juta" <?php echo getSession('form2','penghasilanayah')=="3jt-5juta"?"selected":NULL ?>>3jt-5juta</option>
                                            <option value="5jt-10juta" <?php echo getSession('form2','penghasilanayah')=="5jt-10juta"?"selected":NULL ?>>5jt-10juta</option>
                                        </select>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                     <label for="inputEmail3" class="col-sm-4 control-label">No.Handphone</label>
                                     <div class="col-sm-5">
                                         <input type="number" name="nohpayah" class="form-control col-sm-8" value="<?=getSession('form2','nohpayah');?>"> 
                                     </div>
                                </div>
                                <div class="col-sm-12" style="height: 40px"></div>
                        </td>
                    </tr>  
                </div>
            </table>
            <br><table width="50%" align="center">    
                    <tr>
                        <td colspan="1" bgcolor="blue">
                            <h1 style="background: blue">DATA IBU</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                    <div class=" col-sm-4 ">
                                        <label for="inputPassword3" class ="control-label">Nama Lengkap</label>
                                    </div>        
                                    <div class="col-sm-8">    
                                        <input type="text" name="namaibu" class="form-control" placeholder="Nama Lengkap" value="<?=getSession('form2','namaibu');?>">
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                    <div class="col-sm-4">
                                        <label for="inputPassword3" class ="control-label">Pendidikan</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <select name="pendidikanibu" class="form-control">
                                            <option>&nbsp;&nbsp;-------PILIH PENDIDIKAN-------</option>
                                            <option value="Tidak Sekolah" <?php echo getSession('form2','pendidikanibu')=="Tidak Sekolah"?"selected":NULL ?>>Tidak Sekolah</option>
                                            <option value="SD/MI" <?php echo getSession('form2','pendidikanibu')=="SD/MI"?"selected":NULL ?>>SD/MI</option>
                                            <option value="SMP/MTS" <?php echo getSession('form2','pendidikanibu')=="SMP/MTS"?"selected":NULL ?>>SMP/MTS</option>
                                            <option value="SMA/SMK/MA" <?php echo getSession('form2','pendidikanibu')=="SMA/SMK/MA"?"selected":NULL ?>>SMA/SMK/MA</option>
                                            <option value="DIPLOMA" <?php echo getSession('form2','pendidikanibu')=="DIPLOMA"?"selected":NULL ?>>DIPLOMA</option>
                                        </select>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Pekerjaan</label>
                                    <div class="col-sm-5">
                                      <select name="pekerjaanibu" class="form-control">
                                          <option>&nbsp;&nbsp;-------PILIH PEKERJAAN-------</option>
                                          <option value="BURUH" <?php echo getSession('form2','pekerjaanibu')=="BURUH"?"selected":NULL ?>>BURUH</option>
                                          <option value="IBU RUMAH TANGGA" <?php echo getSession('form2','pekerjaanibu')=="IBU RUMAH TANGGA"?"selected":NULL ?>>IBU RUMAH TANGGA</option>
                                          <option value="TANI" <?php echo getSession('form2','pekerjaanibu')=="TANI"?"selected":NULL ?>>TANI</option>
                                          <option value="WIRASWASTA" <?php echo getSession('form2','pekerjaanibu')=="WIRASWASTA"?"selected":NULL ?>>WIRASWASTA</option>
                                          <option value="PNS" <?php echo getSession('form2','pekerjaanibu')=="PNS"?"selected":NULL ?>>PNS</option>
                                          <option value="TNI/POLRI" <?php echo getSession('form2','pekerjaanibu')=="TNI/POLRI"?"selected":NULL ?>>TNI/POLRI</option>
                                      </select>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Penghasilan</label>
                                    <div class="col-sm-5">
                                        <select name="penghasilanibu" class="form-control">
                                            <option>&nbsp;&nbsp;-------PILIH PENGHASILAN-------</option>
                                            <option value="500rb" <?php echo getSession('form2','penghasilanibu')=="500rb"?"selected":NULL ?>><500rb</option>
                                            <option value="500-1juta" <?php echo getSession('form2','penghasilanibu')=="500-1juta"?"selected":NULL ?>>500-1juta</option>
                                            <option value="1jt-3juta" <?php echo getSession('form2','penghasilanibu')=="1jt-3juta"?"selected":NULL ?>>1jt-3juta</option>
                                            <option value="3jt-5juta" <?php echo getSession('form2','penghasilanibu')=="3jt-5juta"?"selected":NULL ?>>3jt-5juta</option>
                                            <option value="5jt-10juta" <?php echo getSession('form2','penghasilanibu')=="5jt-10juta"?"selected":NULL ?>>5jt-10juta</option>
                                        </select>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                     <label for="inputEmail3" class="col-sm-4 control-label">No.Handphone</label>
                                     <div class="col-sm-5">
                                         <input type="number" name="nohpibu" class="form-control col-sm-8" value="<?=getSession('form2','nohpibu');?>"> 
                                     </div>
                                     <div class="col-sm-12" style="height: 40px"></div>
                                </div>
                        </td>
                    </tr>   
                </div>
            </table>
            </table>
            <br><table width="50%" align="center">    
                    <tr>
                        <td colspan="1" bgcolor="blue">
                            <h1 style="background: blue">DATA WALI</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                    <div class=" col-sm-4 ">
                                        <label for="inputPassword3" class ="control-label">Nama Lengkap</label>
                                    </div>        
                                    <div class="col-sm-8">    
                                        <input name="namawali" type="text" class="form-control" placeholder="Nama Lengkap" value="<?=getSession('form2','namawali');?>">
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                    <div class="col-sm-4">
                                        <label for="inputPassword3" class ="control-label">Pendidikan</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <select name="pendidikanwali" class="form-control">
                                            <option>&nbsp;&nbsp;-------PILIH PENDIDIKAN-------</option>
                                            <option value="Tidak Sekolah" <?php echo getSession('form2','pendidikanwali')=="Tidak Sekolah"?"selected":NULL ?>>Tidak Sekolah</option>
                                            <option value="SD/MI" <?php echo getSession('form2','pendidikanwali')=="SD/MI"?"selected":NULL ?>>SD/MI</option>
                                            <option value="SMP/MTS" <?php echo getSession('form2','pendidikanwali')=="SMP/MTS"?"selected":NULL ?>>SMP/MTS</option>
                                            <option value="SMA/SMK/MA" <?php echo getSession('form2','pendidikanwali')=="SMA/SMK/MA"?"selected":NULL ?>>SMA/SMK/MA</option>
                                            <option value="DIPLOMA" <?php echo getSession('form2','pendidikanwali')=="DIPLOMA"?"selected":NULL ?>>DIPLOMA</option>
                                        </select>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Pekerjaan</label>
                                    <div class="col-sm-5">
                                      <select name="pekerjaanwali" class="form-control">
                                          <option>&nbsp;&nbsp;-------PILIH PEKERJAAN-------</option>
                                          <option value="BURUH" <?php echo getSession('form2','pekerjaanwali')=="BURUH"?"selected":NULL ?>>BURUH</option>
                                          <option value="TANI" <?php echo getSession('form2','pekerjaanwali')=="TANI"?"selected":NULL ?>>TANI</option>
                                          <option value="WIRASWASTA" <?php echo getSession('form2','pekerjaanwali')=="WIRASWASTA"?"selected":NULL ?>>WIRASWASTA</option>
                                          <option value="PNS" <?php echo getSession('form2','pekerjaanwali')=="PNS"?"selected":NULL ?>>PNS</option>
                                          <option value="TNI/POLRI" <?php echo getSession('form2','pekerjaanwali')=="TNI/POLRI"?"selected":NULL ?>>TNI/POLRI</option>
                                      </select>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Penghasilan</label>
                                    <div class="col-sm-5">
                                        <select name="penghasilanwali" class="form-control">
                                            <option>&nbsp;&nbsp;-------PILIH PENGHASILAN-------</option>
                                            <option value="500rb" <?php echo getSession('form2','penghasilanwali')=="500rb"?"selected":NULL ?>>500rb</option>
                                            <option value="500-1juta" <?php echo getSession('form2','penghasilanwali')=="500-1juta"?"selected":NULL ?>>500-1juta</option>
                                            <option value="1jt-3juta" <?php echo getSession('form2','penghasilanwali')=="1jt-3juta"?"selected":NULL ?>>1jt-3juta</option>
                                            <option value="3jt-5juta" <?php echo getSession('form2','penghasilanwali')=="3jt-5juta"?"selected":NULL ?>>3jt-5juta</option>
                                            <option value="5jt-10juta" <?php echo getSession('form2','penghasilanwali')=="5jt-10juta"?"selected":NULL ?>>5jt-10juta</option>
                                        </select>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><div class="form-group">
                                     <label for="inputEmail3" class="col-sm-4 control-label">No.Handphone</label>
                                     <div class="col-sm-5">
                                         <input type="number" name="nohpwali" class="form-control col-sm-8" value="<?=getSession('form2','nohpwali');?>"> 
                                     </div>
                                </div>
                                <div class="col-sm-12" style="height: 40px"></div>
                        </td>
                    </tr>   
                </div>
            </table>
           <br><div class="col-sm-2"></div>
           <div class="row">
                <div class="alert alert-warning col-sm-8" role="alert" style="background: orange;">
                      <a href="#" class="alert-link" style="color: red;">CATATAN! semua field wajib diisi!!!</a>    
                </div>
           </div><br>
           <div class="col-sm-5 col-sm-offset-2">
                 <a href="form1.php"><button type="button" class="btn btn-primary btn-lg">Previous Step</button></a>
            </div>     
            <div class="col-sm-2 col-sm-offset-2">
                 <button type="submit" name="proses" value="OK" class="btn btn-primary btn-lg">Next Step</button>
            </div>
        </form>    
    </div      

   <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>  