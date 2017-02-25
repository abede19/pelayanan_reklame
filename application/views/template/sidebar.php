<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}' >
				<div class="header-body" style="background-image: url('template/img/parallax-transparent.jpg');">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<img alt="Porto" width="100" height="80" data-sticky-width="70" data-sticky-height="60" data-sticky-top="35" src="<?php echo base_url('template/img/ipr/logo_gowa.jpg')?>">
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-search hidden-xs">
										<form id="searchForm" action="page-search-results.html" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="hidden-xs">
												<a href="about-us.html"><i class="fa fa-angle-right"></i> About Us</a>
											</li>
											<li class="hidden-xs">
												<a href="contact-us.html"><i class="fa fa-angle-right"></i> Contact Us</a>
											</li>
											<li>
												<span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
											</li>
										</ul>
									</nav>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="<?php if (isset($active_home)) {
														echo $active_home;
													}?>">
														<a  href="<?php echo base_url('c_homepage')?>">Beranda</a>
													</li>
													
													<li class="<?php if (isset($active_gallery)) {
														echo $active_gallery;
													}?>">
														<a  href="<?php echo base_url('c_gallery')?>">Gallery</a>
													</li>
													<li class="<?php if (isset($active_pelayanan_reklame)) {
														echo $active_pelayanan_reklame;
													}?>">
														<a href="<?php echo base_url('c_pelayanan_reklame')?>">Pelayanan Reklame</a>
													</li>
													<li class="<?php if (isset($active_panduan)) {
														echo $active_panduan;
													}?>">
														<a href="<?php echo base_url('c_panduan')?>">Panduan</a>
													</li>
													<li class="<?php if (isset($active_tentang_kami)) {
														echo $active_tentang_kami;
													}?>">
														<a href="<?php echo base_url()."c_tentang_kami"?>">Tentang Kami</a>
													</li>
														
													<li class="<?php if (isset($active_sign_in)) {
														echo $active_sign_in;
													}?>">
														<a  href="<?php echo base_url('c_login')?>">
															<i class="fa fa-user"></i> Sign In
														</a>
													</li>	
													
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
