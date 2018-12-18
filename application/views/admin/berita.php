<!DOCTYPE HTML>
<html>
<head>
<title>Berita - Admin Sanan</title>

<?php include 'admincss.php' ?>
<link href="<?php echo base_url() ?>assets/admin/css/sidebar-nav.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/admin/css/dataTables.bootstrap.min.css" rel="stylesheet">
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
			<?php include 'header.php' ?>
			<script>
			$(document).ready(function() {
				 var navoffeset=$(".header-main").offset().top;
				 $(window).scroll(function(){
					var scrollpos=$(window).scrollTop(); 
					if(scrollpos >=navoffeset){
						$(".header-main").addClass("fixed");
					}else{
						$(".header-main").removeClass("fixed");
					}
				 });
			});
			</script>
			<div class="inner-block">
			    <div class="blank">
			    	<h2>Berita</h2>
			    	<div class="blankpage-main">
			    		<form class="">
			    			<div class="table-responsive">
                                <table class="table table-hover" id="example">
                                	<a href="<?php echo base_url('index.php/admin/berita/tambah')?>" class="btn btn-success">
                                		<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                                		Tambah Berita
                                	</a>
                                	<br>
                                	<br>
                                  	<thead>
	                                    <tr>
	                                      <th>Nomor</th>
	                                      <th>Judul Berita</th>                  
	                                      <th>Isi Berita</th>
	                                      <th>Tanggal Berita</th>
	                                      <th>Foto Berita</th>
	                                      <th>Aksi</th>
	                                  </tr>
	                              </thead>
	                              <tbody>
	                              	<?php $no=1; ?>
	                              	<?php foreach ($berita as $data){ ?>
	                                <tr>
		                                  <td><?php echo $no ?></td>
		                                  <td><?php echo $data->judul_berita ?></td>
		                                  <td><?php echo substr($data->isi_berita, 0, 250); ?></td>    
		                                  <td><?php echo $data->tanggal_berita ?></td>
		                                  <td><img src="<?php echo base_url('assets/img/berita/'.$data->foto_berita) ?>" width=150 height=100></span></td>
		                                  <td>
		                                  <a href="<?php echo base_url('index.php/admin/berita/edit/'.$data->id_berita)?>" class="btn btn-info">
		                                  	<i class="fa fa-edit fa-fw" aria-hidden="true"></i>Edit
		                                  </a>
	                                      <a href="<?php echo base_url('index.php/admin/berita/hapus/'.$data->id_berita)?>" class="btn btn-danger">
	                                      	<i class="fa fa-trash fa-fw" aria-hidden="true"></i>Delete
	                                      </a>
                                  		  </td>
		                            </tr>
				                     <?php $no++; } ?>
		                          </tbody>
		                      </table>

		                  </div>
			    		</form>
			    	</div>
			    </div>
			</div>
			<?php include 'footer.php' ?>
		</div>
	</div>
	<!--slider menu-->
    <?php include 'sidemenu.php' ?>
	<div class="clearfix"> </div>
</div>
<script src="<?php echo base_url() ?>assets/admin/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/sidebar-nav.min.js"></script>
<?php include 'adminjs.php' ?>
<script src="<?php echo base_url() ?>assets/admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/datatables.bootstrap.min.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
            $('#example').DataTable();
        } );
    </script>

</body>
</html>