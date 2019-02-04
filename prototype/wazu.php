<?php include('head_dashboard.php'); ?>
<style>
g.nv-x.nv-axis.nvd3-svg, g.nv-y.nv-axis.nvd3-svg, div#nv-bar-chart svg text {
    display: none;
}

div#nv-bar-chart svg {
    left: -36px;
    position: absolute;
}


</style>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-two-sidebar">
		<!-- begin #header -->
		<?php include('header_dashboard.php'); ?>

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<?php include ('navigation.php'); ?>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		<!-- begin #sidebar-right -->
		<div  id="sidebar-right" class="sidebar sidebar-right">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav m-t-10">
				    <li class="nav-widget">
				        <p class="text-white">Total Hours of Current Month Woodu</p>
				        <div class="pull-left col-md-12 m-b-10 m-t-5">
                            <div class="pull-left p-r-15">
                                <input class="knob" data-width="120" data-height="120" data-thickness=".2" data-readonly="true" data-min="0" data-max="730" data-displayPrevious=true value="122" data-fgColor="#00acac" data-bgColor="#242a30" />
                            </div>
                            <div hidden class="pull-left">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="18" data-fgColor="#348fe2" data-bgColor="#242a30" />
                            </div>
                        </div>
						
				        <div  class="pull-left">
							
							<div class="pull-left p-r-15">
							<p class="text-white" >Points Pending</p>
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="0" data-max="2" data-displayPrevious=true value="1" data-fgColor="#ff5b57" data-bgColor="#242a30" />
                            </div>
                            <div class="pull-left">
								<p class="text-white" >Points Obtain</p>

                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="0" data-max="2" data-displayPrevious=true value="1" data-fgColor="#727cb6" data-bgColor="#242a30" />
                            </div>
                        </div>
				    </li>
				    <li class="nav-widget">
				       
				        <p class="m-b-5">Last Months Stats</p>
				         <div id="nv-bar-chart" class="height-sm col-amd-12"></div>
				        
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
			<h1 class="page-header">Woodo <small>Write it down how long time I have been in woodo whole day , everyday</small></h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-lg-6">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Today Woodo Duration</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
								
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="message">Select Number of Woodo Hours:</label>
									<div class="col-md-8 col-sm-8">
										<select class="form-control">
											<option value="1 Hour">1 Hour</option>
											<option value="2 Hours">2 Hours</option>
											<option value="3 Hours">3 Hours</option>
											<option value="4 Hours">4 Hours</option>
											<option value="5 Hours">5 Hours</option>
											<option value="6 Hours">6 Hours</option>
											<option value="7 Hours">7 Hours</option>
											<option value="8 Hours">8 Hours</option>
											<option value="9 Hours">9 Hours</option>
											<option value="10 Hours">10 Hours</option>
											<option value="11 Hours">11 Hours</option>
											<option value="12 Hours">12 Hours</option>
											<option value="13 Hours">13 Hours</option>
											<option value="14 Hours">14 Hours</option>
											<option value="15 Hours">15 Hours</option>
											<option value="16 Hours">16 Hours</option>
											<option value="17 Hours">17 Hours</option>
											<option value="18 Hours">18 Hours</option>
											<option value="19 Hours">19 Hours</option>
											<option value="20 Hours">20 Hours</option>
											<option value="21 Hours">21 Hours</option>
											<option value="22 Hours">22 Hours</option>
											<option value="23 Hours">23 Hours</option>
											<option value="24 Hours">24 Hours</option>
											</select>
										</select>
									</div>
								</div>
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</div>
                            </form>
                        </div>
                        <!-- end panel-body -->
                        <!-- begin hljs-wrapper -->
                      
                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
					
					<!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Stop Watch</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
							
														
							<div class="container">
								<!-- time to add the controls -->
								<input id="start" name="controls" type="radio" />
								<input id="stop" name="controls" type="radio" />
								<input id="reset" name="controls" type="radio" />
								<div class="timer bg-black-darker">
									<div class="cell">
										<div class="numbers tenhour moveten">0 1 2 3 4 5 6 7 8 9</div>
									</div>
									<div class="cell">
										<div class="numbers hour moveten">0 1 2 3 4 5 6 7 8 9</div>
									</div>
									<div class="cell divider"><div class="numbers">:</div></div>
									<div class="cell">
										<div class="numbers tenminute movesix">0 1 2 3 4 5 6</div>
									</div>
									<div class="cell">
										<div class="numbers minute moveten">0 1 2 3 4 5 6 7 8 9</div>
									</div>
									<div class="cell divider"><div class="numbers">:</div></div>
									<div class="cell">
										<div class="numbers tensecond movesix">0 1 2 3 4 5 6</div>
									</div>
									<div class="cell">
										<div class="numbers second moveten">0 1 2 3 4 5 6 7 8 9</div>
									</div>
									<div class="cell divider"><div class="numbers">:</div></div>
									<div class="cell">
										<div class="numbers milisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
									</div>
									<div class="cell">
										<div class="numbers tenmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
									</div>
									<div class="cell">
										<div class="numbers hundredmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
									</div>
								</div>
								<!-- Lables for the controls -->
								<div id="timer_controls">
									<label for="start">Start</label>
									<label for="stop">Pause</label>
									<label for="reset">Reset</label>
								</div>
							</div>

							
                            </form>
                        </div>
                        <!-- end panel-body -->
                        <!-- begin hljs-wrapper -->
                      
                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
					
                </div>
                <!-- end col-6 -->
				
				
				
 <div class="col-lg-6">
			    	<!-- begin #accordion -->
			    	<div id="accordion" class="card-accordion">
						<!-- begin card -->
						<div class="card">
							<div class="card-header bg-black text-white pointer-cursor" data-toggle="collapse" data-target="#collapseOne">
								How to do Woodo
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
							<div class="card-header bg-black text-white pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseTwo">
								Woodo benefits 
							</div>
							<div id="collapseTwo" class="collapse" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header bg-black text-white pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseThree">
								Woodo looses
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
<script>
// /*
// Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3 & 4
// Version: 4.0.0
// Author: Sean Ngu
// Website: http://www.seantheme.com/color-admin-v4.0/admin/
// */

// var getRandomValue = function() {
    // var value = [];
    // for (var i = 0; i<= 2; i++) {
       // value.push(Math.floor((Math.random() * 10) + 1));
    // }
    // return value;
// };

// var handleRenderKnobDonutChart = function() {
    // $('.knob').knob();
// };

// var handleRenderSparkline = function() {
    // var options = {
        // height: '50px',
        // width: '100%',
        // fillColor: 'transparent',
        // type: 'bar',
        // barWidth: 8,
        // barColor: COLOR_GREEN
    // };
    
    // var value = getRandomValue();
    // $('#sidebar-sparkline-1').sparkline(value, options);
    
    // value = getRandomValue();
    // options.barColor = COLOR_BLUE;
    // $('#sidebar-sparkline-2').sparkline(value, options);
    
    // value = getRandomValue();
    // options.barColor = COLOR_PURPLE;
    // $('#sidebar-sparkline-3').sparkline(value, options);
    
    // value = getRandomValue();
    // options.barColor = COLOR_RED;
    // $('#sidebar-sparkline-4').sparkline(value, options);
// };

// var PageWithTwoSidebar = function () {
	// "use strict";
    // return {
        // //main function
        // init: function () {
            // handleRenderKnobDonutChart();
            // handleRenderSparkline();
        // }
    // };
// }();
</script>
		
<?php include('footer_dashboard.php')?>