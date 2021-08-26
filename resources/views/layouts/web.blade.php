
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Advanced form elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{url('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{url('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/iCheck/all.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="{{url('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{url('plugins/timepicker/bootstrap-timepicker.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{url('bower_components/select2/dist/css/select2.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('dist/css/skins/_all-skins.min.css')}}">

  <style>
        body::-webkit-scrollbar {
            width: 12px;               /* width of the entire scrollbar */
        }

        body::-webkit-scrollbar-track {
            background: #fde5ba;        /* color of the tracking area */
        }
        .skin-blue .main-header .logo{
            background-color: #1e1167 !important;
        }
        .skin-blue .main-header .navbar {
            background-color: #1e1167 !important;
        }
        .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
            background-color: #1e1167;
        }
        .skin-blue .sidebar-menu>li.header {
            color: #fff;
            background: #291d6b;
        }
        body::-webkit-scrollbar-thumb {
            background-color: #9999c1;
            border-radius: 20px;
            border: 3px solid #fde5ba;
        }
        .skin-blue .sidebar a {
            color: #FFF;
        }
        .skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li.menu-open>a {
            color: #FFF;
            background: #6e6798;
        }
        .skin-blue .sidebar-menu>li>.treeview-menu {
            margin: 0 1px;
            background: #fff;
        }
        .skin-blue .sidebar-menu .treeview-menu>li.active>a, .skin-blue .sidebar-menu .treeview-menu>li>a:hover {
            color: #5d179c;
        }
        .skin-blue .sidebar-menu .treeview-menu>li>a {
            color: #000;
        }
        .treeview-menu>li {
            margin: 0;
            
        }
        .skin-blue .sidebar-menu>li {
            color: #FFF;
            background: #1e1167;
        }
        .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
            background-color: #2f2567;
        }
        .user-block .username, .user-block .description, .user-block .comment {
            display: block;
            margin-left: 0px;
        }
        .loadnya {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1070;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgb(0 0 0 / 55%);
            overflow-x: hidden;
            transition: transform .9s;
        }

        .loadnya-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
            color:#fff;
            font-size:20px;
        }
        @media only screen and (min-width: 600px) {

            .main-sidebar {
                position: absolute;
                top: 0;
                left: 0;
                padding-top: 50px;
                min-height: 100%;
                width: 300px;
                z-index: 810;
                -webkit-transition: -webkit-transform .3s ease-in-out,width .3s ease-in-out;
                -moz-transition: -moz-transform .3s ease-in-out,width .3s ease-in-out;
                -o-transition: -o-transform .3s ease-in-out,width .3s ease-in-out;
                transition: transform .3s ease-in-out,width .3s ease-in-out;
            }
            #judul-magazine{
                background:#232323ba;
                color:#fff;
                height:100px;
                width:100%;
                text-transform: uppercase;
            }
            #first-magazine{
                background-color:#d1d1e4;
                height:300px;
                
                padding: 0px;
                text-align:center;
                font-size:12px;
            }
            #list-magazine-utama{
                background-color:#d1d1e4;
                height:360px;
                border:solid 5px #fff;
                padding: 0px;
                text-align:center;
                font-size:12px;
            }
            #list-magazine{
                background-color:#d1d1e4;
                height:240px;
                border:solid 5px #fff;
                padding: 0px;
                text-align:center;
                font-size:12px;
            }
            #detmagazine{
                
                height:140px;
                margin:1%;
            }
            #detmagazine-utama{
                
                height:250px;
                margin:1%;
            }
            .content-wrapper, .main-footer {
                -webkit-transition: -webkit-transform .3s ease-in-out,margin .3s ease-in-out;
                -moz-transition: -moz-transform .3s ease-in-out,margin .3s ease-in-out;
                -o-transition: -o-transform .3s ease-in-out,margin .3s ease-in-out;
                transition: transform .3s ease-in-out,margin .3s ease-in-out;
                margin-left: 300px;
                z-index: 820;
            }
        }
        @media only screen and (max-width: 590px) {
            

        }
  </style>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div id="loadnya" class="loadnya">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="loadnya-content">
        <i class="fas fa-spinner fa-pulse"></i> Proses...........
    </div>
</div>
<div class="wrapper">

  <header class="main-header" style="border-bottom: solid 1px #362882;">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{url('img/ksks.png')}}"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      @include('layouts.side-atas')
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="background: #291d6b;">
        <div class="pull-left image">
          <img src="{{url('img/maskot.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <h4>Jendela Transformasi</h4>
          <a href="#"><i class="fa fa-circle text-success"></i> {{date('d F Y')}}</a>
        </div>
      </div>
      
      
      @include('layouts.side')
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Select2 -->
<script src="{{url('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{url('plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{url('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{url('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- date-range-picker -->
<script src="{{url('bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{url('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{url('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{url('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- bootstrap time picker -->
<script src="{{url('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{url('plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('dist/js/demo.js')}}"></script>
<!-- Page script -->
<script src="{{url('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{url('bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
@stack('ajax')
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
