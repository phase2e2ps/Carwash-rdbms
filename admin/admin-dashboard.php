<!DOCTYPE HTML>
<html>

<head>
    <title>CWMS | Admin Dashboard</title>
    <!-- admin-dashboard/css-->
    <link rel="stylesheet" href="http://192.168.80.168/cwms/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://192.168.80.168/cwms/admin/css/font-awesome.css">
    <link rel="stylesheet" href="http://192.168.80.168/cwms/admin/css/icon-font.min.css">
    <link rel="stylesheet" href="http://192.168.80.168/cwms/admin/css/morris.css">
    <link rel="stylesheet" href="http://192.168.80.168/cwms/admin/css/style.css">

    <!-- Correct order for JS files -->
    <script src="http://192.168.80.168/cwms/admin/js/jquery-2.1.4.min.js"></script>
    <script src="http://192.168.80.168/cwms/admin/js/bootstrap.min.js"></script>
    <script src="http://192.168.80.168/cwms/admin/js/jquery.nicescroll.js"></script>
    <script src="http://192.168.80.168/cwms/admin/js/scripts.js"></script>
    <script src="http://192.168.80.168/cwms/admin/js/raphael-min.js"></script>
    <script src="http://192.168.80.168/cwms/admin/js/morris.js"></script>




    <!-- fonts.googleapis.com-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400">

    <!-- assets/css-->
    <link rel="stylesheet" href="http://192.168.80.168/cwms/css/style.css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/morris.css" type="text/css" />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
</head>

<body>
    <div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="mother-grid-inner">
                <div class="header-main">
                    <div class="logo-w3-agile">
                        <h1><a href="dashboard.php">Car Wash Management System</a></h1>
                    </div>


                    <div class="profile_details w3l">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span class="prfil-img"><img src="data:image/jpeg;base64,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" alt="Profile Image"> </span>
                                        <div class="user-name">
                                            <p>Admin</p>
                                            <span>Administrator</span>
                                        </div>
                                        <i class="fa fa-angle-down"></i>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                                    <li><a href="../views/index.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                    <div class="clearfix"> </div>
                </div>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./admin-dashboard.php">Home</a> <i class="fa fa-angle-right"></i></li>
                </ol>
                <!--four-grids here-->
                <div class="four-grids">

                    <a href="all-bookings.php" target="_blank">
                        <div class="col-md-3 four-grid">
                            <div class="four-agileits">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
                                </div>
                                <div class="four-text">
                                    <h3>Total Bookings</h3>

                                    <h4> 13 </h4>


                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="new-booking.php" target="_blank">
                        <div class="col-md-3 four-grid">
                            <div class="four-agileinfo">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
                                </div>
                                <div class="four-text">
                                    <h3>New Bookings</h3>
                                    <h4>6</h4>

                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="completed-booking.php" target="_blank">
                        <div class="col-md-3 four-grid">
                            <div class="four-wthree">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
                                </div>
                                <div class="four-text">
                                    <h3>Completed Bookings</h3>
                                    <h4>7</h4>

                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="manage-enquires.php" target="_blank">
                        <div class="col-md-3 four-grid">
                            <div class="four-w3ls">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
                                </div>
                                <div class="four-text">
                                    <h3>Enquiries</h3>
                                    <h4>8</h4>

                                </div>

                            </div>
                        </div>
                    </a>

                    <div class="clearfix"></div>
                </div>

                <div class="four-grids">
                    <a href="managecar-washingpoints.php" target="_blank">
                        <div class="col-md-3 four-grid">
                            <div class="four-w3ls">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
                                </div>
                                <div class="four-text">
                                    <h3>Washing Points</h3>
                                    <h4>6</h4>

                                </div>

                            </div>
                        </div>
                    </a>

                    <div class="clearfix"></div>
                </div>
                <!--//four-grids here-->


                <div class="inner-block">

                </div>
                <!--inner block end here-->
                <!--copy rights start here-->
                <div class="copyrights">
                    <p>© 2025 CWMS. All Rights Reserved | <a href="#">CWMS</a> </p>
                </div>
            </div>
        </div>

        <!--/sidebar-menu-->
        <div class="sidebar-menu">
            <header class="logo1">
                <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
            </header>
            <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
            <div class="menu">
                <ul id="menu">
                    <li><a href="./admin-dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span>
                            <div class="clearfix"></div>
                        </a></li>

                    <li id="menu-academico"><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Washing Points</span> <span class="fa fa-angle-right" style="float: right"></span>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="addcar-washpoint.php">Add</a></li>
                            <li id="menu-academico-avaliacoes"><a href="managecar-washingpoints.php">Manage</a></li>
                        </ul>
                    </li>

                    <li><a href="add-booking.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Add Car Wash Booking</span>
                            <div class="clearfix"></div>
                        </a></li>


                    <li id="menu-academico"><a href="#"><i class="fa fa-files-o" aria-hidden="true"></i><span>Car Washing Booking</span> <span class="fa fa-angle-right" style="float: right"></span>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="new-booking.php">New</a></li>
                            <li id="menu-academico-avaliacoes"><a href="completed-booking.php">Completed</a></li>
                            <li id="menu-academico-avaliacoes"><a href="all-bookings.php">All</a></li>
                        </ul>
                    </li>



                    <li><a href="manage-enquires.php"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Manage Enquiries</span>
                            <div class="clearfix"></div>
                        </a></li>
                    <li id="menu-academico"><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="about.php">About</a></li>
                            <li id="menu-academico-avaliacoes"><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <script>
        var toggle = true;

        $(".sidebar-icon").click(function() {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({
                    "position": "absolute"
                });
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                    $("#menu span").css({
                        "position": "relative"
                    });
                }, 400);
            }

            toggle = !toggle;
        });
    </script>
    <!--js -->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- /Bootstrap Core JavaScript -->
    <!-- morris JavaScript -->
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.js"></script>
    <script>
        $(document).ready(function() {
            //BOX BUTTON SHOW AND CLOSE
            jQuery('.small-graph-box').hover(function() {
                jQuery(this).find('.box-button').fadeIn('fast');
            }, function() {
                jQuery(this).find('.box-button').fadeOut('fast');
            });
            jQuery('.small-graph-box .box-close').click(function() {
                jQuery(this).closest('.small-graph-box').fadeOut(200);
                return false;
            });

            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }

            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
                behaveLikeLine: true,
                gridEnabled: false,
                gridLineColor: '#dddddd',
                axes: true,
                resize: true,
                smooth: true,
                pointSize: 0,
                lineWidth: 0,
                fillOpacity: 0.85,
                data: [{
                        period: '2014 Q1',
                        iphone: 2668,
                        ipad: null,
                        itouch: 2649
                    },
                    {
                        period: '2014 Q2',
                        iphone: 15780,
                        ipad: 13799,
                        itouch: 12051
                    },
                    {
                        period: '2014 Q3',
                        iphone: 12920,
                        ipad: 10975,
                        itouch: 9910
                    },
                    {
                        period: '2014 Q4',
                        iphone: 8770,
                        ipad: 6600,
                        itouch: 6695
                    },
                    {
                        period: '2015 Q1',
                        iphone: 10820,
                        ipad: 10924,
                        itouch: 12300
                    },
                    {
                        period: '2015 Q2',
                        iphone: 9680,
                        ipad: 9010,
                        itouch: 7891
                    },
                    {
                        period: '2015 Q3',
                        iphone: 4830,
                        ipad: 3805,
                        itouch: 1598
                    },
                    {
                        period: '2015 Q4',
                        iphone: 15083,
                        ipad: 8977,
                        itouch: 5185
                    },
                    {
                        period: '2016 Q1',
                        iphone: 10697,
                        ipad: 4470,
                        itouch: 2038
                    },
                    {
                        period: '2016 Q2',
                        iphone: 8442,
                        ipad: 5723,
                        itouch: 1801
                    }
                ],
                lineColors: ['#ff4a43', '#a2d200', '#22beef'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });


        });
    </script>
</body>

</html>