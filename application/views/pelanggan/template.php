<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>Pelanggan Home PT CAHAYA MAKMUR</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />      
 <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url();?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url();?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
  
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/chosen-bootstrap/chosen/chosen.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2_metro.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/clockface/css/clockface.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/jquery-multi-select/css/multi-select-metro.css" />
  <link href="<?php echo base_url();?>assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2_metro.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/data-tables/DT_bootstrap.css" />

  <link href="<?php echo base_url();?>assets/css/pages/inbox.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/css/pages/error.css" rel="stylesheet" type="text/css"/>



  <!-- END PAGE LEVEL STYLES -->
  <link rel="shortcut icon" href="favicon.ico" />

  <script src="<?php echo base_url();?>assets/scripts/jquery-1.8.3.js"></script>  
</head>
<body class="page-header-fixed">
  <!-- BEGIN HEADER -->   
  <div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
      <div class="container-fluid">
        <!-- BEGIN LOGO -->
        <a class="brand" href="<?php echo base_url();?>adminweb/home">
          <?php
          $query = $this->db->query("select * from tbl_logo");
          foreach ($query->result_array() as $value) {
            $logo = $value['gambar'];
          }
          ?>
        <img  src="<?php echo base_url();?>images/logo/<?php echo $logo;?>" alt="logo" width="130px" />
        </a>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
        <img src="<?php echo base_url();?>assets/img/menu-toggler.png" alt="" />
        </a>          
        <!-- END RESPONSIVE MENU TOGGLER -->            
        <!-- BEGIN TOP NAVIGATION MENU -->              
        <ul class="nav pull-right">

         
                     
          <!-- BEGIN USER LOGIN DROPDOWN -->
          <li class="dropdown user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <img alt="" src="<?php echo base_url();?>assets/img/avatar_small.png" />
            <i class="icon-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <!-- <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
              <li class="divider"></li> -->
              <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a></li>
              <li><a href="<?php echo base_url();?>home/logout"><i class="icon-key"></i> Log Out</a></li>
            </ul>
          </li>
          <!-- END USER LOGIN DROPDOWN -->
          <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU --> 
      </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
  </div>
  <!-- END HEADER -->
  <!-- BEGIN CONTAINER -->
  <div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar nav-collapse collapse">
      <!-- BEGIN SIDEBAR MENU -->        
      <ul class="page-sidebar-menu">
        
        <li class="start active">
          <a href="<?php echo base_url();?>adminweb/home">
          <i class="icon-home"></i> 
          <span class="title">Home</span>
          <span class="selected"></span>
          </a>
        </li>
        <li >
              <a href="<?php echo base_url('home/data_pemesanan/'.$this->session->userdata('id_user'))?>">
              Status Pemesanan</a>
            </li>


        
       

        <!-- <li >
          <a href="javascript:;">
          <i class="icon-bookmark-empty"></i> 
          <span class="title">Gallery</span>
          <span class="arrow "></span>
          </a>
          <ul class="sub-menu">
            <li >
              <a href="<?php echo base_url();?>adminweb/kategorigaleri">
              Album</a>
            </li>
            <li >
              <a href="<?php echo base_url();?>adminweb/galeri">
              Gallery</a>
            </li>
            
          </ul>
        </li> -->
      
        
        
        
        
        
        
      </ul>
      <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div class="page-content">
      <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <div id="portlet-config" class="modal hide">
        <div class="modal-header">
          <button data-dismiss="modal" class="close" type="button"></button>
          <h3>Widget Settings</h3>
        </div>
        <div class="modal-body">
          Widget settings form goes here
        </div>
      </div>
      <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <!-- BEGIN PAGE CONTAINER-->
      <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
          <div class="span12">
               
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
              
            </h3>
            <ul class="breadcrumb">
              <li>
                <i class="icon-home"></i>
                <a href="<?php echo base_url();?>adminweb/home">Home</a> 
                <i class="icon-angle-right"></i>
              </li>
             <!--  <li><a href="#">Dashboard</a></li> -->
              <li class="pull-right no-text-shadow">
                <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
                  <i class="icon-calendar"></i>
                  <span></span>
                  <i class="icon-angle-down"></i>
                </div>
              </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
          </div>
        </div>
        <!-- END PAGE HEADER-->
        <div id="dashboard">
          
          
            
          <?php echo $contents; ?> 
          
          
          
        </div>
      </div>
      <!-- END PAGE CONTAINER-->    
    </div>
    <!-- END PAGE -->
  </div>
  <!-- END CONTAINER -->
  <!-- BEGIN FOOTER -->
  <div class="footer">
    <div class="footer-inner">
     PT CAHAYA MAKMUR
    </div>
    <div class="footer-tools">
      <span class="go-top">
      <i class="icon-angle-up"></i>
      </span>
    </div>
  </div>
  <!-- END FOOTER -->
  <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
  <!-- BEGIN CORE PLUGINS -->  


  <script src="<?php echo base_url();?>assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
  <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
  <script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
  <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
  <script src="assets/plugins/excanvas.min.js"></script>
  <script src="assets/plugins/respond.min.js"></script>  
  <![endif]-->   
    <!-- END CORE PLUGINS -->
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/select2/select2.min.js"></script>
  
  <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>   
  <script src="<?php echo base_url();?>assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
  <script src="<?php echo base_url();?>assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 
  
   <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
  <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/select2/select2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/data-tables/jquery.dataTables.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/data-tables/DT_bootstrap.js"></script>
 
  <!-- END PAGE LEVEL PLUGINS -->
  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="<?php echo base_url();?>assets/scripts/app.js"></script>
  <script src="<?php echo base_url();?>assets/scripts/ui-modals.js"></script>
  <script src="<?php echo base_url();?>assets/scripts/form-components.js"></script> 
  <script src="<?php echo base_url();?>assets/scripts/table-editable.js"></script> 

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>

  
      
  <!-- END PAGE LEVEL SCRIPTS -->
  <script>
    jQuery(document).ready(function() {       
       // initiate layout and plugins
       App.init();
       UIModals.init();
       FormComponents.init();
       TableEditable.init();
      

    });

    


  </script>
  <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>