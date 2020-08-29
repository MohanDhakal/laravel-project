<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title> Admin  - Dashboard</title>

	

	<!-- Custom styles for this template-->
	<link href="<?php echo url('/'); ?>/css/sb-admin-2.min.css" rel="stylesheet">
	  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" integrity="sha256-b5ZKCi55IX+24Jqn638cP/q3Nb2nlx+MH/vMMqrId6k=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>
		
	<link rel="stylesheet" href="<?php echo url('/'); ?>/css/eventForm.css">
	<!-- Custom fonts for this template-->
	<link href="<?php echo url('/'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3"> Admin </div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="index.html">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
			<!-- Nav Item - Tables -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo url('/'); ?>/tables.html">
					<i class="fas fa-fw fa-table"></i>
					<span>Tables</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Search -->

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>

						<!-- Nav Item - Messages -->
						
						<div class="topbar-divider d-none d-sm-block"></div>

						

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				
					<!-- Content Row -->

					<div class="row">

						<!-- Area Chart -->
						<div class="col-xl-12 col-lg-6">
							<div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Add Event</h6>
								</div>
								<!-- Card Body -->
								<div class="card-body">
								<div class="container">
								  <form action="action_page.php">
								    <div class="row">
								      <div class="col-25">
								        <label for="title">Title</label>
								      </div>
								      <div class="col-75">
								        <input type="text" id="title" name="title" placeholder="Title of event..">
								      </div>
								    </div>
								    
								    <div class="row">
								      <div class="col-25">
								        <label for="subject">Description</label>
								      </div>
								      <div class="col-75">
								        <textarea id="discription" maxlength="100" name="discription" placeholder="Write something.." style="height:200px"></textarea>
								      </div>
								    </div>
								    <div class="row">
								      <div class="col-25">
								        <label for="datetime">Event (Date and Time)</label>
								      </div>
								      <div class="col-75">
								        <div class="form-group">
								                    <div class='input-group date' id='datetimepicker1'>
								                        <input type='text' class="form-control" />
								                        <span class="input-group-addon">
								                            <span class="glyphicon glyphicon-calendar"></span>
								                        </span>
								                    </div>
								                </div>
								      </div>
								    </div>
								    
								    <div class="row">
								      <div class="col-25">
								        <label for="title">Venue</label>
								      </div>
								      <div class="col-75">
								        <input type="text" id="venue" name="venue" placeholder="">
								      </div>
								    </div>
								    <div class="row">
								      <input type="submit" value="Add Event">
								    </div>
								  </form>
								</div>

								</div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-6">
							<div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Add Blog</h6>
									
								</div>
								<!-- Card Body -->
								<div class="card-body">
									<div class="container">
									<form action="action_page.php">
										<div class="row">
											<div class="col-25">
												<label for="title">Title</label>
											</div>
											<div class="col-75">
												<input type="text" id="title" name="title" placeholder="Title of event..">
											</div>
										</div>
										
										<div class="row">
											<div class="col-25">
												<label for="subject">Description</label>
											</div>
											<div class="col-75">
												<textarea id="discription" maxlength="100" name="discription" placeholder="Write something.." style="height:200px"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="col-25">
												<label for="datetime">(Date and Time)</label>
											</div>
											<div class="col-75">
												<div class="form-group">
																		<div class='input-group date' id='datetimepicker1'>
																				<input type='text' class="form-control" />
																				<span class="input-group-addon">
																						<span class="glyphicon glyphicon-calendar"></span>
																				</span>
																		</div>
																</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-25">
												<label for="title">Venue</label>
											</div>
											<div class="col-75">
												<input type="text" id="venue" name="venue" placeholder="">
											</div>
										</div>
										<div class="row">
											<div class="col-25">
												<label for="name">Image</label>
											</div>
											<div class="col-75">
												<input type="link" id="image" name="image">
											</div>
										</div>
										<div class="row">
											<input type="submit" value="Add Blog">
										</div>
									</form>
								</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-6">
							<div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Add Staff</h6>
									
								</div>
								<!-- Card Body -->
								<div class="card-body">
									<div class="container">
										<form action="action_page.php">
											<div class="row">
												<div class="col-25">
													<label for="name">Name</label>
												</div>
												<div class="col-75">
													<input type="text" id="name" name="name">
												</div>
											</div>
											
											<div class="row">
												<div class="col-25">
													<label for="subject">Post</label>
												</div>
												<div class="col-75">
													<select name="post" id="post">
														<option value="volvo">Principal</option>
														<option value="saab">Supervisor</option>
														<option value="opel">Teacher</option>
														<option value="audi">Librarian</option>
										</select>
												</div>
											</div>
											<div class="row">
												<div class="col-25">
													<label for="subject">Description</label>
												</div>
												<div class="col-75">
													<textarea id="discription" maxlength="50" name="discription" placeholder="Write something.." style="height:200px"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="col-25">
													<label for="name">Image</label>
												</div>
												<div class="col-75">
													<input type="link" id="image" name="image">
												</div>
											</div>

											<div class="row">
												<input type="submit" value="Add Staff">
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12">
							<div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Staff's Records</h6>
									
								</div>
								<!-- Card Body -->
								<div class="card-body">
									<div class="container-fluid">

				          <!-- Page Heading -->
				          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
				          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

				          <!-- DataTales Example -->
				          <div class="card shadow mb-4">
				            <div class="card-header py-3">
				              <h6 class="m-0 font-weight-bold text-primary"> Staff's DataTable</h6>
				            </div>
				            <div class="card-body">
				              <div class="table-responsive">
				                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				                  <thead>
				                    <tr>
				                      <th>Name</th>
				                      <th>Position</th>
				                      <th>Description</th>
				                      <th>Image URL</th>
				                    </tr>
				                  </thead>
				                  <tfoot>
				                    <tr>
				                      <th>Name</th>
				                      <th>Position</th>
				                      <th>Description</th>
				                      <th>Image URL</th>
				                    </tr>
				                  </tfoot>
				                  <tbody>
				                    <tr>
				                      <td>Tiger Nixon</td>
				                      <td>System Architect</td>
				                      <td>Edinburgh</td>
				                      <td>61</td>
				                    </tr>
				                    <tr>
				                      <td>Garrett Winters</td>
				                      <td>Accountant</td>
				                      <td>Tokyo</td>
				                      <td>63</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Ashton Cox</td>
				                      <td>Junior Technical Author</td>
				                      <td>San Francisco</td>
				                      <td>66</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Cedric Kelly</td>
				                      <td>Senior Javascript Developer</td>
				                      <td>Edinburgh</td>
				                      <td>22</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Airi Satou</td>
				                      <td>Accountant</td>
				                      <td>Tokyo</td>
				                      <td>33</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Brielle Williamson</td>
				                      <td>Integration Specialist</td>
				                      <td>New York</td>
				                      <td>61</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Herrod Chandler</td>
				                      <td>Sales Assistant</td>
				                      <td>San Francisco</td>
				                      <td>59</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Rhona Davidson</td>
				                      <td>Integration Specialist</td>
				                      <td>Tokyo</td>
				                      <td>55</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Colleen Hurst</td>
				                      <td>Javascript Developer</td>
				                      <td>San Francisco</td>
				                      <td>39</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Sonya Frost</td>
				                      <td>Software Engineer</td>
				                      <td>Edinburgh</td>
				                      <td>23</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Jena Gaines</td>
				                      <td>Office Manager</td>
				                      <td>London</td>
				                      <td>30</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Quinn Flynn</td>
				                      <td>Support Lead</td>
				                      <td>Edinburgh</td>
				                      <td>22</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Charde Marshall</td>
				                      <td>Regional Director</td>
				                      <td>San Francisco</td>
				                      <td>36</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Haley Kennedy</td>
				                      <td>Senior Marketing Designer</td>
				                      <td>London</td>
				                      <td>43</td>
				                      
				                    </tr>
				                  </tbody>
				                </table>
				              </div>
				            </div>
				          </div>

				        </div>
        <!-- /.container-fluid -->
						</div>
						<div class="col-xl-12 col-lg-12">
							<div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">Event's Records</h6>
									
								</div>
								<!-- Card Body -->
								<div class="card-body">
									<div class="container-fluid">

				          <!-- Page Heading -->
				          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
				          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

				          <!-- DataTales Example -->
				          <div class="card shadow mb-4">
				            <div class="card-header py-3">
				              <h6 class="m-0 font-weight-bold text-primary"> Events's DataTable</h6>
				            </div>
				            <div class="card-body">
				              <div class="table-responsive">
				                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				                  <thead>
				                    <tr>
				                      <th>Title</th>
				                      <th>Description</th>
				                      <th>Event (date and time</th>
				                      <th>Venue</th>
				                    </tr>
				                  </thead>
				                  <tfoot>
				                    <tr>
				                      <th>Title</th>
				                      <th>Description</th>
				                      <th>Event (date and time</th>
				                      <th>Venue</th>
				                    </tr>
				                  </tfoot>
				                  <tbody>
				                    <tr>
				                      <td>Tiger Nixon</td>
				                      <td>System Architect</td>
				                      <td>Edinburgh</td>
				                      <td>61</td>
				                    </tr>
				                    <tr>
				                      <td>Garrett Winters</td>
				                      <td>Accountant</td>
				                      <td>Tokyo</td>
				                      <td>63</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Ashton Cox</td>
				                      <td>Junior Technical Author</td>
				                      <td>San Francisco</td>
				                      <td>66</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Cedric Kelly</td>
				                      <td>Senior Javascript Developer</td>
				                      <td>Edinburgh</td>
				                      <td>22</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Airi Satou</td>
				                      <td>Accountant</td>
				                      <td>Tokyo</td>
				                      <td>33</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Brielle Williamson</td>
				                      <td>Integration Specialist</td>
				                      <td>New York</td>
				                      <td>61</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Herrod Chandler</td>
				                      <td>Sales Assistant</td>
				                      <td>San Francisco</td>
				                      <td>59</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Rhona Davidson</td>
				                      <td>Integration Specialist</td>
				                      <td>Tokyo</td>
				                      <td>55</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Colleen Hurst</td>
				                      <td>Javascript Developer</td>
				                      <td>San Francisco</td>
				                      <td>39</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Sonya Frost</td>
				                      <td>Software Engineer</td>
				                      <td>Edinburgh</td>
				                      <td>23</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Jena Gaines</td>
				                      <td>Office Manager</td>
				                      <td>London</td>
				                      <td>30</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Quinn Flynn</td>
				                      <td>Support Lead</td>
				                      <td>Edinburgh</td>
				                      <td>22</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Charde Marshall</td>
				                      <td>Regional Director</td>
				                      <td>San Francisco</td>
				                      <td>36</td>
				                      
				                    </tr>
				                    <tr>
				                      <td>Haley Kennedy</td>
				                      <td>Senior Marketing Designer</td>
				                      <td>London</td>
				                      <td>43</td>
				                      
				                    </tr>
				                  </tbody>
				                </table>
				              </div>
				            </div>
				          </div>

				        </div>
        <!-- /.container-fluid -->
						</div>
						<div class="col-xl-12 col-lg-12">
							<div class="card shadow mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-primary">News Records</h6>
									
								</div>
								<!-- Card Body -->
								<div class="card-body">
									<div class="container-fluid">

				          <!-- Page Heading -->
				          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
				          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

				          <!-- DataTales Example -->
				          <div class="card shadow mb-4">
				            <div class="card-header py-3">
				              <h6 class="m-0 font-weight-bold text-primary"> News DataTable</h6>
				            </div>
				            <div class="card-body">
				              <div class="table-responsive">
				                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				                  <thead>
				                    <tr>
				                      <th>Title</th>
				                      <th>Description</th>
				                      <th>(Date and time)</th>
				                      <th>Venue</th>
				                      <th>Image URL</th>
				                    </tr>
				                  </thead>
				                  <tfoot>
				                    <tr>
				                      <th>Title</th>
				                      <th>Description</th>
				                      <th>(Date and time)</th>
				                      <th>Venue</th>
				                      <th>Image URL</th>
				                    </tr>
				                  </tfoot>
				                  <tbody>
				                    <tr>
				                      <td>Tiger Nixon</td>
				                      <td>System Architect</td>
				                      <td>Edinburgh</td>
				                      <td>61</td>
				                      <td>image.com</td>
				                    </tr>
				                    <tr>
				                      <td>Garrett Winters</td>
				                      <td>Accountant</td>
				                      <td>Tokyo</td>
				                      <td>63</td>
				                        <td>image.com</td>
				                    </tr>
				                    <tr>
				                      <td>Ashton Cox</td>
				                      <td>Junior Technical Author</td>
				                      <td>San Francisco</td>
				                      <td>66</td>
				                        <td>image.com</td>
				                    </tr>
				                    <tr>
				                      <td>Cedric Kelly</td>
				                      <td>Senior Javascript Developer</td>
				                      <td>Edinburgh</td>
				                      <td>22</td>
				                       <td>image.com</td> 
				                    </tr>
				                    <tr>
				                      <td>Airi Satou</td>
				                      <td>Accountant</td>
				                      <td>Tokyo</td>
				                      <td>33</td>
				                        <td>image.com</td>
				                    </tr>
				                    <tr>
				                      <td>Brielle Williamson</td>
				                      <td>Integration Specialist</td>
				                      <td>New York</td>
				                      <td>61</td>
				                        <td>image.com</td>
				                    </tr>
				                    <tr>
				                      <td>Herrod Chandler</td>
				                      <td>Sales Assistant</td>
				                      <td>San Francisco</td>
				                      <td>59</td>
				                        <td>image.com</td>
				                    </tr>
				                    <tr>
				                      <td>Rhona Davidson</td>
				                      <td>Integration Specialist</td>
				                      <td>Tokyo</td>
				                      <td>55</td>
				                        <td>image.com</td>
				                    </tr>
				                    <tr>
				                      <td>Colleen Hurst</td>
				                      <td>Javascript Developer</td>
				                      <td>San Francisco</td>
				                      <td>39</td>
				                        <td>image.com</td>
				                    </tr>
				                    <tr>
				                      <td>Sonya Frost</td>
				                      <td>Software Engineer</td>
				                      <td>Edinburgh</td>
				                      <td>23</td>
				                        <td>image.com</td>
				                    </tr>
				                    <tr>
				                      <td>Jena Gaines</td>
				                      <td>Office Manager</td>
				                      <td>London</td>
				                      <td>30</td>
				                        <td>image.com</td>
				                    </tr>
				                    <tr>
				                      <td>Quinn Flynn</td>
				                      <td>Support Lead</td>
				                      <td>Edinburgh</td>
				                      <td>22</td>
				                        <td>image.com</td>
				                    </tr>
				                    <tr>
				                      <td>Charde Marshall</td>
				                      <td>Regional Director</td>
				                      <td>San Francisco</td>
				                      <td>36</td>
				                        <td>image.com</td>
				                    </tr>
				                    <tr>
				                      <td>Haley Kennedy</td>
				                      <td>Senior Marketing Designer</td>
				                      <td>London</td>
				                      <td>43</td>
				                        <td>image.com</td>
				                    </tr>
				                  </tbody>
				                </table>
				              </div>
				            </div>
				          </div>

				        </div>
        <!-- /.container-fluid -->
						</div>



						<!-- Pie Chart -->
						
					</div>

					<!-- Content Row -->
					


							<!-- Approach -->
							

						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Your Website 2020</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>


	<!-- Bootstrap core JavaScript-->
	<!-- Begin Page Content -->
        

      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>


	<!-- Page level custom scripts -->
	<script src="<?php echo url('/'); ?>/js/event.js"></script>
	
	<script src="<?php echo url('/'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo url('/'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo url('/'); ?>/js/sb-admin-2.min.js"></script>


</body>

</html>
