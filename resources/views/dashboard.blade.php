<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title> Admin - Dashboard</title>


  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/tables.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="<?php echo url('/'); ?>/css//tables.js"></script>




  <link href="<?php echo url('/'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="<?php echo url('/'); ?>/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/main.css" rel="stylesheet" media="all">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker-standalone.css">
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/eventForm.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


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

          <div class="col-10 px-0">
            <div class="card">

              <div class="page-wrapper bg-dark p-t-100 p-b-50">
                <div class="wrapper wrapper--w900">
                  <div class="card card-6">
                    <div class="card-heading">
                      <h2 class="title">Add a new Post</h2>
                    </div>
                    <div class="card-body">
                      <!--form starts here-->
                      <form method="POST" action="/news" enctype="multipart/form-data">
                        <div class="form-row">
                          <div class="name">News Title <span style="color: red"> &nbsp;*</span></div>
                          <div class="value">
                            <input class="input--style-6" type="text" name="title">
                            @error('title')
                            <div class=" alert alert-danger">{{ $message }} </div>
                            @enderror

                          </div>

                        </div>

                        <div class="form-row">
                          <div class="name">Upload Image</div>
                          <div class="value">
                            <div class="input-group js-input-file">
                              <label class="label--file" for="image">select a file: </label>
                              <input type="file" name="image" id="image">
                            </div>
                            <div class="label--desc">Upload an image:Max file size 5 MB</div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="name">News Description<span style="color: red"> &nbsp;*</span></div>
                          <div class="value">
                            <div class="input-group">
                              <textarea class="textarea--style-6" name="content" id="editor" placeholder="Write Description for your events"></textarea>
                            </div>
                            @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                          </div>
                        </div>
                        <div class="form-row">
                          <div class="name">Upload File</div>
                          <div class="value">
                            <div class="input-group js-input-file">
                              <label class="label--file" for="file">select a file: </label>
                              <input type="file" name="pdf_file" id="file">
                            </div>
                            <div class="label--desc">Upload your files:Max file size 10 MB</div>
                          </div>
                        </div>
                        @csrf
                        <div class="card-footer">
                          <button class="btn btn--radius-2 btn--blue-2" type="submit">Add Post</button>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="editEmployeeModal">
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
          </div>
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
                      <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Employees</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Thomas Hardy</td>
                        <td>thomashardy@mail.com</td>
                        <td>89 Chiaroscuro Rd, Portland, USA</td>
                        <td>(171) 555-2222</td>
                        <td>
                            <a href="#" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dominique Perrier</td>
                        <td>dominiqueperrier@mail.com</td>
                        <td>Obere Str. 57, Berlin, Germany</td>
                        <td>(313) 555-5735</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Maria Anders</td>
                        <td>mariaanders@mail.com</td>
                        <td>25, rue Lauriston, Paris, France</td>
                        <td>(503) 555-9931</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Fran Wilson</td>
                        <td>franwilson@mail.com</td>
                        <td>C/ Araquil, 67, Madrid, Spain</td>
                        <td>(204) 619-5731</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>                   
                    <tr>
                        <td>Martin Blank</td>
                        <td>martinblank@mail.com</td>
                        <td>Via Monte Bianco 34, Turin, Italy</td>
                        <td>(480) 631-2097</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr> 
                </tbody>
            </table>
    </div>        
</div>
                    </div>
                  </div>


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

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">                      
                    <h4 class="modal-title">Delete Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">                    
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>

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

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo url('/'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo url('/'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo url('/'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo url('/'); ?>/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo url('/'); ?>/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/<?php echo url('/'); ?>js/demo/chart-area-demo.js"></script>
  <script src="/<?php echo url('/'); ?>js/demo/chart-pie-demo.js"></script>
  <script src="<?php echo url('/'); ?>/js/event.js"></script>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
    window.onload = function() {

      tinymce.init({
        selector: '#editor',
        toolbar: 'bold italic underline',
        branding: false,
        file_browser_callback: filemanager.tinyMceCallback
      });

    };
  </script>

</body>

</html>