
<div data-page="iklan" class="page navbar-transparent">
	<div class="navbar">
		<div class="navbar-inner color-white">
			<div class="left"><a href="#" class="back link icon-only"><i class="icon icon-back"></i></a></div>
			<div class="center">Deskripsi Iklan</div>
			<div class="right">
				<a href="#" class="link icon-only js-share"><i class="icon material-icons">share</i></a>
				<a href="#" class="link icon-only"><i class="icon material-icons">favorite</i></a>
			</div>
		</div>
	</div>
	<div class="speed-dial">
		<a href="#" class="floating-button">
			<i class="icon material-icons">perm_phone_msg</i>
			<i class="icon material-icons">ring_volume</i>
		</a>
		<div class="speed-dial-buttons">
			<a href="tel:<?php o($iklan->handphone) ?>" class="link external">
				<span class="button button-fill button-raised">Telpon</span> 
				<i class="icon material-icons">phone</i>
			</a>
			<a href="sms:<?php o($iklan->handphone) ?>" class="link external">
				<span class="button button-fill button-raised">SMS</span> 
				<i class="icon material-icons">sms</i>
			</a>
			<a href="#" class="link must-login">
				<span class="button button-fill button-raised">Chat</span> 
				<i class="icon material-icons">forum</i>
			</a>
		</div>
	</div>
	<div class="page-content iklan hide-bars-on-scroll" style="padding:0">	
		<a href="<?php ob("app/iklan_gallery/{$iklan->id_iklan}") ?>">
			<div data-pagination=".swiper-pagination" data-loop="true" class="swiper-container swiper-init">
				<div class="swiper-pagination"></div>
				<div class="swiper-wrapper">
					<?php foreach($iklan->photo as $photo) : ?>
					<div class="swiper-slide" style="background-image:url('timthumb.php?src=<?php echo(base_url()) ?>assets/img/dummy/<?php o($photo->iklan_photo) ?>&h=200&q=50')" data-image="assets/img/dummy/<?php o($photo->iklan_photo) ?>"> </div>
					<?php endforeach; ?>
				</div>
			</div>
		</a>
		<div class="card">
			<div class="card-content"> 
				<div class="list-block media-list">
					<ul>
						<li class="item-content">
							<div class="item-media">
								<img src="timthumb.php?src=<?php echo(base_url()) ?>photo_profil/<?php o($iklan->photo_profil) ?>&h=80&w=80"/>
							</div>
							<div class="item-inner">
								<div class="item-title-row">
									<div class="item-title"><?php o($iklan->nama) ?></div>
								</div>
								<div class="item-subtitle">Member sejak <?php o($iklan->created_on) ?></div>
								<div class="item-subtitle"><a href="user/pg/profil_penjual/" class="link">Lihat Profil</a></div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-content"> 
				<div class="card-content-inner"> 
					<p><?php o($iklan->judul) ?></p>
					<p class="color-gray text-justify iklan-deskripsi"><?php o($iklan->deskripsi) ?></p>
					<p class="buttons-row">
						<a href="#" class="button color-orange iklan-selengkapnya">SELENGKAPNYA</a>
					</p>
					<div class="list-block">
						<ul>
							<li>
								<div class="item-content">
									<div class="item-inner"> 
										<div class="item-title color-purple">Dipasang</div>
										<div class="item-after"><?php o($iklan->tgl_posting) ?></div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-inner"> 
										<div class="item-title color-purple">Stock</div>
										<div class="item-after"><?php o($iklan->stock) ?></div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-inner"> 
										<div class="item-title color-purple">ID Iklan</div>
										<div class="item-after"><?php o($iklan->id_iklan) ?></div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-inner"> 
										<div class="item-title color-purple">Dilihat</div>
										<div class="item-after"><?php o($iklan->dilihat) ?></div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-inner"> 
										<div class="item-title color-purple">Dihubungi</div>
										<div class="item-after"><?php o($iklan->dihubungi) ?></div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-content"> 
				<div class="card-content-inner"> 
					<div class="list-block">
						<ul>
							<li>
								<a href="app/iklan_lainnya/<?php o($iklan->id_user) ?>" class="item-link item-content">
									<div class="item-inner">
										<div class="item-title">Lihat iklan lainnya</div>
									</div>
								</a>
							</li>
							<li>
								<div class="color-purple lokasi">Lokasi Iklan</div>
								<a href="#" class="item-link item-content">
									<div class="item-inner">
										<div class="item-title">
											<i class="icon material-icons">location_on</i> <?php o($iklan->lokasi) ?>
										</div>										
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-content"> 
				<div class="card-content-inner">
					<p>Bertemu langsung dengan penjual adalah cara teraman membeli barang.</p>
					<a href="user/pg/iklan_laporkan" class="link">Laporkan iklan ini</a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="#" class="link">Lebih lanjut</a>
				</div>
			</div>
		</div>
	</div>
</div>