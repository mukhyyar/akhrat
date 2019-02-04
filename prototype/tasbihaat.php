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
				      
						
				        <div class="pull-left">
                            <div class="pull-left p-r-15">
							  <p class="text-white">Total Durdh</p>
                                <input class="knob" data-width="160" data-height="160" data-thickness=".2" data-readonly="true" data-min="0" data-max="99999" data-displayPrevious=true value="1122" data-fgColor="#00acac" data-bgColor="#242a30" />
                            </div>
							
							 
                            <div  class="pull-left">
							<p class="text-white">Total Astagfar</p>
                                <input class="knob" data-width="160" data-height="160" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="18" data-fgColor="#348fe2" data-bgColor="#242a30" />
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
				    <li hidden class="nav-widget">
				       
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
			<h1 class="page-header">Tasbihat <small> record All Tasbihat everyday </small></h1>
			<div class="alert alert-danger fade show">
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
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Tasbihat</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
								<div class="form-group row m-b-15">
									<label class="col-form-label col-md-3">Durdh </label>
									<div class="col-md-5">
										<select class="form-control">
											<option>Select</option>
											<option>Yes</option>
											<option>No</option>
											
										</select>
										
									</div>
									<div class="col-md-4">
										
										<input type="number" class="form-control" placeholder="Durdh Qty">
										
										
									</div>
									
								</div>
								<div class="form-group row m-b-15">
									<label class="col-form-label col-md-3">Kalima </label>
									<div class="col-md-5">
										<select class="form-control">
											<option>Select</option>
											<option>Yes</option>
											<option>No</option>
											
										</select>
										
									</div>
									<div class="col-md-4">
										
										<input type="number" class="form-control" placeholder="Kalima Qty">
										
										
									</div>
									
								</div>
								
								<div class="form-group row m-b-15">
									<label class="col-form-label col-md-3">Astagfar</label>
									<div class="col-md-5">
										<select class="form-control">
											<option>Select</option>
											<option>Yes</option>
											<option>No</option>
											
										</select>
										
									</div>
									
									<div class="col-md-4">
										
										
										<input type="number" class="form-control" placeholder="Astaghfar Qty">
										
									
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
                    <div class="panel panel-inverse" >
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Digital Tasbihat</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
								
								 <div class="jcpo-counter counter1">
									<p>
										<span class="contador-dig-0">0</span><span class="contador-dig-1">0</span><span class="contador-dig-2">0</span><span class="contador-dig-3">0</span><span class="contador-dig-4" style="top: 0px;">1</span><span class="contador-dig-5" style="top: 0px;">0</span></p>
								  </div>
								  
								   <div>
									<button type="button" class="jcpo-plusone btn btn-block btn-circle btn-dark btn-lg jcpo-plusone m-2">Counter + 1</button>
									<button type="button" class="reset_tasbeh btn btn-circle btn-danger btn-lg  m-2 reset_tasbeh">Reset</button>
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
								benefits 
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
