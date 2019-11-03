
<div data-page="pesan" class="page tabbar-labels-fixed">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="left">
				<a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a>
			</div>
			<div class="center">Pesan</div>
			<div class="right">
				<a href="user/pg/pencarian" class="link"><i class="icon material-icons">search</i></a>
				<a href="user/pg/filter" class="link"><i class="icon material-icons">tune</i></a>
			</div>
		</div>
	</div>
	<div class="toolbar tabbar tabbar-scrollable">
		<div class="toolbar-inner">
			<a href="#tab-pesan-1" class="tab-link active">Jual</a>
			<a href="#tab-pesan-2" class="tab-link">Beli</a>
			<a href="#tab-pesan-3" class="tab-link">Berita Agropedia</a>
			<a href="#tab-pesan-4" class="tab-link">Aktivitas</a>
		</div>
	</div>
	<?php getBottomToolbar('pesan'); ?>
  <div class="page-content with-subnavbar hide-bars-on-scroll">
		<div class="tabs">
			<div id="tab-pesan-1" class="tab active">
				<div class="list-block media-list">
					<ul>
						<li>
							<a href="user/pg/pesan_detail" class="item-link item-content">
								<div class="item-media">
									<img src="timthumb.php?src=<?php echo(base_url()) ?>photo_profil/buyer1.jpg&w=80&h=80"/>
								</div>
								<div class="item-inner">
									<div class="item-title-row">
										<div class="item-title">Ibrahim</div>
										<div class="item-after">7 jam lalu</div>
									</div>
									<div class="item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis tellus ut turpis condimentum, ut dignissim lacus tincidunt. Cras dolor metus, ultrices condimentum sodales sit amet, pharetra sodales eros. Phasellus vel felis tellus. Mauris rutrum ligula nec dapibus feugiat. In vel dui laoreet, commodo augue id, pulvinar lacus.</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="tab-pesan-2" class="tab">
				<div class="no-data">
					<i class="icon material-icons">spa</i>
					<p>Tidak ada data</p>
				</div>
			</div>
			<div id="tab-pesan-3" class="tab">
				<div class="no-data">
					<i class="icon material-icons">spa</i>
					<p>Tidak ada data</p>
				</div>
			</div>
			<div id="tab-pesan-4" class="tab">
				<div class="no-data">
					<i class="icon material-icons">spa</i>
					<p>Tidak ada data</p>
				</div>
			</div>
		</div>
	</div>
</div>