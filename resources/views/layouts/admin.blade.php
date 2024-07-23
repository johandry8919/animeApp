
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin &amp; Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->


 

    <link href="{{ asset('admin/images/brand/favicon.ico') }}" rel="stylesheet">

        <!-- FAVICON -->

        

    <!-- TITLE -->
    <title>@yield('title')</title>

    <!-- BOOTSTRAP CSS -->

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link href="{{ asset('admin/css/dark-style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/skin-modes.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/colors/color1.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet">
    <style type="text/css" id="operaUserStyle"></style>
    <link href="sidebars.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>



<body class="app sidebar-mini ltr light-mode">
    <div class="horizontalMenucontainer">

     
    <!-- GLOBAL-LOADER -->
    <div id="global-loader" style="display: none;">
        <img src="{{ asset('admin/images/loader.svg') }}" class="loader-img" alt="Loader">
        
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

           

            <!-- app-Header -->

            @extends('layouts/admin/heade')
           
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->

            @extends('layouts/admin/sidebar')
            <!--app-content open-->
            <div  class="main-content app-content mt-5 container p-5">
                 @yield('adminConte')
            </div>
            <!--app-content close-->

        </div>


        <!-- FOOTER -->

        @extends('layouts/admin/footer')
      
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->


    <!-- JQUERY JS -->

    <script src="{{ asset('admin/js/jquery.min.js') }}" ></script>


    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('admin/plugins/bootstrap/js/popper.min.js') }}" ></script>
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}" ></script>
  

    <!-- SPARKLINE JS-->
 
    <script src="{{ asset('admin/js/jquery.sparkline.min.js') }}" ></script>

    <!-- Sticky js -->


    <script src="{{ asset('admin/js/sticky.js') }}" ></script>

    <!-- CHART-CIRCLE JS-->

    <script src="{{ asset('admin/js/circle-progress.min.js') }}" ></script>

    <!-- PIETY CHART JS-->

     
    <script src="{{ asset('admin/plugins/peitychart/jquery.peity.min.js') }}" ></script>
    <script src="{{ asset('admin/plugins/peitychart/peitychart.init.js') }}" ></script>


    <!-- SIDEBAR JS -->
 

    <script src="{{ asset('admin/plugins/sidebar/sidebar.js') }}" ></script>

    <!-- Perfect SCROLLBAR JS-->
  


    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{ asset('admin/plugins/chart/Chart.bundle.js') }}" ></script>
    <script src="{{ asset('admin/plugins/chart/rounded-barchart.js') }}" ></script>
    <script src="{{ asset('admin/plugins/chart/utils.js') }}" ></script>

    <!-- INTERNAL SELECT2 JS -->
  

    <script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}" ></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{ asset('admin/plugins/datatable/js/jquery.dataTables.min.js') }}" ></script>
    <script src="{{ asset('admin/plugins/datatable/js/dataTables.bootstrap5.js') }}" ></script>
    <script src="{{ asset('admin/plugins/datatable/dataTables.responsive.min.js') }}" ></script>


    <!-- INTERNAL APEXCHART JS -->
    <script src="{{ asset('admin/js/charts.js') }}" ></script>



    <!-- C3 CHART JS -->
    <script src="{{ asset('admin/plugins/charts-c3/d3.v5.min.js') }}" ></script>
    <script src="{{ asset('admin/plugins/charts-c3/c3-chart.js') }}" ></script>


    <!-- CHART-DONUT JS -->


    <!-- INTERNAL Flot JS -->

    <script src="{{ asset('admin/plugins/flot/jquery.flot.js') }}" ></script>
    <script src="{{ asset('admin/plugins/flot/jquery.flot.fillbetween.js') }}" ></script>
    <script src="{{ asset('admin/plugins/flot/chart.flot.sampledata.js') }}" ></script>
    <script src="{{ asset('admin/plugins/flot/dashboard.sampledata.js') }}" ></script>


    <!-- INTERNAL Vector js -->
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{ asset('admin/plugins/sidemenu/sidemenu.js') }}" ></script>
    <script src="{{ asset('admin/plugins/sidebar/sidebar.js') }}" ></script>



    <!-- INTERNAL INDEX JS -->
 
    <script src="{{ asset('admin/js/index1.js') }}" ></script>

    <!-- Color Theme js -->


    <script src="{{ asset('admin/js/themeColors.js') }}" ></script>


 

    <!-- CUSTOM JS -->
    <script src="{{ asset('admin/js/custom.js') }}" ></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></div><div class="jvectormap-tip"></div>
</body>
</html>
