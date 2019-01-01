<?php include('head_dashboard.php'); ?>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<?php include('header_dashboard.php'); ?>

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<?php include ('navigation.php'); ?>
			<!-- end sidebar scrollbar -->
		</div>
		<div hidden class="sidebar-bg"></div>
		<!-- end #sidebar -->
		<!-- begin #sidebar-right -->
		<div hidden id="sidebar-right" class="sidebar sidebar-right">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav m-t-10">
				    <li class="nav-widget">
				        <p>Last 04 Days Stats</p>
				        <div class="pull-left m-b-10 m-t-5">
                            <div class="pull-left p-r-15">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="22" data-fgColor="#00acac" data-bgColor="#242a30" />
                            </div>
                            <div class="pull-left">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="18" data-fgColor="#348fe2" data-bgColor="#242a30" />
                            </div>
                        </div>
				        <div class="pull-left">
                            <div class="pull-left p-r-15">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="11" data-fgColor="#ff5b57" data-bgColor="#242a30" />
                            </div>
                            <div class="pull-left">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="07" data-fgColor="#727cb6" data-bgColor="#242a30" />
                            </div>
                        </div>
				    </li>
				    <li class="nav-widget">
				        <p class="m-b-5">Last Week Stats</p>
				        <div id="sidebar-sparkline-1" class="m-b-12"></div>
				        <p class="m-b-5">Last Months Stats</p>
				        <div id="sidebar-sparkline-2" class="m-b-10"></div>
				        <p class="m-b-5">Last Year Stats</p>
				        <div id="sidebar-sparkline-3" class="m-b-10"></div>
				        
				    </li>
					
				</ul>
				<!-- end sidebar user -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg sidebar-right"></div>
		<!-- end #sidebar-right -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Islamic Events <small></small></h1>
			<div hidden class="alert alert-danger fade show">
			  <span hidden class="close" data-dismiss="alert">×</span>
			  Minimum 100 times every day 
			  <a hidden href="#" class="alert-link">an example link</a>. 
			</div>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-lg-6">
			        <!-- begin panel -->
                  <table class="hlist_tab islamic_cal table table-striped table-condensed table-profile">
					   <thead>
						  <tr>
							 <th>DAY</th>
							 <th>DATE</th>
							 <th>HOLIDAY</th>
						  </tr>
					   </thead>
					   <tbody>
						  <tr class="r0">
							 <td><span class="pc">Wednesday</span><span class="mobile_text">Wed</span></td>
							 <td class="dt_nowrap"><span class="pc">Apr 03, 2019</span><span class="mobile_text">Apr 03</span></td>
							 <td><a href="#">Lailat al Miraj</a></td>
						  </tr>
						  <tr class="r1">
							 <td><span class="pc">Saturday</span><span class="mobile_text">Sat</span></td>
							 <td class="dt_nowrap"><span class="pc">Apr 20, 2019</span><span class="mobile_text">Apr 20</span></td>
							 <td><a href="#">Lailat al Bara'ah</a></td>
						  </tr>
						  <tr class="r0">
							 <td><span class="pc">Monday</span><span class="mobile_text">Mon</span></td>
							 <td class="dt_nowrap"><span class="pc">May 06, 2019</span><span class="mobile_text">May 06</span></td>
							 <td><a href="#">Ramadan (start)</a></td>
						  </tr>
						  <tr class="r1">
							 <td><span class="pc">Friday</span><span class="mobile_text">Fri</span></td>
							 <td class="dt_nowrap"><span class="pc">May 31, 2019</span><span class="mobile_text">May 31</span></td>
							 <td><a href="#">Laylat al Qadr</a></td>
						  </tr>
						  <tr class="r0">
							 <td><span class="pc">Tuesday</span><span class="mobile_text">Tue</span></td>
							 <td class="dt_nowrap"><span class="pc">Jun 04, 2019</span><span class="mobile_text">Jun 04</span></td>
							 <td><a href="#">Eid-al-Fitr (End of Ramadan)</a></td>
						  </tr>
						  <tr class="r1">
							 <td><span class="pc">Saturday</span><span class="mobile_text">Sat</span></td>
							 <td class="dt_nowrap"><span class="pc">Aug 10, 2019</span><span class="mobile_text">Aug 10</span></td>
							 <td><a href="#">Waqf al Arafa - Hajj</a></td>
						  </tr>
						  <tr class="r0">
							 <td><span class="pc">Sunday</span><span class="mobile_text">Sun</span></td>
							 <td class="dt_nowrap"><span class="pc">Aug 11, 2019</span><span class="mobile_text">Aug 11</span></td>
							 <td><a href="#">Eid-al-Adha</a></td>
						  </tr>
						  <tr class="r1">
							 <td><span class="pc">Saturday</span><span class="mobile_text">Sat</span></td>
							 <td class="dt_nowrap"><span class="pc">Aug 31, 2019</span><span class="mobile_text">Aug 31</span></td>
							 <td><a href="#">Hijra - Islamic New Year</a></td>
						  </tr>
						  <tr class="r0">
							 <td><span class="pc">Monday</span><span class="mobile_text">Mon</span></td>
							 <td class="dt_nowrap"><span class="pc">Sep 09, 2019</span><span class="mobile_text">Sep 09</span></td>
							 <td><a href="#">Day of Ashura / Muharram</a></td>
						  </tr>
						  <tr class="r1">
							 <td><span class="pc">Saturday</span><span class="mobile_text">Sat</span></td>
							 <td class="dt_nowrap"><span class="pc">Nov 09, 2019</span><span class="mobile_text">Nov 09</span></td>
							 <td><a href="#">Milad un Nabi</a></td>
						  </tr>
						  <tr class="r0">
							 <td><span class="pc">Thursday</span><span class="mobile_text">Thu</span></td>
							 <td class="dt_nowrap"><span class="pc">Nov 14, 2019</span><span class="mobile_text">Nov 14</span></td>
							 <td><a href="#">Milad un Nabi (Shia)</a></td>
						  </tr>
					   </tbody>
					</table>
                        <!-- begin panel-heading -->
                     
                      
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
 <div class="col-lg-6">
			    	<!-- begin #accordion -->
			    	<div id="accordion" class="card-accordion">
						<!-- begin card -->
						<div class="card">
							<div class="card-header bg-black text-white pointer-cursor" data-toggle="collapse" data-target="#collapseOne">
								Defination
							</div>
							<div id="collapseOne" class="collapse show" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<!-- end card -->
						
						<!-- begin card -->
						<div class="card">
							<div class="card-header bg-black text-white pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseThree">
								looses
							</div>
							<div id="collapseThree" class="collapse" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<!-- end card -->
					
						
						
					</div>
					<!-- end #accordion -->
			    </div>
            </div>
            <!-- end row -->
			<!-- begin panel -->
		
			<!-- end panel -->
		</div>
		<!-- end #content -->
<?php include('footer_dashboard.php')?>