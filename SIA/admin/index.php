<?php require("../check.php");
?>
 <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Dashboard - Sistem Informasi Akademik</title>
		<?php require("favicon.php");
		?>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="../assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="../assets/css/ace.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<?php require("upbar.php");
				?>
                <!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<!--#sidebar-shortcuts-->
				<?php require("sidebar.php");
				?><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<?php require("atas.php");
					?>
                <!--.breadcrumb-->

					
				</div>

				<!--/.page-header-->

					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
							<?php 
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='1'";
			$query = mysql_query($sql);
			$count1 = mysql_num_rows($query);
						
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='2'";
			$query = mysql_query($sql);
			$count2 = mysql_num_rows($query);
						
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='3'";
			$query = mysql_query($sql);
			$count3 = mysql_num_rows($query);
						
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='4'";
			$query = mysql_query($sql);
			$count4 = mysql_num_rows($query);
						
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='5'";
			$query = mysql_query($sql);
			$count5 = mysql_num_rows($query);
						
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='6'";
			$query = mysql_query($sql);
			$count6 = mysql_num_rows($query);
						
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='7'";
			$query = mysql_query($sql);
			$count7 = mysql_num_rows($query);
						
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='8'";
			$query = mysql_query($sql);
			$count8 = mysql_num_rows($query);
						
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='9'";
			$query = mysql_query($sql);
			$count9 = mysql_num_rows($query);
						
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='10'";
			$query = mysql_query($sql);
			$count10 = mysql_num_rows($query);
						
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='11'";
			$query = mysql_query($sql);
			$count11 = mysql_num_rows($query);
						
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='12'";
			$query = mysql_query($sql);
			$count12 = mysql_num_rows($query);
			
			$sql = "SELECT * FROM tbl_guru WHERE id_mapel='12'";
			$query = mysql_query($sql);
			$count12 = mysql_num_rows($query);
			
			$sql = "SELECT * FROM tbl_siswa";
			$query = mysql_query($sql);
			$countsiswa = mysql_num_rows($query);
			
						
			?>
							
							
                    <div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Dashboard
							<small>
								<i class="icon-double-angle-right"></i>
								Kilasan &amp; status
							</small>
						</h1>
					</div>
                            

							<div class="alert alert-block alert-success">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-smile green"></i>

								Selamat Datang di
								<strong class="green">
									SIA SMPN 249 Jakarta
									<small>(v0.1)</small>
								</strong>
								, jika anda baru pertama kali masuk disarankan untuk segera <a href="ganti-pw.php">mengganti password</a> dan <a href="ganti-foto.php">memperbaharui foto profil anda</a>.
							</div>

							<div class="space-6"></div>

							<div class="row-fluid">
							  <div class="vspace"></div>

								<div class="span5">
									<div class="widget-box">
										<div class="widget-header widget-header-flat widget-header-small">
											<h5>
												<i class="icon-suitcaase"></i>
												Guru
											</h5>

											
										</div>

										<div class="widget-body">
											<div class="widget-main">
												<div class="grafikguru" ></div>

												<div class="hr hr8 hr-double"></div>

												
											</div><!--/widget-main-->
										</div><!--/widget-body-->
									</div><!--/widget-box-->
								</div>
								
								
								<div class="span5">
									<div class="widget-box">
										<div class="widget-header widget-header-flat widget-header-small">
											<h5>
												<i class="icon-group"></i>
												Siswa
											</h5>

											
										</div>

										<div class="widget-body">
											<div class="widget-main">
												<div class="grafiksiswa" ></div>

												<div class="hr hr8 hr-double"></div>

												
											</div><!--/widget-main-->
										</div><!--/widget-body-->
									</div><!--/widget-box-->
								</div><!--/span-->
					  </div><!--/row-->

							<div class="hr hr32 hr-dotted"></div>

							<div class="row-fluid">
								<div class="span5">
									<div class="widget-box transparent">
									  <div class="widget-body">
										  <div class="widget-main no-padding"></div><!--/widget-main-->
									  </div><!--/widget-body-->
									</div><!--/widget-box-->
								</div>

								<div class="span7"><!--/widget-box-->
								</div>
							</div>

							<div class="hr hr32 hr-dotted"></div><!--/row-->

							<!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-class="default" value="#438EB9" />#438EB9
									<option data-class="skin-1" value="#222A2D" />#222A2D
									<option data-class="skin-2" value="#C6487E" />#C6487E
									<option data-class="skin-3" value="#D0D0D0" />#D0D0D0
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
							<label class="lbl" for="ace-settings-header"> Fixed Header</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>
					</div>
				</div><!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="../assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="../assets/js/jquery.slimscroll.min.js"></script>
		<script src="../assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="../assets/js/jquery.sparkline.min.js"></script>
		<script src="../assets/js/flot/jquery.flot.min.js"></script>
		<script src="../assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="../assets/js/flot/jquery.flot.resize.min.js"></script>

		<!--ace scripts-->

		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->
		<script type="text/javascript" src="../assets/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../assets/js/Highcharts-4.2.6/js/highcharts.js"></script>
		<script type="text/javascript" src="../assets/js/Highcharts-4.2.6/js/modules/exporting.js"></script>
		<script src="../assets/js/Highcharts-4.2.6/js/highcharts-3d.js"></script>


			
		<script type="text/javascript">
			$('.grafikguru').highcharts({
			 chart: {
			  type: 'pie',
			  options3d:{
				  enable:true,
				  alpha:0,
				  beta:30
			  },
			  marginTop: 80
			 },
			 credits: {
			  enabled: false
			 }, 
			 tooltip: {
			  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			 },
			 title: {
			  text: 'Guru SMPN 249'
			 },
			 subtitle: {
			  text: ''
			 },
			 xAxis: {
			  categories: ['JUMLAH Guru'],
			  labels: {
			   style: {
				fontSize: '10px',
				fontFamily: 'Verdana, sans-serif'
			   }
			  }
			 },
			 legend: {
			  enabled: true
			 },
			 plotOptions: {
			   pie: {
				 allowPointSelect: true,
				 cursor: 'pointer',
				 depth:35,
				 dataLabels: {
				   enabled: false
				 },
				 showInLegend: true
			   }
			 },
			 series: [{
			   'name':'Mata Pelajarann',
			   'data':[
				 ['1',<?php echo $count1; ?>],
				 ['2',<?php echo $count2; ?>],
				 ['3',<?php echo $count3; ?>],
				 ['4',<?php echo $count4; ?>],
				 ['5',<?php echo $count5; ?>],
				 ['6',<?php echo $count6; ?>],
				 ['7',<?php echo $count7; ?>],
				 ['8',<?php echo $count8; ?>],
				 ['9',<?php echo $count9; ?>],
				 ['10',<?php echo $count10; ?>],
				 ['11',<?php echo $count11; ?>],
				 ['12',<?php echo $count12; ?>],
				 
			   ]
			 }]
			});
			
			
			//siswa
			$('.grafiksiswa').highcharts({
			 chart: {
			  type: 'pie',
			  options3d:{
				  enable:true,
				  alpha:0,
				  beta:30
			  },
			  marginTop: 80
			 },
			 credits: {
			  enabled: false
			 }, 
			 tooltip: {
			  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			 },
			 title: {
			  text: 'Siswa SMPN 249'
			 },
			 subtitle: {
			  text: ''
			 },
			 xAxis: {
			  categories: ['JUMLAH SISWA'],
			  labels: {
			   style: {
				fontSize: '10px',
				fontFamily: 'Verdana, sans-serif'
			   }
			  }
			 },
			 legend: {
			  enabled: true
			 },
			 plotOptions: {
			   pie: {
				 allowPointSelect: true,
				 cursor: 'pointer',
				 depth:35,
				 dataLabels: {
				   enabled: false
				 },
				 showInLegend: true
			   }
			 },
			 series: [{
			   'name':'Siswa',
			   'data':[
				 ['Jumlah',<?php echo $countsiswa; ?>]
			
				 
			   ]
			 }]
			});
			</script>


		
							
	</body>
</html>
