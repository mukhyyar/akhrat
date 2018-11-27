<?php include('head_dashboard.php'); ?>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<?php include('header_dashboard.php'); ?>

		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<?php include ('navigation.php'); ?>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content content-full-width">
			<!-- begin profile -->
			<div class="profile">
				<div class="profile-header">
					<!-- BEGIN profile-header-cover -->
					<div class="profile-header-cover"></div>
					<!-- END profile-header-cover -->
					<!-- BEGIN profile-header-content -->
					<div class="profile-header-content">
						<!-- BEGIN profile-header-img -->
						<div class="profile-header-img">
							<img src="../assets/img/user/user-13.jpg" alt="">
						</div>
						<!-- END profile-header-img -->
						<!-- BEGIN profile-header-info -->
						<div class="profile-header-info">
							<h4 class="m-t-10 m-b-5">Mukhyyar</h4>
							<p class="m-b-10">Subscriber</p>
							<span class="btn btn-xs btn-yellow">03 Months Trail</span>
						</div>
						<!-- END profile-header-info -->
					</div>
					<!-- END profile-header-content -->
					<!-- BEGIN profile-header-tab -->
					<ul class="profile-header-tab nav nav-tabs">
						<li class="nav-item"><a href="#profile-dashboard" class="nav-link active" data-toggle="tab">Dashboard</a></li>
						<li class="nav-item"><a href="#profile-post" class="nav-link" data-toggle="tab">Timeline</a></li>
						<li class="nav-item"><a href="#profile-about" class="nav-link" data-toggle="tab">ABOUT</a></li>
						
					</ul>
					<!-- END profile-header-tab -->
				</div>
			</div>
			<!-- end profile -->
			<!-- begin profile-content -->
            <div class="profile-content">
            	<!-- begin tab-content -->
            	<div class="tab-content p-0">
            		<!-- begin #profile-dashboard tab -->
            		<div class="tab-pane fade show active" id="profile-dashboard">
					<!-- begin row -->
						<div class="row">
							<!-- begin col-3 -->
							<div class="col-lg-3 col-md-6">
								<div class="widget widget-stats bg-gradient-green">
									<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
									<div class="stats-content">
										<div class="stats-title">TODAY'S VISITS</div>
										<div class="stats-number">7,842,900</div>
										<div class="stats-progress progress">
											<div class="progress-bar" style="width: 70.1%;"></div>
										</div>
										<div class="stats-desc">Better than last week (70.1%)</div>
									</div>
								</div>
							</div>
							<!-- end col-3 -->
							<!-- begin col-3 -->
							<div class="col-lg-3 col-md-6">
								<div class="widget widget-stats bg-gradient-blue">
									<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
									<div class="stats-content">
										<div class="stats-title">TODAY'S PROFIT</div>
										<div class="stats-number">180,200</div>
										<div class="stats-progress progress">
											<div class="progress-bar" style="width: 40.5%;"></div>
										</div>
										<div class="stats-desc">Better than last week (40.5%)</div>
									</div>
								</div>
							</div>
							<!-- end col-3 -->
							<!-- begin col-3 -->
							<div class="col-lg-3 col-md-6">
								<div class="widget widget-stats bg-gradient-purple">
									<div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
									<div class="stats-content">
										<div class="stats-title">NEW ORDERS</div>
										<div class="stats-number">38,900</div>
										<div class="stats-progress progress">
											<div class="progress-bar" style="width: 76.3%;"></div>
										</div>
										<div class="stats-desc">Better than last week (76.3%)</div>
									</div>
								</div>
							</div>
							<!-- end col-3 -->
							<!-- begin col-3 -->
							<div class="col-lg-3 col-md-6">
								<div class="widget widget-stats bg-gradient-black">
									<div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
									<div class="stats-content">
										<div class="stats-title">NEW COMMENTS</div>
										<div class="stats-number">3,988</div>
										<div class="stats-progress progress">
											<div class="progress-bar" style="width: 54.9%;"></div>
										</div>
										<div class="stats-desc">Better than last week (54.9%)</div>
									</div>
								</div>
							</div>
							<!-- end col-3 -->
						</div>
						<!-- end row -->
			
					</div>
            		<!-- begin #profile-post tab -->
            		<div class="tab-pane fade show " id="profile-post">
						<!-- begin timeline -->
						<ul class="timeline">
							<li>
								<!-- begin timeline-time -->
								<div class="timeline-time">
									<span class="date">today</span>
									<span class="time">04:20</span>
								</div>
								<!-- end timeline-time -->
								<!-- begin timeline-icon -->
								<div class="timeline-icon">
									<a href="javascript:;">&nbsp;</a>
								</div>
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body">
									<div class="timeline-header">
										<span class="userimage"><img src="../assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username"><a href="javascript:;">Mukhyyar</a> <small></small></span>
										<span class="pull-right text-muted">18 Views</span>
									</div>
									<div class="timeline-content">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt luctus.
											Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
										</p>
									</div>
									<div class="timeline-likes">
										<div class="stats-right">
											<span class="stats-text">259 Shares</span>
											<span class="stats-text">21 Comments</span>
										</div> 
										<div class="stats">
											<span class="fa-stack fa-fw stats-icon">
											  <i class="fa fa-circle fa-stack-2x text-danger"></i>
											  <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
											</span>
											<span class="fa-stack fa-fw stats-icon">
											  <i class="fa fa-circle fa-stack-2x text-primary"></i>
											  <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
											</span>
											<span class="stats-total">4.3k</span>
										</div>
									</div>
									<div class="timeline-footer">
										<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
										<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
										<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
									</div>
									<div class="timeline-comment-box">
										<div class="user"><img src="../assets/img/user/user-12.jpg" /></div>
										<div class="input">
											<form action="">
												<div class="input-group">
													<input type="text" class="form-control rounded-corner" placeholder="Write a comment..." />
													<span class="input-group-btn p-l-10">
														<button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
													</span>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!-- end timeline-body -->
							</li>
							<li>
								<!-- begin timeline-time -->
								<div class="timeline-time">
									<span class="date">yesterday</span>
									<span class="time">20:17</span>
								</div>
								<!-- end timeline-time -->
								<!-- begin timeline-icon -->
								<div class="timeline-icon">
									<a href="javascript:;">&nbsp;</a>
								</div>
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body">
									<div class="timeline-header">
										<span class="userimage"><img src="../assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Mukhyyar</span>
										<span class="pull-right text-muted">82 Views</span>
									</div>
									<div class="timeline-content">
										<p>Location: United States</p>
										<div id="google-map" class="height-sm m-b-10"></div>
									</div>
									<div class="timeline-footer">
										<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
										<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
										<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
									</div>
								</div>
								<!-- end timeline-body -->
							</li>
							<li>
								<!-- begin timeline-time -->
								<div class="timeline-time">
									<span class="date">24 February 2014</span>
									<span class="time">08:17</span>
								</div>
								<!-- end timeline-time -->
								<!-- begin timeline-icon -->
								<div class="timeline-icon">
									<a href="javascript:;">&nbsp;</a>
								</div>
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body">
									<div class="timeline-header">
										<span class="userimage"><img src="../assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Mukhyyar</span>
										<span class="pull-right text-muted">1,282 Views</span>
									</div>
									<div class="timeline-content">
										<p class="lead">
											<i class="fa fa-quote-left fa-fw pull-left"></i>
											Quisque sed varius nisl. Nulla facilisi. Phasellus consequat sapien sit amet nibh molestie placerat. Donec nulla quam, ullamcorper ut velit vitae, lobortis condimentum magna. Suspendisse mollis in sem vel mollis.
											<i class="fa fa-quote-right fa-fw pull-right"></i>
										</p>
									</div>
									<div class="timeline-footer">
										<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
										<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
										<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
									</div>
								</div>
								<!-- end timeline-body -->
							</li>
							<li>
								<!-- begin timeline-time -->
								<div class="timeline-time">
									<span class="date">10 January 2014</span>
									<span class="time">20:43</span>
								</div>
								<!-- end timeline-time -->
								<!-- begin timeline-icon -->
								<div class="timeline-icon">
									<a href="javascript:;">&nbsp;</a>
								</div>
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body">
									<div class="timeline-header">
										<span class="userimage"><img src="../assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Mukhyyar</span>
										<span class="pull-right text-muted">1,021,282 Views</span>
									</div>
									<div class="timeline-content">
										<h4 class="template-title">
											<i class="fa fa-map-marker-alt text-danger fa-fw"></i>
											795 Folsom Ave, Suite 600 San Francisco, CA 94107
										</h4>
										<p>In hac habitasse platea dictumst. Pellentesque bibendum id sem nec faucibus. Maecenas molestie, augue vel accumsan rutrum, massa mi rutrum odio, id luctus mauris nibh ut leo.</p>
										<p class="m-t-20">
											<img src="../assets/img/gallery/gallery-5.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
										<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
										<a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
									</div>
								</div>
								<!-- end timeline-body -->
							</li>
							<li>
								<!-- begin timeline-icon -->
								<div class="timeline-icon">
									<a href="javascript:;">&nbsp;</a>
								</div>
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body">
									Loading...
								</div>
								<!-- begin timeline-body -->
							</li>
						</ul>
						<!-- end timeline -->
            		</div>
            		<!-- end #profile-post tab -->
            		<!-- begin #profile-about tab -->
            		<div class="tab-pane fade in" id="profile-about">
						<!-- begin table -->
						<div class="table-responsive">
							<table class="table table-profile">
								<thead>
									<tr>
										<th></th>
										<th>
											<h4>Mukhyyar <small>Lorraine Stokes</small></h4>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr class="highlight">
										<td class="field">Mood</td>
										<td><a href="javascript:;">Add Mood Message</a></td>
									</tr>
									<tr class="divider">
										<td colspan="2"></td>
									</tr>
									<tr>
										<td class="field">Mobile</td>
										<td><i class="fa fa-mobile fa-lg m-r-5"></i> +1-(847)- 367-8924 <a href="javascript:;" class="m-l-5">Edit</a></td>
									</tr>
									<tr>
										<td class="field">Home</td>
										<td><a href="javascript:;">Add Number</a></td>
									</tr>
									<tr>
										<td class="field">Office</td>
										<td><a href="javascript:;">Add Number</a></td>
									</tr>
									<tr class="divider">
										<td colspan="2"></td>
									</tr>
									<tr class="highlight">
										<td class="field">About Me</td>
										<td><a href="javascript:;">Add Description</a></td>
									</tr>
									<tr class="divider">
										<td colspan="2"></td>
									</tr>
									<tr>
										<td class="field">Country/Region</td>
										<td>
											<select class="form-control input-inline input-xs" name="region">
												<option value="US" selected>United State</option>
												<option value="AF">Afghanistan</option>
												<option value="AL">Albania</option>
												<option value="DZ">Algeria</option>
												<option value="AS">American Samoa</option>
												<option value="AD">Andorra</option>
												<option value="AO">Angola</option>
												<option value="AI">Anguilla</option>
												<option value="AQ">Antarctica</option>
												<option value="AG">Antigua and Barbuda</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="field">City</td>
										<td>Los Angeles</td>
									</tr>
									<tr>
										<td class="field">State</td>
										<td><a href="javascript:;">Add State</a></td>
									</tr>
									<tr>
										<td class="field">Website</td>
										<td><a href="javascript:;">Add Webpage</a></td>
									</tr>
									<tr>
										<td class="field">Gender</td>
										<td>
											<select class="form-control input-inline input-xs" name="gender">
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="field">Birthdate</td>
										<td>
											<select class="form-control input-inline input-xs" name="day">
												<option value="04" selected>04</option>
											</select>
											-
											<select class="form-control input-inline input-xs" name="month">
												<option value="11" selected>11</option>
											</select>
											-
											<select class="form-control input-inline input-xs" name="year">
												<option value="1989" selected>1989</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class="field">Language</td>
										<td>
											<select class="form-control input-inline input-xs" name="language">
												<option value="" selected>English</option>
											</select>
										</td>
									</tr>
									<tr class="divider">
										<td colspan="2"></td>
									</tr>
									<tr class="highlight">
										<td class="field">&nbsp;</td>
										<td class="p-t-10 p-b-10">
											<button type="submit" class="btn btn-primary width-150">Update</button>
											<button type="submit" class="btn btn-white btn-white-without-border width-150 m-l-5">Cancel</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- end table -->
					</div>
            		<!-- end #profile-about tab -->
            		
				</div>
            	<!-- end tab-content -->
            </div>
			<!-- end profile-content -->
		</div>
		<!-- end #content -->
		
       		<?php include('footer_dashboard.php')?>