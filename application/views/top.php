<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>SMS Gateway SMA KP2 Bandung</title>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/font-awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.min.css">

    <!-- Metis Theme stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/validationEngine/css/validationEngine.jquery.css">
    <link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/ui.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/datatables/3/dataTables.bootstrap.css">
    <style type="text/css">
    thead{
      background: #ACADF9;
    } 
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="assets/lib/html5shiv/html5shiv.js"></script>
        <script src="assets/lib/respond/respond.min.js"></script>
        <![endif]-->

    <!--Modernizr 2.7.2-->
    <script src="<?php echo site_url()?>assets/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo site_url()?>bootstrap/js/jquery-1.10.3.min.js"></script>
    <link rel='icon' type='image/png' href='<?php echo base_url()?>upload/user/images.jpg'>
    <script src="<?php echo site_url()?>assets/lib/modernizr/modernizr.min.js"></script>
  </head>

  <body class="wide fullScreen">
    <div id="wrap">
      <div id="top">

        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
              </button>
              <a href="index.html" class="navbar-brand">
                <img src="<?php echo base_url()?>assets/img/logo.png" alt="">
              </a> 
            </header>
            <div class="topnav">
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                  <i class="glyphicon glyphicon-fullscreen"></i>
                </a> 
              </div>
            
              <div class="btn-group">
                <a href="<?php echo base_url()?>login/logout" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                  <i class="fa fa-power-off"></i>
                </a> 
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                  <i class="fa fa-bars"></i>
                </a> 
                <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip" class="btn btn-default btn-sm toggle-right"> <span class="glyphicon glyphicon-comment"></span>  </a> 
              </div>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

              <!-- .nav 
              <ul class="nav navbar-nav">
                <li> <a href="dashboard.html">Dashboard</a>  </li>
                <li class="active">
                  <a href="table.html">Tables</a> 
                </li>
                <li> <a href="file.html">File Manager</a>  </li>
                <li class='dropdown '>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Form Elements
                    <b class="caret"></b>
                  </a> 
                  <ul class="dropdown-menu">
                    <li> <a href="form-general.html">General</a>  </li>
                    <li> <a href="form-validation.html">Validation</a>  </li>
                    <li> <a href="form-wysiwyg.html">WYSIWYG</a>  </li>
                    <li> <a href="form-wizard.html">Wizard &amp; File Upload</a>  </li>
                  </ul>
                </li>
              </ul><!-- /.nav -->
            </div>
          </div><!-- /.container-fluid -->
        </nav><!-- /.navbar -->
        <!--<header class="head">
          <div class="search-bar">
            <form class="main-search" action="">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Live Search ...">
                <span class="input-group-btn">
            <button class="btn btn-primary btn-sm text-muted" type="button">
                <i class="fa fa-search"></i>
            </button>
        </span> 
              </div>
            </form><!-- /.main-search 
          </div><!-- /.search-bar 
          <div class="main-bar">
            <h3>
              <i class="fa fa-table"></i> Table</h3>
          </div><!-- /.main-bar 
        </header><!-- /.head -->
      </div><!-- /#top -->
      <div id="left">
        <div class="media user-media">
          <div class="user-media-toggleHover">
            <span class="fa fa-user"></span> 
          </div>
          <div class="user-wrapper">
            <a class="user-link" href="">
              <!--<img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">-->
              <img style="width:104;height:104" class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo base_url()?>upload/user/images.jpg">
              <span class="label labelhttps://www.youtube.com/watch?v=kvrdin0S5aM-danger user-label"></span> 
            </a> 
            <div class="media-body">
              <h5 class="media-heading"></h5>
              <ul class="list-unstyled user-info">
                <li> <a href=""></a>  </li>
                <li>
                  <br>
                  <small>
                    <i class=""></i>&nbsp;</small> 
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- #menu -->
        <ul id="menu" class="">
          <li class="nav-header">Menu</li>
          <li class="nav-divider"></li>
          
          <li class="nav-divider"></li>
          <?php $role=$this->session->userdata('id_role');
            $header=$this->db->query("select*from adm_menu join adm_akses on adm_akses.id_menu=adm_menu.id_menu where id_role='$role' and sub='0' and status='1'")->result();
            foreach($header as $header){
              $sub=$header->id_menu;
              $count=$this->db->query("select*from adm_menu join adm_akses on adm_akses.id_menu=adm_menu.id_menu where id_role='$role' and sub='$sub' and status='1'")->num_rows();
              if($count==0){
              ?>
              <li class="">
                <a href="<?php echo base_url()?><?php echo $header->controllers.'/'.$header->function;?>">
                  <i class="<?php echo $header->icon;?>"></i><span class="link-title"> <?php echo $header->nama_menu;?></span> 
                </a> 
              </li>
            <?php
              }else{?>
                <li class="">
                  <a href="#">
                    <i class="<?php echo $header->icon;?>"></i>
                    <span class="link-title">
                    <?php echo $header->nama_menu;?>
                  </span> 
                    <span class="fa arrow"></span> 
                  </a>                   
                  <ul>
                  <?php $sub_menu=$this->db->query("select*from adm_menu where sub='$sub'")->result();
                  foreach($sub_menu as $sm){?>
                    <li class="">
                      <a href="<?php echo base_url()?><?php echo $sm->controllers.'/'.$sm->function;?>">
                        <i class="<?php echo $sm->icon;?>"></i>&nbsp;<?php echo $sm->nama_menu;?></a> 
                    </li>
                  <?php
                  }
                  ?>                   
                  </ul>
                </li> 
         <?php }
            }
          ?>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
        </ul><!-- /#menu -->
      </div><!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner bgimage bg-gplaypattern" style="min-height:100%">