
<div data-page="profil_saya" class="page">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="left"><a href="#" class="back link icon-only"><i class="icon icon-back"></i></a></div>
			<div class="center">Profil Saya</div>
			<div class="right"><a href="#" data-popover=".profil-menu" class="link open-popover icon-only"><i class="icon material-icons">more_vert</i></a></div>
		</div>
	</div>
	<div class="page-content">
		<div class="profil">
			<div class="profil-banner bg-teal">
			</div>
			<div class="card">
				<div class="card-content card-top text-center"> 
					<div class="card-content-inner">
						<b><?php o($user_profile['name']) ?></b><br/>
						<span>Member sejak 03 Okt 2017</span>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-content text-center"> 
					<div class="card-content-inner">
						<p>Anda Login Dengan</p>
						<div class="chip">
							<div class="chip-media"><img src="timthumb.php?src=<?php echo(base_url()) ?>assets/img/icon.png&w=50&h=50" /></div>
							<div class="chip-label">Agropedia</div>
						</div><br/>					
						<span class="text-sm">Email Anda belum terverifikasi</span>
					</div>
				</div>
				<div class="card-footer">
					<a href="#" class="link active">TERPASANG</a>
					<a href="#" class="link">DISUKAI</a>
					<a href="#" class="link">NON AKTIF</a>
				</div>
			</div>
			<div class="profil-picture">
				<img src="<?php o($user_profile['picture_url']) ?>" width="80" class="message-avatar" />
			</div>
			<div class="profil-iklan">
			</div>
		</div>
	</div>
</div>