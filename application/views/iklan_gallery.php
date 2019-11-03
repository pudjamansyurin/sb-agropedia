
<div data-page="iklan_gallery" class="page">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="left sliding"><a href="#" class="back link icon-only"><i class="icon icon-back"></i></a></div>
			<div class="center sliding">Gallery Photo</div>
		</div>
	</div>
	<div class="page-content">
		<div data-pagination=".swiper-pagination" data-loop="true" data-zoom="true" data-next-button=".swiper-button-next" data-prev-button=".swiper-button-prev" class="swiper-container swiper-init agp-slider">
			<div class="swiper-wrapper">
				<?php foreach($photos as $photo) : ?>
				<div class="swiper-slide">
					<div class="swiper-zoom-container">
						<img src="timthumb.php?src=<?php echo(base_url()) ?>assets/img/dummy/<?php o($photo->iklan_photo) ?>&w=500" />
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
</div>