<!DOCTYPE HTML>
<html>
<head>
<title>Admin Sanan</title>
	<?php include 'admincss.php' ?>

	<!--//skycons-icons-->
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
				<!--market updates updates-->
				<div class="market-updates">
					<div class="col-md-4 market-update-gd">
						<div class="market-update-block clr-block-1">
							<div class="col-md-8 market-update-left">
								<h3>83</h3>
								<h4>Jumlah Berita</h4>
								<p>Data Berita Lengkap</p>
							</div>
							<div class="col-md-4 market-update-right">
								<i class="fa fa-file-text-o"> </i>
							</div>
							  <div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-4 market-update-gd">
						<div class="market-update-block clr-block-2">
						 <div class="col-md-8 market-update-left">
							<h3>135</h3>
							<h4>Jumlah Galeri</h4>
							<p>Data Galeri Lengkap</p>
						  </div>
							<div class="col-md-4 market-update-right">
								<i class="fa fa-eye"> </i>
							</div>
						  <div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-4 market-update-gd">
						<div class="market-update-block clr-block-3">
							<div class="col-md-8 market-update-left">
								<h3>23</h3>
								<h4>Jumlah Video</h4>
								<p>Data Video Lengkap</p>
							</div>
							<div class="col-md-4 market-update-right">
								<i class="fa fa-envelope-o"> </i>
							</div>
							 <div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Recent Followers
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Project</th>
                                      <th>Manager</th>                                   
                                                                        
                                      <th>Status</th>
                                      <th>Progress</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Face book</td>
                                  <td>Malorum</td>                                 
                                                             
                                  <td><span class="label label-danger">in progress</span></td>
                                  <td><span class="badge badge-info">50%</span></td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Twitter</td>
                                  <td>Evan</td>                               
                                                                  
                                  <td><span class="label label-success">completed</span></td>
                                  <td><span class="badge badge-success">100%</span></td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Google</td>
                                  <td>John</td>                                
                                  
                                  <td><span class="label label-warning">in progress</span></td>
                                  <td><span class="badge badge-warning">75%</span></td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>LinkedIn</td>
                                  <td>Danial</td>                                 
                                                             
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-info">65%</span></td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>Tumblr</td>
                                  <td>David</td>                                
                                                                 
                                  <td><span class="label label-warning">in progress</span></td>
                                  <td><span class="badge badge-danger">95%</span></td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>Tesla</td>
                                  <td>Mickey</td>                                  
                                                             
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-success">95%</span></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
      <div class="col-md-12 chit-chat-layer1-rit">    	
      	  <div class="geo-chart">
					<section id="charts1" class="charts">
						<div class="wrapper-flex">
						
						    <table id="myTable" class="geoChart tableChart data-table col-table" style="display:none;">
						        <caption>Student Nationalities Table</caption>
						        <tr>
						            <th scope="col" data-type="string">Country</th>
						            <th scope="col" data-type="number">Number of Students</th>
						            <th scope="col" data-role="annotation">Annotation</th>
						        </tr>
						        <tr>
						            <td>China</td>
						            <td align="right">20</td>
						            <td align="right">20</td>
						        </tr>
						        <tr>
						            <td>Colombia</td>
						            <td align="right">5</td>
						            <td align="right">5</td>
						        </tr>
						        <tr>
						            <td>France</td>
						            <td align="right">3</td>
						            <td align="right">3</td>
						        </tr>
						        <tr>
						            <td>Italy</td>
						            <td align="right">1</td>
						            <td align="right">1</td>
						        </tr>
						        <tr>
						            <td>Japan</td>
						            <td align="right">18</td>
						            <td align="right">18</td>
						        </tr>
						        <tr>
						            <td>Kazakhstan</td>
						            <td align="right">1</td>
						            <td align="right">1</td>
						        </tr>
						        <tr>
						            <td>Mexico</td>
						            <td align="right">1</td>
						            <td align="right">1</td>
						        </tr>
						        <tr>
						            <td>Poland</td>
						            <td align="right">1</td>
						            <td align="right">1</td>
						        </tr>
						        <tr>
						            <td>Russia</td>
						            <td align="right">11</td>
						            <td align="right">11</td>
						        </tr>
						        <tr>
						            <td>Spain</td>
						            <td align="right">2</td>
						            <td align="right">2</td>
						        </tr>
						        <tr>
						            <td>Tanzania</td>
						            <td align="right">1</td>
						            <td align="right">1</td>
						        </tr>
						        <tr>
						            <td>Turkey</td>
						            <td align="right">2</td>
						            <td align="right">2</td>
						        </tr>
						
						    </table>

						
						
						</div><!-- .wrapper-flex -->
						</section>				
					</div>
		      </div>
		     <div class="clearfix"> </div>
		</div>
			<?php include 'footer.php' ?>
		</div>
	</div>
	<?php include 'sidemenu.php' ?>
	<div class="clearfix"> </div>
	</div>
<?php include 'adminjs.php' ?>
</body>
</html>                     