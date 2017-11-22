
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Laskar Ilmu</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project-->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    <img src="images/logo.png" width="150" height="50">
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="dashboard_admin.jsp">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="daftar_permintaan.jsp">
                        <i class="ti-agenda"></i>
                        <p>Daftar Permintaan</p>
                    </a>
                </li>
                <li>
                    <a href="daftar_user.jsp">
                        <i class="ti-user"></i>
                        <p>Daftar User</p>
                    </a>
                </li>
                <li>
                    <a href="pengaturan.jsp">
                        <i class="ti-settings"></i>
                        <p>Pengaturan</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

     <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#"> Daftar Permintaan</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <li><a href="login.jsp">Log Out</a></li>                                
                              </a>
                              </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                
                 <center>
              <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            </div>
                            <div class="content">

                                <form action="daftar_nilai.php" method="POST" role="search">
                                    <div class="row">

                                    <div class="form-group">
                                        <input type='text' placeholder='Cari Berdasarkan Nama' name='qcari' class='form-control border-input'>
                                    </div>

                                            <input type='submit' value='Find Data' class='btn btn-small btn-warning'> <a href='daftar_nilai.php' class='btn btn-small btn-success' > All Data</a>
                                </form>

                            </div>
                        </div>
                    </div>
    </center>
                </div>

<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Daftar Permintaan User</h3>
  </div>
  <div class="panel-body">
  
        <table class="table table-hover" >
            <th>
                <td>Tanggal</td>
                <td>ID</td>
                <td>Nama</td>
                <td>Service</td>
                <td>Kertas</td>
                <td>Tinta</td>
                <td>Status</td>
            </th>
        <tr>
                <td>1</td>
                <td>10-03-2017</td>
                <td>001</td>
                <td>Toko A</td>
                <td>Ya</td>
                <td>Black</td>
                <td>A4 @ 1rim </td>
                <td>Selesai &nbsp  <i class="ti-check"></i>  </td>
            </tr>
            
            <tr>
                <td>2</td>
                <td>10-05-2017</td>
                <td>002</td>
                <td>Toko B</td>
                <td>Ya</td>
                <td>Black , Colour</td>
                <td>A3 @ 2rim </td>
                <td>  Proses &nbsp  <i class="ti-reload"></i> </td>
            </tr>

            <tr>
                <td>3</td>
                <td>10-07-2017</td>
                <td>003</td>
                <td>Toko C</td>
                <td>Ya</td>
                <td>Black</td>
                <td>F4 @ 1rim </td>
                <td>Belum &nbsp  <i class="ti-alert"></i>  </td>
            </tr>
            
            
            
        </table>    
</div>
</div>


            </div>
        </div>

       <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made by  <a href="#">pukul7pagi</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>



    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


</html>
