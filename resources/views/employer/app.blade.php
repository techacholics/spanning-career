<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title> Home </title>
  <link rel="icon" type="image/png" href="app-assets/images/logo/cbitss.png">
  <link href="css/css.css" rel="stylesheet">
  <!-- Start: Vendor CSS -->
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/toggle/switchery.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/switch.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-switch.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/chartist.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/timeline/vertical-timeline.css">

  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">

  <!-- END: Theme CSS-->

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/chat-application.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/users.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/timeline.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/pickers/daterange/daterange.min.css">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END: Custom CSS-->

  <!-- BEGIN: Font Awsesome CSS-->
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/customs.css">
  <link rel="stylesheet" type="text/css" href="css/css.css">
  <!-- End: Font Awsesome CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
  @include('employer.sidebar')

  <!-- BEGIN: Content-->
  <div class="app-content content" id="main-container">
    <div class="content-wrapper">

      @yield('content')

      <!-- BEGIN: Footer -->
      <footer class="footer footer-static footer-light navbar-border navbar-shadow fixed-bottom">
        <!-- <a class="homebtn btn btn-bg-gradient-x-purple-blue btn-glow white" href="index.php"><i class="fas fa-home"></i>&nbsp;Home</a> -->
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
          <span class="float-md-left d-block d-md-inline-block">2020 &copy; Copyright Apna Design</span>
        </div>
      </footer>
      <!-- END: Footer-->
      <!-- BEGIN: Vendor JS-->
      <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
      <script src="css/customstyle.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
      <script src="app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
      <!-- BEGIN Vendor JS-->

      <!-- BEGIN: Page Vendor JS-->
      <script src="app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
      <!-- END: Page Vendor JS-->

      <script src="app-assets/vendors/js/forms/repeater/jquery.repeater.min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>

      <!-- BEGIN: Theme JS-->
      <script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
      <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
      <!-- END: Theme JS-->
      <script src="app-assets/js/scripts/forms/wizard-steps.min.js" type="text/javascript"></script>
      <script src="app-assets/js/scripts/forms/form-repeater.min.js" type="text/javascript"></script>

      <!-- Data Sources -->
      <script src="app-assets/js/scripts/tables/datatables-extensions/datatables-sources.min.js" type="text/javascript"></script>
      <!-- Data Sources Ends -->
      <!-- <script>
        const urlParams = new URLSearchParams(window.location.search);
        const myParam = urlParams.get('myParam');
        // 
        function getParameterByName(name, url = window.location.href) {
          name = name.replace(/[\[\]]/g, '\\$&');
          var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
          if (!results) return null;
          if (!results[2]) return '';
          return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }
        // 
        var userid = getParameterByName('fid');
        if (userid == 'login') {
          // alert("Login Function Called");
          login();
        } else if (userid == 'register') {
          // alert("Register Function Called");
          register();
        } else if (userid == 'postjob') {
          // alert("Post Job Function Called");
          postjob();
        } else if (userid == 'uprofile') {
          // alert("Profile Function Called");
          userprofile();
        } else if (userid == 'editprofile') {
          // alert("Profile Function Called");
          editprofile();
        }
      </script> -->
</body>
<!-- END: Body-->


</html>