<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
// error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

function o($string){
	echo($string);
}
function ob($url = '', $echo = 1){
//	$base = base_url()."{$url}";
	$base = $url;
	if($echo)
		o($base);
	else 
		return $base;
}
function isNotHTTPS(){
	if(empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' && $_SERVER['SERVER_NAME'] != 'localhost')
		return true;
}
function debug($variable){
	echo "<pre>".print_r($variable, true)."</pre>";
	die();
}
function debugAjax($variable, $file = 'debug.txt'){
	file_put_contents($file, print_r($variable, true));
}
function getBottomToolbar($page){
	$pages[$page] = 'bg-lightgreen';
	echo('
						<div class="toolbar toolbar-bottom tabbar">
							<div class="toolbar-inner">
								<a href="app/home" class="link '.$pages['home'].'">
									<i class="icon material-icons">home</i>
									<span class="toolbar-label text-sm">Home</span>
								</a>
								<a href="app/kategori" class="link '.$pages['kategori'].'">
									<i class="icon material-icons">apps</i>
									<span class="toolbar-label text-sm">Kategori</span>
								</a>
								<a href="user/pg/iklan_input" class="link bg-purple">
									<i class="icon material-icons">add_a_photo</i>
									<span class="toolbar-label text-sm">Jual</span>
								</a>
								<a href="user/pg/pesan" class="link login-class must-login '.$pages['pesan'].'">
									<i class="icon material-icons">chat_bubble</i>
									<span class="toolbar-label text-sm">Pesan</span>
								</a>
								<a href="user/pg/favorit" class="link login-class must-login '.$pages['favorit'].'">
									<i class="icon material-icons">favorite</i>
									<span class="toolbar-label text-sm">Favorit</span>
								</a>
							</div>
						</div>
	');
}
//function tim($file, $echo = 1){
//	$timthumb = (ob(null,0).'timthumb.php?src='.ob(null,0).$file);
//	if($echo) 
//		echo $timthumb;
//	else 
//		return $timthumb;
//}
//function css($path, $echo = 1){
//	$css = "<link href='".base_url()."assets/$path.css' rel='stylesheet' type='text/css'>\n";
//	if($echo)
//		o($css);
//	else 
//		return $css;
//}
//function js($path, $echo = 1){
//	$js = "<script src='".base_url()."assets/$path.js'></script>\n";
//	if($echo)
//		o($js);
//	else 
//		return $js;
//}	
//function getDefaultCSS($theme){
//	echo('
//    <!-- <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet" type="text/css"> -->
//    <link rel="icon" href="'.ob('assets/img/icon.png', 0).'">
//    '.css('app/css/framework7.material', 0).'
//    '.css('app/css/framework7.material.colors', 0).'
//    '.css('app/css/material-icons', 0).'
//    '.css('app/my-app/my-app', 0).'
//	');
//}
//function getDefaultJS(){
//	echo('
//    '.js('app/js/framework7', 0).'
//    '.js('app/my-app/my-app', 0).'
//	');
//}  
//function getHeader($user = null, $page = '', $sistem = null){
//	echo('
//    <!-- Main Header -->
//    <header class="main-header">
//      <!-- Logo -->
//      <a class="logo hidden-xs">
//        <!-- mini logo for sidebar mini 50x50 pixels -->
//        <span class="logo-mini"><b>'.shortEm($sistem->daerah).'</b></span>
//        <!-- logo for regular state and mobile devices -->
//        <span class="logo-lg"><b>'.$sistem->daerah.'</b> </span>
//      </a>
//      <!-- Header Navbar -->
//      <nav class="navbar navbar-static-top" role="navigation">
//        <!-- Sidebar toggle button-->
//        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
//          <span class="sr-only">Toggle navigation</span>
//        </a>
//        <a>
//          <span class="logos">'.$page.'</span>
//        </a>
//        <!-- Navbar Right Menu -->
//        <div class="navbar-custom-menu">
//          <ul class="nav navbar-nav">
//            <!-- User Account Menu -->
//            <li class="dropdown user user-menu">
//              <!-- Menu Toggle Button -->
//              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
//                <!-- The user image in the navbar-->
//                <img src="'.tim("photo_profil/{$user->photo_profil}&w=100&h=100",0).'" class="user-image">
//                <!-- hidden-xs hides the username on small devices so only the image appears. -->
//                <span class="hidden-xs">'.$user->username.'</span>
//              </a>
//              <ul class="dropdown-menu">
//                <!-- The user image in the menu -->
//                <li class="user-header">
//                  <img src="'.tim("photo_profil/{$user->photo_profil}&w=100&h=100",0).'" class="img-circle">
//
//                  <p>
//                    '.$user->username.'
//                    <small>Login terakhir : '.($_COOKIE['last_login'] ? timespan(human_to_unix($_COOKIE['last_login']), now('Asia/Jakarta'), 2).' lalu' : 'Baru kali ini').'</small>
//                  </p>
//                </li>
//                <!-- Menu Footer-->
//                <li class="user-footer">
//                  <div class="pull-left">
//                    <a href="'.ob("sensus/profil_saya",0).'" class="btn btn-default btn-flat">Profil </a>
//                  </div>
//                  <div class="pull-right">
//                    <a href="'.ob('user/logout',0).'" class="btn btn-default btn-flat">Logout</a>
//                  </div>
//                </li>
//              </ul>
//            </li>
//          </ul>
//        </div>
//      </nav>
//    </header>
//    ');
//}  
//function getSidebar($page = 'home', $user){
//	$page = strtolower(str_replace(' ', '_', $page));
//	$active[$page] = 'active';
//	echo('
//    <!-- Left side column. contains the logo and sidebar -->
//    <aside class="main-sidebar">
//      <!-- sidebar: style can be found in sidebar.less -->
//      <section class="sidebar">
//        <!-- Sidebar Menu -->
//        <ul class="sidebar-menu">
//        	<li class="header">MENU NAVIGATION</b></li>
//          <li class="'.$active['home'].'"><a href="'.ob('sensus',0).'" ><i class="fa fa-dashboard"></i> <span>HOME</span></a></li>
//          <li class="'.$active['profil_saya'].'"><a href="'.ob('sensus/profil',0).'"><i class="fa fa-user"></i> <span>PROFIL SAYA</span></a></li>
//	');
//	if($user->tingkat == 'KELOMPOK' && $user->role != 'VIEW')
//		echo('
//          <li class="'.$active['input_orang'].'"><a href="'.ob('sensus/input_orang',0).'"><i class="fa fa-user-plus"></i> <span>INPUT ORANG</span></a></li>
//		');
//	echo('
//          <li class="'.$active['database_jm'].'"><a href="'.ob('sensus/laporan',0).'"><i class="fa fa-database"></i> <span>DATABASE JM</span></a></li>
//          <li class="treeview '.$active['kategori'].$active['pengurus'].'">
//            <a href="#"><i class="fa fa-book"></i> <span>DATA LAIN</span>
//              <span class="pull-right-container">
//                <i class="fa fa-angle-left pull-right"></i>
//              </span>
//            </a>
//            <ul class="treeview-menu">
//              <li class="'.$active['kategori'].'"><a href="'.ob('sensus/laporan_custom',0).'"><i class="fa fa-server"></i> KATEGORI</a></li>
//              <li class="'.$active['pengurus'].'"><a href="'.ob('sensus/laporan_dapukan',0).'"><i class="fa fa-sitemap"></i> PENGURUS</a></li>
//            </ul>
//          </li>
//	');
//	echo('		
//          <li class="treeview '.$active['config_sistem'].$active['kategori_usia'].$active['list_dapukan'].$active['list_tingkat'].$active['akun_user'].'">
//            <a href="#"><i class="fa fa-gears"></i> <span>KONFIGURASI</span>
//              <span class="pull-right-container">
//                <i class="fa fa-angle-left pull-right"></i>
//              </span>
//            </a>
//            <ul class="treeview-menu">
//	');
//	if($user->tingkat != 'KELOMPOK' && $user->role == 'ADMIN')
//		echo('
//          		<li class="'.$active['list_tingkat'].'"><a href="'.ob('admin/daftar_tingkat',0).'" ><i class="fa fa-bank"></i> LIST TINGKAT</a></li>
//		');
//	if($user->role == 'ADMIN')
//		echo('
//          		<li class="'.$active['akun_user'].'"><a href="'.ob('admin/daftar_user',0).'" ><i class="fa fa-users"></i> AKUN USER</a></li>
//		');
//	echo('
//              <li class="'.$active['list_dapukan'].'"><a href="'.ob('sensus/config_dapukan',0).'"><i class="fa fa-suitcase"></i> LIST DAPUKAN</a></li>
//              <li class="'.$active['kategori_usia'].'"><a href="'.ob('sensus/config_usia',0).'"><i class="fa fa-signal"></i> KATEGORI USIA</a></li>
//	');
//	if($user->tingkat == 'DAERAH' && $user->role == 'ADMIN')
//		echo('
//              <li class="'.$active['config_sistem'].'"><a href="'.ob('admin/config',0).'"><i class="fa fa-tv"></i> PENGATURAN SISTEM</a></li>
//		');
//	echo('
//            </ul>
//          </li>
//	');
//	echo('
//          <li class="'.$active['logout'].'"><a href="'.ob('user/logout',0).'"><i class="fa fa-sign-out"></i> <span>LOGOUT</span></a></li>
//        </ul>
//        <!-- /.sidebar-menu -->
//      </section>
//      <!-- /.sidebar -->
//    </aside>
//    ');
//}
//function getFooter(){
//	echo ('
//    <!-- Main Footer -->
//    <footer class="main-footer">
//      <!-- To the right -->
//      <div class="pull-right hidden-xs">
//        Versi 1.0
//      </div>
//      <!-- Default to the left -->
//      <strong class="hidden-xs">Developed by</strong> <a href="https://almanshurin.com" title="Jasa pembuatan aplikasi">Al-Manshurin Informatika</a>
//    </footer>
//    ');
//	echo('
//		<!-- Global site tag (gtag.js) - Google Analytics -->
//		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55492681-5"></script>
//		<script>
//			window.dataLayer = window.dataLayer || [];
//			function gtag(){dataLayer.push(arguments);}
//			gtag("js", new Date());
//
//			gtag("config", "UA-55492681-5");
//		</script>
//	');
//}
//function getDefaultModal(){
//	echo ('
//        <!-- Modal Popup Image Preview-->
//        <div id="myModalImage" class="modal modal-default fade" role="dialog" aria-labelledby="myModalImage" aria-hidden="true" tabindex="-1" >
//          <div class="modal-dialog" role="document" style="max-width:500px;">
//            <div class="modal-content">
//              <div class="modal-body" style="padding: 0">
//                <img src="" class="myModalImageSource" style="width: 100%;">
//                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">TUTUP (X)</span></button>
//              </div>
//            </div>
//          </div>
//        </div>       
//				<!-- Modal UnderConstruction -->
//				<div id="myModalUnderConstruction" class="modal modal-success fade" role="dialog">
//					<div class="modal-dialog">
//						<!-- Modal content-->
//						<div class="modal-content">
//							<div class="modal-header">
//								<button type="button" class="close" data-dismiss="modal">&times;</button>
//								<h4 class="modal-title">Under Construction</h4>
//							</div>
//							<div class="modal-body text-center">
//								<span class="fa fa-opera fa-5x fa-spin"></span>
//								<h2>Under Construction</h2>
//							</div>
//							<div class="modal-footer">
//								<a class="btn btn-primary btn-flat" data-dismiss="modal">
//									<i class="fa fa-times"></i> Tutup
//								</a>
//							</div>
//						</div>
//					</div>
//				</div> 
//				<!-- Modal Info -->
//				<div id="myModalInfo" class="modal modal-success fade" role="dialog">
//					<div class="modal-dialog">
//						<!-- Modal content-->
//						<div class="modal-content">
//							<div class="modal-header">
//								<button type="button" class="close" data-dismiss="modal">&times;</button>
//								<h4 class="modal-title"></h4>
//							</div>
//							<div class="modal-body text-center">
//								<i class="icon fa fa-5x fa-warning" id="myModalInfo-icon"></i> <br/><br/>    
//								<span id="myModalInfo-msg"></span>
//							</div>
//							<div class="modal-footer">
//								<a class="btn btn-primary btn-flat" data-dismiss="modal">
//									<i class="fa fa-times"></i> Tutup
//								</a>
//							</div>
//						</div>
//					</div>
//				</div> 
//        <!-- Modal Image Extension -->
//				<div id="myModalBlockedImage" class="modal modal-info fade" role="dialog">
//          <div class="modal-dialog">
//            <!-- Modal content-->
//            <div class="modal-content">
//              <div class="modal-header">
//                <button type="button" class="close" data-dismiss="modal">&times;</button>
//                <h4 class="modal-title">Warning!</h4>
//              </div>
//              <div class="modal-body">
//                <p>Maaf, file yang anda pilih bukan GAMBAR. Ekstensi yang diperbolehkan hanyalah <b>PNG, JPG, JPEG,</b> dan <b>GIF</b></p>
//              </div>
//              <div class="modal-footer">
//                <button type="button" class="btn btn-success" data-dismiss="modal">Oke</button>
//              </div>
//            </div>
//          </div>
//        </div>    
//				<!-- Modal Pilih Baris -->
//				<div id="myPilihBaris" class="modal modal-warning fade" role="dialog">
//					<div class="modal-dialog">
//						<!-- Modal content-->
//						<div class="modal-content">
//							<div class="modal-header">
//								<button type="button" class="close" data-dismiss="modal">&times;</button>
//								<h4 class="modal-title">WARNING</h4>
//							</div>
//							<div class="modal-body">
//								<p>Amsol minimal pilih 1 baris untuk melakukan operasi ini.</p>
//							</div>
//							<div class="modal-footer">
//								<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">
//									<span class="fa fa-check"></span> Oke
//								</button>
//							</div>
//						</div>
//					</div>
//				</div>
//    ');
//}
//function runDefaultJS(){
//	echo('
//      // init on startup
//      enBtn();
//			// show the table after rendered
//			$("table").removeClass("hidden");
//      // intialize the floatting button
//      $(document).click(function (event) {
//        if (!$(event.target).closest(".btn-floating").length) {
//          if ($(".btn-floating .toggle-content").is(":visible")) {
//            $(".btn-floating").removeClass("active");
//          }
//        } else {
//          if (!$(".btn-floating .toggle-content").is(":visible")) {
//            $(".btn-floating").addClass("active");
//          }          
//        }
//      });
//      // Date picker
//      if ( $.isFunction($.fn.datepicker) ) {
//        $(".datepicker").datepicker({
//          autoclose: true,
//          language: "id", 
//          format : "dd-mm-yyyy",
//          endDate: new Date(),
//          todayHighlight: true,
//        });
//      }
//      // Initialize Select2 Elements
//      if ( $.isFunction($.fn.select2) ) {
//        $(".select2").select2();
//      }
//      // Initialize inputmask
//      if ( $.isFunction($.fn.inputmask) ) {
//        $("[data-mask]").inputmask();
//      }
//      // image popup preview
//      $("img").on("click", function() {
//        if($(this).hasClass("popup")){
//          $(".myModalImageSource").attr("src", $(this).attr("src"));
//          $("#myModalImage").modal("show");
//        }
//      });     
//    ');
//}
?>