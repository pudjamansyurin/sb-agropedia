
<div data-page="iklan_lainnya" class="page">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="left"><a href="#" class="back link icon-only"><i class="icon icon-back"></i></a></div>
			<div class="center">Iklan Lainnya</div>
			<div class="right">
				<a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a>
			</div>
		</div>
	</div>
	<div class="page-content hide-bars-on-scroll">
		<div class="row no-gutter">
			<?php foreach($all_iklan as $iklan) : ?>
			<div class="col-50 tablet-33">
				<a href="app/iklan/<?php o($iklan->id_iklan) ?>" class="link" >
					<div class="card card-header-pic">
						<div class="car-header">
							<img data-src="timthumb.php?src=<?php echo(base_url()) ?>assets/img/dummy/<?php o($iklan->default_photo) ?>&w=150&h=150" class="lazy lazy-fadeIn" />
						</div>
						<div class="card-content"> 
							<div class="card-content-inner"> 
								<p class="title-iklan"><?php o($iklan->judul) ?></p>
								<span class="text-sm">Rp </span><b><?php o($iklan->harga) ?></b> / <?php o($iklan->satuan) ?><br/>
								<span>Stock : <?php o($iklan->stock) ?></span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>