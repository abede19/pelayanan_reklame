<header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 148, "stickySetTop": "-130px", "stickyChangeLogo": false}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<img alt="Porto" width="100" height="80" data-sticky-width="70" data-sticky-height="60" data-sticky-top="35" src="<?php echo base_url('template/img/ipr/logo_gowa.jpg')?>">
								</div>
							</div>
							<div class="header-column">
								<div class="header hidden-xs">
								<h2 class="col-md-12 col-sm-12 col-xs-6"><strong>KANTOR PELAYANAN TERPADU</strong></h2>
									
								</div>
							</div>
							<div class="header-column">
								<ul class="header-extra-info hidden-xs">
									<li>
										<div class="feature-box feature-box-style-3">
											<div class="feature-box-icon">
												<i class="fa fa-phone"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">0411-887188 </h4>
												<p><small>Hubungi Kami</small></p>
											</div>
										</div>
									</li>
									<li>
										<div class="feature-box feature-box-style-3">
											<div class="feature-box-icon">
												<i class="fa fa-envelope"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">kpt.gowa@gmail.com</h4>
												<p><small>Kirim Pesan Lewat Email Kami</small></p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="header-container header-nav header-nav-bar header-nav-bar-primary">
						<div class="container">

							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
													<li class="<?php if (isset($beranda)) {
														echo $beranda;
													}?>">
														<a  href="<?php echo base_url('c_user')?>">Beranda</a>
													</li>
													
													<li class="<?php if (isset($perizinan)) {
														echo $perizinan;
													}?>">
														<a  href="<?php echo base_url('C_perizinan')?>">Table Perizinan</a>
													</li>
													<li class="<?php if (isset($pendaftaran)){
														echo $pendaftaran;
													}?>">
													
														<a href="<?php echo base_url('C_Pendaftaran')?>">Pendaftaran</a>
													</li>
													<li class="<?php if (isset($profile)) {
														echo $profile;
													}?>">
														<a href="<?php echo base_url('C_profile')?>">Profile</a>
													</li>
													
												</ul>
								</nav>

							</div>
						</div>
					</div>


				</div>
			</header>