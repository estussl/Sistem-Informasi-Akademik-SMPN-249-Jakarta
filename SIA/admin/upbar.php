<?php
	require("../check-admin.php");
	
	
?>
<div class="container-fluid">
					<a href="index.php" class="brand">
						<small>
							<i class="icon-desktop"></i> Sistem Informasi Akademik - 
							<?php
									$sql = mysql_query("SELECT * FROM tbl_user WHERE username='$_SESSION[username]'");
									$r = mysql_fetch_array($sql);
									if($r['role']=='admin'){
										echo "Administrator";
									}
									elseif($r['role']=='guru'){
										echo "Guru";
									}
									elseif($r['role']=='siswa'){
										echo "Siswa";
									} ?>
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<li class="light-blue" style="float:right">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="user-info">
									<small>Welcome,</small>
									<?php 
										$sql = mysql_query("SELECT * FROM tbl_user WHERE username='$_SESSION[username]'");
										$r = mysql_fetch_array($sql);
										echo $r['nama_admin'];
									?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="profil.php">
										<i class="icon-user"></i>
										Profil
									</a>
								</li>
                                
                                <li>
									<a href="ganti-pw.php">
										<i class="icon-cog"></i>
										Password
									</a>
								</li>

								
								<li class="divider"></li>

								<li>
									<a href="../proses_logout.php" onclick="javascript: return confirm('Anda ingin keluar ?')">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div>