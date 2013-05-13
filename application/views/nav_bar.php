<html lang="en"><head>
    <meta charset="utf-8">
    <title>Template · Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 0px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
      .carousel  {
	height: 500px;
	width: 998px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>
<!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">
	<div class="row-fluid">
        	<div class="span10">
			<h3  class="muted">Uzmanlık Alanı Veritabanı Sistemi</h3>
		</div>
		
	</div>
	<div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href=<?=site_url('/'); ?>>Anasayfa</a></li>
                <li><a href=<?=site_url('home/about'); ?>>Hakkımızda</a></li>
                <li><a href=<?=site_url('home/contact'); ?>>İletişim</a></li>
               <li><a href=<?=site_url('home/help'); ?>>Yardım</a></li>
                 <!--<li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>-->
      
			<? if ($this->session->userdata('logged_in') == FALSE): ?>
<!-- <li><a href="<?=site_url('home/register'); ?>" class="navbar-link">Kayıt Ol</a></li> -->
<li><a href="<?=site_url('login'); ?>" class="navbar-link">Akademisyen Girişi</a></li>
<? else: ?>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #32b0fc;">
Profiline hoşgeldin <? echo $this->session->userdata('username') ?> <b class="caret"></b>
</a>
<? if ($this->session->userdata('user_type') == 1): ?>
<ul class="dropdown-menu">
<li><a href="<?=site_url('home/profile'); ?>" >Profil Sayfası</a></li>
<li><a href="<?=site_url('login/logout'); ?>">Çıkış</a></li>
</ul>
<? else: ?>
<ul class="dropdown-menu">
<li><a href="<?=site_url('home/profile_expert'); ?>" >Profil Sayfası</a></li>
<li><a href="<?=site_url('login/logout'); ?>">Çıkış</a></li>
</ul>
<? endif; ?>
</li>
<? endif; ?>
	
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
        
      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
