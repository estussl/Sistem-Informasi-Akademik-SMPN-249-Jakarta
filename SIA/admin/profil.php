<?php require("../check.php");
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
				?><!--.breadcrumb-->
				</div>

				<div class="page-content">
					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
                            <div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
                            						
							</div>
							<div class="hr dotted"></div>
                            <?php 
							
							$sql=mysql_query("SELECT * from tbl_foto WHERE id_user='$_SESSION[username]' ") or die(mysql_error());
							while($ph=mysql_fetch_array($sql)) 							
							{?>
							<div>
								<div id="user-profile-1" class="user-profile row-fluid">
									<div class="span3 center">
										<div>
											<span class="profile-picture">
												<a href="ganti-foto.php" data-rel="tooltip" title="Ganti Foto"><img src="../img/
												<?php 
												if($ph['path']==NULL)
												{
													echo "no-image.jpg";
												}
												else
													echo $ph['path']?>" /> </a>
											</span><?php  }?>

											<div class="space-4"></div>
											<?php
											$sql=mysql_query("select * from tbl_admin where id='$_SESSION[username]'") or die(mysql_error());
											
                                            while($r=mysql_fetch_array($sql))
                                            {
                                            ?>
											<div class="width-80 label label-info label-large arrowed-in arrowed-in-right">
												<div class="inline position-relative">
													<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
														<span class="white middle bigger-120"><?php echo $r['nama']; ?></span>
													</a>
                                                    
                                                    </div>
											</div>
										</div>

										<div class="space-6"></div>

										<div class="profile-contact-info">
											<div class="profile-contact-links align-left">
												<a class="btn btn-link" href="#">
													<i class="icon-barcode bigger-125 blue"></i>
													<?php echo $r['id'] ?>
												</a>
                                                
                                                &nbsp
                                                &nbsp
                                                <a class="btn btn-link" href="#">
													<i class="icon-phone bigger-120 green"></i>
													<?php echo $r['tlpn'] ?>
												</a>
                                                
                                                &nbsp
                                                &nbsp
												<a class="btn btn-link" href="mailto:<?php echo $r['email'] ?>">
													<i class="icon-envelope bigger-120 pink"></i>
													<?php echo $r['email'] ?>
												</a>

												
											</div>

											<div class="space-6"></div>

											
										</div>

										<div class="hr hr12 dotted"></div>

										<div class="clearfix">
											<div class="grid2">
												<span class="bigger-175 blue"></span>

												<br />
												
											</div>

											<div class="grid2">
												<span class="bigger-175 blue"></span>

												<br />
												
											</div>
										</div>

										<div class="hr hr16 dotted"></div>
									</div>

									<div class="span9">
										<div class="center">
											<span class="btn btn-app btn-small btn-light no-hover">
												<span class="bigger-150 blue"> P </span>

												<br />
												<span class="smaller-90">  </span>
											</span>

											<span class="btn btn-app btn-small btn-yellow no-hover">
												<span class="bigger-175"> R </span>

												<br />
												<span class="smaller-90">  </span>
											</span>

											<span class="btn btn-app btn-small btn-pink no-hover">
												<span class="bigger-175"> O </span>

												<br />
												<span class="smaller-90">  </span>
											</span>

											<span class="btn btn-app btn-small btn-grey no-hover">
												<span class="bigger-175"> F </span>

												<br />
												<span class="smaller-90">  </span>
											</span>

											<span class="btn btn-app btn-small btn-success no-hover">
												<span class="bigger-175"> I </span>

												<br />
												<span class="smaller-90">  </span>
											</span>

											<span class="btn btn-app btn-small btn-primary no-hover">
												<span class="bigger-175"> L </span>

												<br />
												<span class="smaller-90">  </span>
											</span>
										</div>

										<div class="space-12"></div>

										<div class="profile-user-info profile-user-info-striped">
											<div class="profile-info-row">
												<div class="profile-info-name"> Username </div>

												<div class="profile-info-value">
													<span><?php echo $r['id']; ?></span>
												</div>
											</div>
                                            
                                            <div class="profile-info-row">
												<div class="profile-info-name"> Nama Lengkap </div>

												<div class="profile-info-value">
													<span><?php echo $r['nama']; ?></span>
												</div>
											</div>
                                            
											                                            
                                            <div class="profile-info-row">
												<div class="profile-info-name"> No. Telepon </div>

												<div class="profile-info-value">
													<span><?php echo $r['tlpn']; ?></span>
												</div>
											</div>
                                            
                                            
                                            
										</div>

										<div class="space-20"></div>

										
									</div>
								</div>
							</div>
							<?php 
							}
							?>
							
							<div class="form-actions">
								&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
								
									<a href="javascript:history.back()" <button class="btn btn-info" type="button">
										<i class="icon-caret-left bigger-110"></i>
										Kembali
									</button> </a>

									&nbsp; &nbsp; &nbsp;
									<a href="edit-profil.php" <button class="btn" type="button">
										<i class="icon-edit bigger-110"></i>
										Edit
									</button> </a>
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
