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
     	.alamat label{
     		margin-right: 10px;	
     	} 	
     	.lali{
     		margin-left: 10px;
     	}

    </style>

    
  </head>
  <body>
  	<div class="container-fluid">
  	  	<div class="row">	
  			<div class="col-sm-12" style="background: blue" style="width: 100%" style="height: 100px">
  				<h1 align="center">PENDAFTARAN ONLINE</h1>
  			</div>
  	  	</div><br>
  		<div class="row">
	  		<div class="col-sm-8">
	  			<ul class="nav nav-pills">
					<li role="presentation" class="active"><a href="#">1) DATA SISWA</a></li>
					<li role="presentation" class="default"><a href="#">2) DATA ORTU/WALI </a></li>
					<li role="presentation" class="default"><a href="#">3) DATA SEKOLAH</a></li>
					<li role="presentation" class="default"><a href="#">4) DATA NILAI</a></li>
					<li role="presentation" class="default"><a href="#">5) KONFIRMASI</a></li>
					</ul>
	  		</div>
	  	</div><br><br>
	  	<div class="row">
	  		<div class="col-sm-2">
	  		</div>
	  		<div class="col-sm-8">
	<form method="post" action="form1_proses.php">
	  				<table id="opa" >
	  					<h2 style="background: blue;width: 30%">DATA SISWA</h2><br>
	  					<div class="form-group">
						   <label for="inputEmail3" class="col-sm-2 control-label">N.I.K</label>
						   <div class="col-sm-10">
						      <input type="number" name="nik" class="form-control" id="inputEmail3" placeholder="N.I.K" value="<?=getSession('form1','nik');?>">
						   </div>
						</div><br><br>
						<div class="form-group">
						   <label for="inputPassword3" class="col-sm-2 control-label">N.I.S.N</label>
						   <div class="col-sm-10">
						      <input type="number" name="nisn" class="form-control" id="inputPassword3" placeholder="N.I.S.N" value="<?=getSession('form1','nisn');?>">
						   </div>  
						</div><br><br>
						<div class="form-group">
						   <label for="inputPassword3" class="col-sm-2 control-label">N.I.S</label>
						   <div class="col-sm-10">
						      <input type="number" name="nis" class="form-control" id="inputPassword3" placeholder="N.I.S" value="<?=getSession('form1','nis');?>">
						    </div>  
						</div><br><br>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Nama Lengkap</label>
						   <div class="col-sm-10">
						      <input type="username" name="namalengkap" class="form-control" id="inputPassword3" placeholder="Nama Lengkap" value="<?=getSession('form1','namalengkap');?>">
						    </div>  
						</div><br><br>
						<label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
						<div class="radio">
						  <label>
						    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="rbone" id="optionsRadios2" value="laki-laki" <?php echo getSession('form1','rbone')=="laki-laki"?"checked":NULL ?>>
						    Laki-Laki
						  </label>
						</div>
						<div class="radio">
						  <label>
						    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="rbone" id="optionsRadios2" value="perempuan" <?php echo getSession('form1','rbone')=="perempuan"?"checked":NULL ?>>
						    Perempuan
						  </label>
						</div><br>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Tempat Kelahiran</label>
						   <div class="col-sm-10">
						      <input type="username" name="tempatlahir" class="form-control" id="inputPassword3" placeholder="Tempat Kelahiran" value="<?=getSession('form1','tempatlahir');?>">
						    </div>  
						</div><br><br><br>
						<div class="row">
							<label for="inputPassword3" class="col-sm-2 control-label">&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Lahir</label>
							<div class="col-sm-3 lali">
								<select name="tanggal" class="form-control">
									<option value="">----PILIH TANGGAL----</option>
										<?php for ($i=1; $i <= 31 ; $i++):?>
											<option value="<?=$i;?>" <?=getSession('form1','tanggal')?'selected':null;?>><?=$i;?></option>
										<?php endfor;?>
								</select>
							</div>
							<div class="col-sm-3 lali">
								<select name="bulan" class="form-control">
									<option value="">----PILIH BULAN----</option>
										<?php for ($i=1; $i <= 12 ; $i++):?>
											<option value="<?=$i;?>" <?=getSession('form1','bulan')?'selected':null;?>><?=$i;?></option>
										<?php endfor;?>
								</select>
							</div>
							<div class="col-sm-3 lali">
					            <select name="tahun" class="form-control">
					              <option value="">--TAHUN--</option>
					                <?php for ($i=date('Y'); $i >= 1965; $i--):?>
					                    <option value="<?=$i;?>" <?=getSession('form1','tahun')?'selected':null;?>><?=$i;?></option>
										<?php endfor;?>
					            </select>
					          </div>
						</div><br><br>
						<label for="inputPassword3" class="col-sm-2 control-label">Agama</label>
						<div class="row">
							<div class="col-sm-3">
								<select name="agama" class="form-control" required="">
								  <option value="">&nbsp;&nbsp;----------PILIH-----------</option>
								  <option value="islam" <?php echo getSession('form1','agama')=="islam"?"selected":NULL ?>>ISLAM</option>
								  <option value="katolik" <?php echo getSession('form1','agama')=="katolik"?"selected":NULL ?>>KATOLIK</option>
								  <option value="protestan" <?php echo getSession('form1','agama')=="protestan"?"selected":NULL ?>>PROTESTAN</option>
								  <option value="buddha" <?php echo getSession('form1','agama')=="buddha"?"selected":NULL ?>>BUDDHA</option>
								  <option value="hindu" <?php echo getSession('form1','agama')=="hindu"?"selected":NULL ?>>HINDU</option>
								</select>
							</div>
						</div><br>	
						<div class="row"">	
							<div class="form-group alamat">
								<label " class="col-sm-2 control-label">&nbsp;&nbsp;&nbsp;&nbsp;Alamat</label>
							    <div class="col-sm-5">
							      <textarea type="textarea" name="alamat" class="form-control" id="inputPassword3" placeholder="Alamat" value=""><?php echo getSession('form1','alamat');?></textarea>
							    </div>
							</div>
						</div><br>
						<div class="row">	
							<div class="form-group">
								<label for=""  class="col-sm-2 control-label" style="margin-right: 10px">&nbsp;&nbsp;&nbsp;&nbsp;No.Hp</label>
							   <div class="col-sm-5">
							      <input  type="number" name="nohp" class="form-control" id="inputPassword3" placeholder="No.Hp" value="<?php echo getSession('form1','nohp');?>"></textarea>
							    </div>
							</div>
						</div><br><br><br><br><br> 
	  				</table>
	  			
	  		</div>
	  	</div>
	  	<div class="row">
		  	<div class="col-sm-2"></div>
		  	<div class="alert alert-warning col-sm-8" role="alert" style="background: orange;">
				  <a href="#" class="alert-link" style="color: red;">CATATAN! semua field wajib diisi!!!</a>
			</div><br><br><br><br><br><br>
			<div class="col-sm-10"></div>
			<div>
				<button type="submit" name="proses" value="OK" class="btn btn-primary btn-lg">Next Step</button>
			</div>
			<div class="col-sm-5 col-sm-offset-2">
               <a href="form(signup).php"><button type="button" class="btn btn-primary btn-lg">Previous Step</button></a>
            </div>     
	</form>		
	



  <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>	
