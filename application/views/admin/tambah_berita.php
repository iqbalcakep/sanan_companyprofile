<!DOCTYPE HTML>
<html>
<head>
<title>Tambah Berita - Admin Sanan</title>

<?php include 'admincss.php' ?>
<link href="<?php echo base_url() ?>assets/admin/css/sidebar-nav.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/admin/css/dataTables.bootstrap.min.css" rel="stylesheet">
	
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
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
			    		<?php echo form_open_multipart('admin/berita/tambah'); ?> 
        
				        <?php echo validation_errors(); ?>

				        <div class="form-group">
				            <label for="">Judul Berita</label>
				            <input type="text" class="form-control" id="judul_berita" name="judul_berita" placeholder="Judul Berita"><br>

				            <label for="">Berita</label>
				            <textarea class="form-control" id="editor1" name="isi_berita" placeholder="Isi_berita"></textarea>
				            <br>

				            <label for="">Foto Berita</label>
				            <input type="file" name="userfile" size="20"/>
				        </div>
				        <center>
				            <button type="submit" class="btn btn-info">Submit</button>
				            <a href="<?php echo base_url('index.php/admin/berita')?>"class="btn btn-danger">Back</a></td>
				        </center>
				        <?php echo form_close(); ?>
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

<script>
 CKEDITOR.replace('editor1' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder');?>'
    });
</script>
</body>
</html>