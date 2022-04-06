<?php
// Start session
session_start();
if (isset($_SESSION['username']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: login.php');
}else {
	if (isset($_SESSION['idmachine']) == true) {
		// Ngược lại nếu đã đăng nhập
		$permission = $_SESSION['idmachine'];
		// Kiểm tra quyền của người đó có phải là admin hoặc user hay không
		if($permission != "g03"){
            if ($permission != "all") {
                header('Location: login.php');
            }
        }
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>biogas</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">Máy 3</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin page</span></a>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading">
        Vi tri
      </div>

      <!-- Nav Item - Charts -->
      <div class="mx-3" style="color: white;"></div>


      <!-- End of Select machine -->

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
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

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

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div>
                    <div class="small text-gray-500">9 25, 2020</div>
                    <span class="font-weight-bold">Alerts 1</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div>
                    <div class="small text-gray-500">9 25, 2020</div>
                    <span class="font-weight-bold">Alerts 2</span>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="font-weight-bold">
                    <div class="text-truncate">message 1</div>
                    <div class="small text-gray-500">hieu · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div>
                    <div class="text-truncate">message 2</div>
                    <div class="small text-gray-500">hieu · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">All Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile" src="./img/logo-bach-khoa-ha-noi.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download report</a>
          </div>
          <!-- End of Page Heading -->

        <!-- Content Row -->
            <div class="row">
                <!-- electrical -->
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <h1 class="h3 mb-0 text-gray-800 align-center">Electrical</h1>

                      <div class="row no-gutters align-items-center">
                                        <!-- table1 -->
                        <div class="col  mr-2">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Sensor</th>
                                <th scope="col">Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Voltage_RMS_A_1: </div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03eleva"></div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Voltage_RMS_B_2:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03elevb"></div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Voltage_RMS_C_3:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03elevc"></div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Voltage_RMS_UN_Average:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03elevna"></div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Voltage_RMS_AB:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elevab"></div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Voltage_RMS_BC:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elevbc"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Voltage_RMS_CA:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elevca"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Voltage_RMS_line_average:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elevla"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Current_RMS_A:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03eleia"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Current_RMS_B:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03eleib"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Current_RMS_C:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03eleic"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Current_RMS_average:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03eleiav"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Speed:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03eles"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Frequency:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elef"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Time_operate:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03eletop"></div>                       
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <h1 class="h3 mb-0 text-gray-800 align-center">Electrical</h1>

                      <div class="row no-gutters align-items-center">
                                        <!-- table1 -->
                        <div class="col  mr-2">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Sensor</th>
                                <th scope="col">Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Active_Power_A:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elepwa"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Active_Power_B:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elepwb"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Active_Power_C:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elepwc"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Active_power_total:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elepwt"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Power_factor_A:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elepfa"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Power_factor_B:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elepfb"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Power_factor_C:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elepfc"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Power_factor_average:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elepft"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Active_energy_total:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03eleewh"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Apparent_energy_total:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03eleevah"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">THD_Van/Vab:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elethdva"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">THD_Vbn/Vbc:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elethdvb"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">THD_Vcn/Vca:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elethdvc"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">THD_Ia:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elethdia"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">THD_Ib:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elethdib"></div>                       
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">THD_Ic:</div>
                                </td>
                                <td>
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03elethdic"></div>                       
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <!-- environment -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <h1 class="h3 mb-0 text-gray-800 align-center">Operation</h1>

                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Time</th>
                                  <th scope="col">Value</th>
                                </tr>
                              </thead>
                              <tbody>
                                                           <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">date begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03daytb"></div>
                                  </td>
                                </tr>
                                                          <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time begin</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03timetb"></div>
                                  </td>
                                </tr>
                                                        <!-- operation vsfb(Valve_speed)-->

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">time operate</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03op"></div>
                                  </td>
                                </tr>
                              </tbody>

                              <thead>
                                <tr>
                                  <th scope="col">Sensor</th>
                                  <th scope="col">Value</th>
                                </tr>
                              </thead>
                              <tbody>

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Speed_setpoint:</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03opepidsp"></div>
                                  </td>
                                </tr>

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Output_speed_pid:</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03opepidout"></div>
                                  </td>
                                </tr>

                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Biogas_in_valve:</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03opevpb"></div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Biogas_tank_pressure:</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03opepb"></div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Speed_feedback_valve:</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="g03opevsfb"></div>
                                  </td>
                                </tr>

                              </tbody>
                            </table>

                          </div>
                        </div>

                        <h1 class="h3 mb-0 text-gray-800 align-center">Environment</h1>
    
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Sensor</th>
                                  <th scope="col">Value</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Temperature_water:</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03envtw"></div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pressure_oil:</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03envpo"></div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Oxygen:</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03envo2"></div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">H2S:</div>
                                  </td>
                                  <td>
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="g03envh2s"></div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        
                      </div>
                    </div>
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
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <!--script src="vendor/chart.js/Chart.min.js"></script-->
  
  <!-- mqtt connector -->
  <script src="js/getData.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.min.js" type="text/javascript"></script>
  <script src="js/connectMqtt.js"></script>
  


</body>

</html>
