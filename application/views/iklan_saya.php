
<div data-page="iklan_saya" class="page tabbar-labels-fixed">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="left"><a href="#" class="back link icon-only"><i class="icon icon-back"></i></a></div>
			<div class="center">Iklan Saya</div>
			<div class="right"><a href="user/pg/iklan_input" class="link icon-only"><i class="icon material-icons">add_a_photo</i></a></div>
		</div>
	</div>
	<div class="toolbar tabbar tabbar-scrollable">
		<div class="toolbar-inner">
			<a href="#tab-1" class="tab-link active">Aktif</a>
			<a href="#tab-2" class="tab-link">Non-Aktif</a>
			<a href="#tab-3" class="tab-link">Moderasi</a>
			<a href="#tab-4" class="tab-link">Ditolak</a>
			<a href="#tab-5" class="tab-link">Promosi</a>
		</div>
	</div>
	<div class="page-content with-subnavbar hide-bars-on-scroll">
		<div class="tabs">
			<div id="tab-1" class="tab active">
				<div class="list-block media-list">
					<ul>
						<?php foreach($all_iklan as $iklan) : ?>
						<li>
							<a href="#" class="item-link item-content">
								<div class="item-media-square">
									<img data-src="timthumb.php?src=<?php echo(base_url()) ?>assets/img/dummy/<?php o($iklan->default_photo) ?>&w=80&h=80&q=50" width="80" class="lazy lazy-fadeIn" />
								</div>
								<div class="item-inner">
									<div class="item-title-row">
										<div class="item-title"><?php o($iklan->judul) ?></div>
										<div class="item-after"><?php o($iklan->tgl_posting) ?></div>
									</div>
									<div class="item-text"><?php o($iklan->deskripsi) ?></div>
								</div>
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div id="tab-2" class="tab">
				<div class="no-data">
					<i class="icon material-icons">spa</i>
					<p>Tidak ada data</p>
				</div>
			</div>
			<div id="tab-3" class="tab">
				<div class="no-data">
					<i class="icon material-icons">spa</i>
					<p>Tidak ada data</p>
				</div>
			</div>
			<div id="tab-4" class="tab">
				<div class="no-data">
					<i class="icon material-icons">spa</i>
					<p>Tidak ada data</p>
				</div>
			</div>
			<div id="tab-5" class="tab">
				<div class="no-data">
					<i class="icon material-icons">spa</i>
					<p>Tidak ada data</p>
				</div>
			</div>
		</div>
	</div>
</div>