<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="theme-color" content="#4caf50">
		<title>Agropedia</title>
		<link rel="icon" href="assets/img/icon.png">
		<link href='assets/app/css/framework7.material.css' rel='stylesheet' type='text/css'>
		<link href='assets/app/css/framework7.material.colors.css' rel='stylesheet' type='text/css'>
		<link href='assets/app/css/material-icons.css' rel='stylesheet' type='text/css'>
		<link href='assets/app/my-app/my-app.css' rel='stylesheet' type='text/css'>
	</head>
	<body class="theme-green">
		<div class="statusbar-overlay"></div>
		<div class="panel-overlay"></div>
		<div class="panel panel-left panel-cover">
			<div class="view">
				<div class="pages">
					<div data-page="panel-left" class="page">
						<div class="page-content">
							<a href="user" class="link close-panel">
								<div class="content-block">
									<div class="profil-picture">
										<img src="photo_profil/unknown.png" class="message-avatar" />
									</div>
									<div>Kamu belum login</div>
									<div class="text-sm">Klik di sini untuk login</div>
								</div>
							</a>
							<div class="list-block">
								<ul>
									<li>
										<a href="app/profil_saya" class="link close-panel login-class must-login">
											<div class="item-content">
												<div class="item-media"><i class="icon material-icons">person</i></div>
												<div class="item-inner">
													<div class="item-title">Profil Saya</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="app/iklan_saya" class="link close-panel login-class must-login">
											<div class="item-content">
												<div class="item-media"><i class="icon material-icons">widgets</i></div>
												<div class="item-inner">
													<div class="item-title">Iklan Saya</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="user/pg/pengaturan" class="link close-panel">
											<div class="item-content">
												<div class="item-media"><i class="icon material-icons">settings</i></div>
												<div class="item-inner">
													<div class="item-title">Pengaturan</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="app/faq" class="link close-panel">
											<div class="item-content">
												<div class="item-media"><i class="icon material-icons">help_outline</i></div>
												<div class="item-inner">
													<div class="item-title">FAQ</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="user/pg/hubungi_kami" class="link close-panel">
											<div class="item-content">
												<div class="item-media"><i class="icon material-icons">record_voice_over</i></div>
												<div class="item-inner">
													<div class="item-title">Hubungi Kami</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="user/pg/tentang_app" class="link close-panel">
											<div class="item-content">
												<div class="item-media"><i class="icon material-icons">error_outline</i></div>
												<div class="item-inner">
													<div class="item-title">Tentang Agropedia</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="market://details?id=com.almanshurin.agropedia" class="link close-panel external">
											<div class="item-content">
												<div class="item-media"><i class="icon material-icons">android</i></div>
												<div class="item-inner">
													<div class="item-title">Install App</div>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="views">
			<div class="view view-main">
				<div class="pages navbar-fixed">
					<div data-page="intro" class="page">	
						<div class="page-content bg-deeppurple color-gray">
							<div class="intro">
								<img src="timthumb.php?src=<?php echo(base_url()) ?>assets/img/icon.png&w=100&h=100&q=1" class="lazy lazy-fadeIn"/><br />									
								<b class="color-white" style="font-size: 30px">Agropedia</b><br />
								<div class="progressbar-infinite"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="login-screen">
			<div class="view">
				<div class="page navbar-transparent">
					<div class="navbar">
						<div class="navbar-inner">
							<div class="left">
								<a href="#" class="link close-login-screen icon-only"><i class="icon material-icons color-black">close</i></a>
							</div>
							<div class="center">Lupa Password</div>
						</div>
					</div>
					<div class="page-content login-screen-content" style="padding-top: 50px">
						<div class="content-block">
							<div class="list-block-label color-gray">Masukkan email Anda untuk mendapatkan link ganti password.</div>
						</div>
						<form>
							<div class="list-block inputs-list">
								<ul>
									<li class="item-content">
										<div class="item-inner">
											<div class="item-title floating-label">Email</div>
											<div class="item-input">
												<input type="text" name="email" placeholder="Email">
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="content-block" style="padding:50px 10px 0 10px;">
								<a href="#" class="button button-big button-raised button-fill">Kirim</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="popover profil-menu">
			<div class="popover-inner">
				<div class="list-block">
					<ul>
						<li><a href="user/pg/profil_edit" class="list-button close-popover item-link">Edit Profil</a></li>
						<li><a href="#" class="list-button close-popover item-link">Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
		<script src='assets/app/js/framework7.js'></script>
		<script src='assets/app/my-app/my-app.js'></script>
	</body>
</html>