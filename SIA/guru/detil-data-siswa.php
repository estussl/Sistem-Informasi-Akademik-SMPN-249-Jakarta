<?php 
require("../check.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Sistem Informasi Akademik</title>
		<?php require("favicon.php");
		?>

		<meta name="description" content="" />
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
				?><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<!--#sidebar-shortcuts-->
            
				<?php require("sidebar.php");
				?>
				<!--/.nav-list-->

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

				<div class="page-content">
					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
							<div class="page-header ">
						<h1>
							Detail
							<small>
								<i class="icon-double-angle-right"></i>
								Siswa
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
							<?php
							

							$_GET['id'];
							$sql=mysql_query("select * from tbl_siswa where NISN='$_GET[id]'") or die(mysql_error());
							while($r=mysql_fetch_array($sql))
							{
							?>
                            
							
								<div id="user-profile-2" class="user-profile row-fluid">
									
										<?php
										$sql=mysql_query("SELECT * from tbl_foto WHERE id_user='$_GET[id]' ");
										while($ph=mysql_fetch_array($sql))
										{ ?>

										<div class="tab-content no-border padding-24">
											<div id="home" class="tab-pane in active">
												<div class="row-fluid">
													<div class="span3 center">
														<span class="profile-picture">
															<img alt="Avatar" src="../img/<?php 
																if($ph['path']==NULL)
																{
																	echo "no-image.jpg";
																}
																else
																	echo $ph['path']?>"/>
														</span>
										<?php }?>
														<div class="space space-4"></div>

														<a href="" class="btn btn-small btn-block btn-success">
															<i class="icon-key bigger-110"></i>
															<?php echo $r['NISN'] ?>
														</a>

														<a href="mailto:<?php echo $r['email'] ?>" class="btn btn-small btn-block btn-primary">
															<i class="icon-envelope-alt"></i>
															Send a message
														</a>
													</div><!--/span-->

													<div class="span9">
														<h4 class="blue">
															<span class="middle"><?php echo $r['nama'] ?></span>
														</h4>

														<div class="profile-user-info">
															<div class="profile-info-row">
																<div class="profile-info-name"> Username </div>

																<div class="profile-info-value">
																	<span><?php echo $r['NISN'] ?></span>
																</div>
															</div>
															
															<div class="profile-info-row">
																<div class="profile-info-name"> Nama Lengkap </div>

																<div class="profile-info-value">
																	<span><?php echo $r['nama'] ?></span>
																</div>
															</div>
															
															<div class="profile-info-row">
																<div class="profile-info-name"> TTL </div>

																<div class="profile-info-value">
																	<i class="icon-calendar light-orange bigger-110"></i>
																	<span><?php $tempat=$r['tempat'];
																			$tanggal=$r['tgl'];
																			echo $tempat.", ".date('d F Y', strtotime($tanggal));  ?></span>
																</div>
															</div>

															<div class="profile-info-row">
																<div class="profile-info-name"> Umur </div>

																<div class="profile-info-value">
																	<span><?php // Tanggal Lahir
																	$birthday = $r['tgl'];
																	
																	// Convert Ke Date Time
																	$biday = new DateTime($birthday);
																	$today = new DateTime();
																	
																	$diff = $today->diff($biday);
																	
																	// Display
																	echo $diff->y ." Tahun"; ?></span>
																</div>
															</div>
															
															<div class="profile-info-row">
																<div class="profile-info-name"> Nama Ayah </div>

																<div class="profile-info-value">
																	<span><?php echo $r['nama_ayah'] ?></span>
																</div>
															</div>
															
															<div class="profile-info-row">
																<div class="profile-info-name"> Nama Ibu </div>

																<div class="profile-info-value">
																	<span><?php echo $r['nama_ibu'] ?></span>
																</div>
															</div>
															
															<div class="profile-info-row">
																<div class="profile-info-name"> Alamat </div>

																<div class="profile-info-value">
																<i class="icon-map-marker bigger-110"></i>
																	<span> <?php echo $r['alamat'] ?></span>
																</div>
															</div>
															
															<div class="profile-info-row">
																<div class="profile-info-name"> Telepon </div>

																<div class="profile-info-value">
																	<span><?php echo $r['tlpn'] ?></span>
																</div>
															</div>
															
															<div class="profile-info-row">
																<div class="profile-info-name"> Email </div>

																<div class="profile-info-value">
																	<span><?php echo $r['email'] ?></span>
																</div>
															</div>
															
															<div class="profile-info-row">
																<div class="profile-info-name"> Kelas </div>

																<div class="profile-info-value">
																	<span><?php echo $r['kelas'] ?></span>
																</div>
															</div>
															
														</div>

														
														</div>
													</div><!--/span-->
												</div><!--/row-fluid-->

												<div class="space-20"></div>

												<!--#home-->

											
								<?php }?>
									
								
									<a href="javascript:history.back()" <div class="span-12"> <button class="btn btn-info" type="button">
										<i class="icon-caret-left bigger-110"></i>
										Kembali
									</button>
									</div> </a>
									
									
									
								</div>
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
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--ace scripts-->

		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->
	</body>
</html>
