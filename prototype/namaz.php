<?php include('head_dashboard.php'); ?>
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
			<h1 class="page-header">Namaz <small> record All Namaz everyday </small></h1>
			<div class="alert alert-danger fade show">
			  <span hidden class="close" data-dismiss="alert">×</span>
			  Minimum requirement is farz even ADA or QAZA
			  <a hidden href="#" class="alert-link">an example link</a>. 
			</div>
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
                            <h4 class="panel-title">Today's Namaz Record</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
								
								 <div class="form-group row m-b-10">
                                    <label class="col-md-3 col-form-label">Namaz-e-Fajar</label>
                                    <div class="col-md-9">
                                        <div class="radio radio-css">
                                            <input type="radio" name="radio_css" id="cssRadio1" checked />
                                            <label for="cssRadio1">Ada</label>
                                        </div>
                                       
                                        <div class="radio radio-css is-valid">
                                            <input type="radio" name="radio_css" id="cssRadio3" value="" />
                                            <label for="cssRadio3">Qaza</label>
                                        </div>
                                        <div class="radio radio-css is-invalid">
                                            <input type="radio" name="radio_css" id="cssRadio5" value="" />
                                            <label for="cssRadio5">Missed</label>
                                        </div>
                                    </div>
                                </div>
								 <div class="form-group row m-b-10">
                                    <label class="col-md-3 col-form-label">Namaz-e-Zohar</label>
                                    <div class="col-md-9">
                                        <div class="radio radio-css">
                                            <input type="radio" name="radio_css" id="cssRadio1" checked />
                                            <label for="cssRadio1">Ada</label>
                                        </div>
                                       
                                        <div class="radio radio-css is-valid">
                                            <input type="radio" name="radio_css" id="cssRadio3" value="" />
                                            <label for="cssRadio3">Qaza</label>
                                        </div>
                                        <div class="radio radio-css is-invalid">
                                            <input type="radio" name="radio_css" id="cssRadio5" value="" />
                                            <label for="cssRadio5">Missed</label>
                                        </div>
                                    </div>
                                </div>
								 <div class="form-group row m-b-10">
                                    <label class="col-md-3 col-form-label">Namaz-e-Asar</label>
                                    <div class="col-md-9">
                                        <div class="radio radio-css">
                                            <input type="radio" name="radio_css" id="cssRadio1" checked />
                                            <label for="cssRadio1">Ada</label>
                                        </div>
                                       
                                        <div class="radio radio-css is-valid">
                                            <input type="radio" name="radio_css" id="cssRadio3" value="" />
                                            <label for="cssRadio3">Qaza</label>
                                        </div>
                                        <div class="radio radio-css is-invalid">
                                            <input type="radio" name="radio_css" id="cssRadio5" value="" />
                                            <label for="cssRadio5">Missed</label>
                                        </div>
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
                </div>
                <!-- end col-6 -->
 <div class="col-lg-6">
			    	<!-- begin #accordion -->
			    	<div id="accordion" class="card-accordion">
						<!-- begin card -->
						<div class="card">
							<div class="card-header bg-black text-white pointer-cursor" data-toggle="collapse" data-target="#collapseOne">
								How to do Namaz
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
								Namaz benefits 
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
								Namaz looses
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