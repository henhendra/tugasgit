<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
    session_start();
?>
<?php

    include "koneksi.php";
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>

<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.php" ><li class="fa fa-user">Admin</li></a>
            </div>
            <!-- /.navbar-header -->
            
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="?page=home"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>

                            <?php 
                                if($_SESSION['level']== 'admin'){

                            ?>
                        <li>
                              <a  href="?page=data_admin" ><i class="fa fa-user nav_icon"></i>Data Admin</a>
                        </li>

                        <li>
                             <a href="?page=data_member"><i class="fa fa-users nav_icon"></i>Data Member</a>
                        </li>

                        <li>
                            <a href="?page=data_pendaftar"><i class="fa fa-file-text nav_icon"></i>Data Pendaftar</a>
                        </li>
                        <li>
                            <a href="?page=data_galeri"><i class="glyphicon glyphicon-expand nav_icon"></i>Data Galeri</a>
                        </li>

                        <li>
                            <a href="?page=data_pengumuman"><i class="fa fa-bell-o nav_icon"></i>Data Pengumuman</a>
                        </li>

                        <li>
                            <a href="?page=data_lulus"><i class="glyphicon glyphicon-list-alt nav_icon"></i>Data Siswa Yang Lulus</a>
                        </li>

                        <li>
                            <a href="?page=data_t_lulus"><i class="glyphicon glyphicon-list-alt nav_icon"></i>Data Yang Tidak Lulus</a>
                        </li>

                            <!-- /.nav-second-level -->
                                <?php } ?>
                             <?php 
                               //admin di ambil dari database         //Pimpinan di ambil dari database
                                if($_SESSION['level'] == 'admin' or $_SESSION['level']=='pimpinan'){

                             ?>
                         <li>
                            <a href="#"><i class="fa fa-file-o nav_icon"></i>Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=laporan_perpriode"><i class="fa fa-file-o nav_icon"></i> Siswa Di Terima </a>
                                </li>
                                <li>
                                    <a href="?page=laporan_tidak_lulus"><i class="fa fa-file-o nav_icon"></i> Siswa Di Tolak</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php } ?>
                        
                        <li>
                              <li>
                                 <a class="fa fa-sign-out" href="logout.php">LogOut</a>
                            </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
    <?php
            include "konten.php"
    ?>
    <div class="copy_layout">
            <p>Copyright ?? 2019 RS ICT. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">retnosetianto</a> </p>
    </div>
        </div>
            <div class="clearfix"> </div>
        </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
             <script src="js/bootstrap.min.js"></script>
    </body>
</html>
