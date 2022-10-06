<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       

        <title>Ubold - Responsive Admin Dashboard Template</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/assets/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/assets/plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('admin/assets/js/modernizr.min.js') }}"></script>
		


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        @include('admin.layouts.header')
        <!-- Top Bar End -->
  
        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layouts.leftsidebar')
        <!-- Left Sidebar End -->
  
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
          <!-- Start content -->
         @yield('content')
          <!-- content -->
          @include('admin.layouts.footer')

        </div>
  
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
  
        <!-- Right Sidebar -->
       @include('admin.layouts.sidebar')
        <!-- /Right-bar -->
      </div>
      <!-- END wrapper -->
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/detect.js')}}"></script>
        <script src="{{asset('admin/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('admin/assets/js/waves.js')}}"></script>
        <script src="{{asset('admin/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>
        
        <script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
        
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.scroller.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.colVis.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/datatables/dataTables.fixedColumns.min.js')}}"></script>
        
        <script src="{{asset('admin/assets/pages/datatables.init.js')}}"></script>
        
        
        <script src="{{asset('admin/assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.app.js')}}"></script>
        
        
        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "assets/plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();
        
        </script>
        
    </body>

<!-- Mirrored from coderthemes.com/ubold_2.1/purple/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2016 04:41:54 GMT -->
</html>