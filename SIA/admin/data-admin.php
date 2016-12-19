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
				?>
                <!--.breadcrumb-->

				
				</div>

				<div class="page-content">
					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
							
							<?php 
                            $per_page=10;
							$pages_query=mysql_query("SELECT COUNT('id') FROM tbl_admin");
							$pages=ceil(mysql_result($pages_query,0)/$per_page);
                            
							if (!isset($_GET['page']))
							{
								echo "<script> window.location ='data-admin.php?page=1'</script>";
															}
							else
							{
								$page=$_GET['page'];
							}
							
							$start=(($page-1)*$per_page);
							?>
							
							
							<div class="page-header ">
						<h1>
							Pengaturan
							<small>
								<i class="icon-double-angle-right"></i>
								Administrator
							</small>
						</h1>
					</div><!--/.page-header-->
                            
                            
                          <div class="row-fluid">
							<div class="table-header">
									Daftar Admin
							  </div>

							  <table id="sample-table-2" class="table table-striped table-bordered table-hover">
								  <thead>
									  <tr>
										  <th>Username</th>
										  <th>Nama</th>
										  <th>Telepon</th>
                                          <th>Email</th>
                                          								  								  
										  <th> <a href="input-data-admin.php"> <i class="icon-edit"></i> Tambah</a></th> 
                                          
									  </tr>
								  </thead>

								  <tbody>
									  <?php
							$sql=mysql_query("select * from tbl_admin ORDER BY id LIMIT $start,$per_page ") or die(mysql_error());
							while($r=mysql_fetch_array($sql))
							{ 
							?>
                                      <tr>
										  <td><?php echo $r['id']; ?></td>
										  <td><?php echo $r['nama']; ?></td>	
                                          <td><?php echo $r['tlpn']; ?></td>
                                          <td><?php echo $r['email']; ?></td>
                                          								  
										 
                                          <td class="td-actions">
											  <div class="hidden-phone visible-desktop action-buttons">
												  <a class="red" data-rel="tooltip" title="Delete" onclick="javascript: return confirm('Anda yakin hapus ?')" href="proses/delete-admin.php?id=<?php echo $r['id']?>">
													  <i class="icon-trash bigger-130"></i>
												  </a>
											  </div>

											  <div class="hidden-desktop visible-phone">
												  <div class="inline position-relative">
													  <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
														  <i class="icon-caret-down icon-only bigger-120"></i>
													  </button>

													  <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
														  
														  <li>
															  <a onclick="javascript: return confirm('Anda yakin hapus ?')" href="proses/delete-admin.php?id=<?php echo $r['id']?>" class="tooltip-error" data-rel="tooltip" title="Delete">
																  <span class="red">
																	  <i class="icon-trash bigger-120"></i>
																  </span>
															  </a>
														  </li>
													  </ul>
												  </div>
											  </div>
										  </td>
									  </tr>
							<?php } ?>
								  </tbody>
							  </table>
							</div>
							<div class="modal-footer">
								<div class="pagination pull-right no-margin">
								<ul>
									<li class="prev disabled">
												<a><?php echo "Current Page: $page"; ?>								</a>
									</li>
								<?php
								for($number=1;$number<=$pages;$number++)
								{
									//echo '<a href="?page='.$number.'"></a>';
								?>
								
									<li class"active">
									<?php
									echo	"<a href='?page=$number'>$number</a>";
									}?>
									</li>		
								</ul>
								</div>
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
