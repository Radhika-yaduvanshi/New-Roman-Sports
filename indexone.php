<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
require_once('../config/connection.php');
?>


<body>

	
	<div class="page-wrapper">
		
		<!-- start page container -->
		<div class="page-container">

			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-blue">
									<span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Orders</span>
										<span class="info-box-number">450</span>
										<div class="progress">
											<div class="progress-bar width-60"></div>
										</div>
										<span class="progress-description">
											60% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-orange">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">card_travel</i></span>
									<div class="info-box-content">
										<span class="info-box-text">New Booking</span>
										<span class="info-box-number">155</span>
										<div class="progress">
											<div class="progress-bar width-40"></div>
										</div>
										<span class="progress-description">
											40% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-purple">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">phone_in_talk</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Inquiry</span>
										<span class="info-box-number">52</span>
										<div class="progress">
											<div class="progress-bar width-80"></div>
										</div>
										<span class="progress-description">
											80% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-success">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">monetization_on</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Earning</span>
										<span class="info-box-number">13,921</span><span>$</span>
										<div class="progress">
											<div class="progress-bar width-60"></div>
										</div>
										<span class="progress-description">
											60% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<!-- end widget -->
					<!-- chart start -->
					
					<!-- Chart end -->
					<div class="row">
						<div class="col-md-4 col-sm-12 col-12">
							
							
						</div>
						
						
					</div>
					<!-- start Payment Details -->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>Booking Details</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table5">
												<thead>
													<tr>
														<th>o_id</th>
														<th>c_id</th>
														<th>o_date</th>
														<th>o_status</th>
													</tr>
												</thead>
												<tbody>

												<?php
												$sql ="SELECT * from order_master o join customer c where o.c_id=c.c_id  and o.o_date='".date('y_m_d')."' ";
												$result = mysqli_query($conn,$sql);
												while($row=mysqli_fetch_array($result))
												{
													$uid=$row['o_id'];
													$email=$row['c_email'];
												?>

													<tr>
														<td> <?php echo $row ['o_id']?> </td>
														<td> <?php echo $row ['c_id']?> </td>
														<td> <?php echo $row ['o_date']?> </td>
														<td> <?php echo $row ['o_status']?> </td>
														<td> <a href="accept.php?id=<?php echo $uid;?>&email=<?php echo $email;?>">Accept</a> <a href="reject.php?id=<?php echo $uid;?>&email=<?php echo $email;?>">Reject</a></td>
													</tr>
													
												<?php
												}
												?>

												</tbody>

											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end Payment Details -->
					<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12 col-12">
							<div class="card-box ">
								<div class="card-head">
									<header>Guest Review</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="row">
										<ul class="docListWindow small-slimscroll-style">
											<li>
												<div class="row">
													<div class="col-md-8 col-sm-8">
														<div class="prog-avatar">
															<img src="assets/img/user/user1.jpg" alt="" width="40"
																height="40">
														</div>
														<div class="details">
															<div class="title">
																<a href="#">Rajesh Mishra</a>
																<p class="rating-text">Awesome!!! Highly recommend</p>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 rating-style">
														<i class="material-icons">star</i>
														<i class="material-icons">star</i>
														<i class="material-icons">star</i>
														<i class="material-icons">star_half</i>
														<i class="material-icons">star_border</i>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-md-8 col-sm-8">
														<div class="prog-avatar">
															<img src="assets/img/user/user2.jpg" alt="" width="40"
																height="40">
														</div>
														<div class="details">
															<div class="title">
																<a href="#">Sarah Smith</a>
																<p class="rating-text">Very bad service :(</p>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 rating-style">
														<i class="material-icons">star</i>
														<i class="material-icons">star_half</i>
														<i class="material-icons">star_border</i>
														<i class="material-icons">star_border</i>
														<i class="material-icons">star_border</i>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-md-8 col-sm-8">
														<div class="prog-avatar">
															<img src="assets/img/user/user3.jpg" alt="" width="40"
																height="40">
														</div>
														<div class="details">
															<div class="title">
																<a href="#">John Simensh</a>
																<p class="rating-text"> Staff was good nd i'll come
																	again</p>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 rating-style">
														<i class="material-icons">star</i>
														<i class="material-icons">star</i>
														<i class="material-icons">star</i>
														<i class="material-icons">star</i>
														<i class="material-icons">star</i>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-md-8 col-sm-8">
														<div class="prog-avatar">
															<img src="assets/img/user/user4.jpg" alt="" width="40"
																height="40">
														</div>
														<div class="details">
															<div class="title">
																<a href="#">Priya Sarma</a>
																<p class="rating-text">The price I received was good
																	value.</p>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 rating-style">
														<i class="material-icons">star</i>
														<i class="material-icons">star</i>
														<i class="material-icons">star</i>
														<i class="material-icons">star</i>
														<i class="material-icons">star_half</i>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-md-8 col-sm-8">
														<div class="prog-avatar">
															<img src="assets/img/user/user5.jpg" alt="" width="40"
																height="40">
														</div>
														<div class="details">
															<div class="title">
																<a href="#">Serlin Ponting</a>
																<p class="rating-text">Not Satisfy !!!1</p>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 rating-style">
														<i class="material-icons">star</i>
														<i class="material-icons">star_border</i>
														<i class="material-icons">star_border</i>
														<i class="material-icons">star_border</i>
														<i class="material-icons">star_border</i>
													</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-md-8 col-sm-8">
														<div class="prog-avatar">
															<img src="assets/img/user/user6.jpg" alt="" width="40"
																height="40">
														</div>
														<div class="details">
															<div class="title">
																<a href="#">Priyank Jain</a>
																<p class="rating-text">Good....</p>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-4 rating-style">
														<i class="material-icons">star</i>
														<i class="material-icons">star</i>
														<i class="material-icons">star</i>
														<i class="material-icons">star_half</i>
														<i class="material-icons">star_border</i>
													</div>
												</div>
											</li>
										</ul>
										<div class="full-width text-center p-t-10">
											<a href="#" class="btn purple btn-outline btn-circle margin-0">View All</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-12">
							
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<div class="chat-sidebar-container" data-close-on-body-click="false">
				<div class="chat-sidebar">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab">Theme
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-bs-toggle="tab"> Chat
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> Settings
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel"
							id="quick_sidebar_tab_1">
							<div class="slimscroll-style">
								<div class="theme-light-dark">
									<h6>Sidebar Theme</h6>
									<button type="button" data-theme="white"
										class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light
										Sidebar</button>
									<button type="button" data-theme="dark"
										class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark
										Sidebar</button>
								</div>
								<div class="theme-light-dark">
									<h6>Sidebar Color</h6>
									<ul class="list-unstyled">
										<li class="complete">
											<div class="theme-color sidebar-theme">
												<a href="#" data-theme="white"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="dark"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="blue"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="indigo"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="cyan"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="green"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="red"><span class="head"></span><span
														class="cont"></span></a>
											</div>
										</li>
									</ul>
									<h6>Header Brand color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color logo-theme">
												<a href="#" data-theme="logo-white"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-dark"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-blue"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-indigo"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-cyan"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-green"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-red"><span class="head"></span><span
														class="cont"></span></a>
											</div>
										</li>
									</ul>
									<h6>Header color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color header-theme">
												<a href="#" data-theme="header-white"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-dark"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-blue"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-indigo"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-cyan"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-green"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-red"><span class="head"></span><span
														class="cont"></span></a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Start Doctor Chat -->
						<div class="tab-pane chat-sidebar-chat animated slideInRight" id="quick_sidebar_tab_2">
							<div class="chat-sidebar-list">
								<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
									data-wrapper-class="chat-sidebar-list">
									<div class="chat-header">
										<h5 class="list-heading">Online</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media"><img class="media-object" src="assets/img/user/user3.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">John Deo</h5>
												<div class="media-heading-sub">Spine Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">5</span>
											</div> <img class="media-object" src="assets/img/user/user1.jpg" width="35"
												height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Rajesh</h5>
												<div class="media-heading-sub">Director</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user5.jpg"
												width="35" height="35" alt="...">
											<i class="away dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jacob Ryan</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">8</span>
											</div> <img class="media-object" src="assets/img/user/user4.jpg" width="35"
												height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Kehn Anderson</h5>
												<div class="media-heading-sub">CEO</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user2.jpg"
												width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Sarah Smith</h5>
												<div class="media-heading-sub">Anaesthetics</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user7.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Vlad Cardella</h5>
												<div class="media-heading-sub">Cardiologist</div>
											</div>
										</li>
									</ul>
									<div class="chat-header">
										<h5 class="list-heading">Offline</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">4</span>
											</div> <img class="media-object" src="assets/img/user/user6.jpg" width="35"
												height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jennifer Maklen</h5>
												<div class="media-heading-sub">Nurse</div>
												<div class="media-heading-small">Last seen 01:20 AM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user8.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Lina Smith</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
												<div class="media-heading-small">Last seen 11:14 PM</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">9</span>
											</div> <img class="media-object" src="assets/img/user/user9.jpg" width="35"
												height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jeff Adam</h5>
												<div class="media-heading-sub">Compounder</div>
												<div class="media-heading-small">Last seen 3:31 PM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user10.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Anjelina Cardella</h5>
												<div class="media-heading-sub">Physiotherapist</div>
												<div class="media-heading-small">Last seen 7:45 PM</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Doctor Chat -->
						<!-- Start Setting Panel -->
						<div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_3">
							<div class="chat-sidebar-settings-list slimscroll-style">
								<div class="chat-header">
									<h5 class="list-heading">Layout Settings</h5>
								</div>
								<div class="chatpane inner-content ">
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Sidebar Position</div>
											<div class="setting-set">
												<select
													class="sidebar-pos-option form-control input-inline input-sm input-small ">
													<option value="left" selected="selected">Left</option>
													<option value="right">Right</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Header</div>
											<div class="setting-set">
												<select
													class="page-header-option form-control input-inline input-sm input-small ">
													<option value="fixed" selected="selected">Fixed</option>
													<option value="default">Default</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Sidebar Menu </div>
											<div class="setting-set">
												<select
													class="sidebar-menu-option form-control input-inline input-sm input-small ">
													<option value="accordion" selected="selected">Accordion</option>
													<option value="hover">Hover</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Footer</div>
											<div class="setting-set">
												<select
													class="page-footer-option form-control input-inline input-sm input-small ">
													<option value="fixed">Fixed</option>
													<option value="default" selected="selected">Default</option>
												</select>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">Account Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Notifications</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-1">
														<input type="checkbox" id="switch-1" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Show Online</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-7">
														<input type="checkbox" id="switch-7" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Status</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-2">
														<input type="checkbox" id="switch-2" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">2 Steps Verification</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-3">
														<input type="checkbox" id="switch-3" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">General Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Location</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-4">
														<input type="checkbox" id="switch-4" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Save Histry</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-5">
														<input type="checkbox" id="switch-5" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Auto Updates</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-6">
														<input type="checkbox" id="switch-6" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
	
	</div>
	
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/spice/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 08:34:27 GMT -->
</html>
			
<?php
include('includes/footer.php');
?>    