
<div data-page="kategori_sub" class="page">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="left"><a href="#" class="back link icon-only"><i class="icon icon-back"></i></a></div>
			<div class="center">Sub Kategori</div>
		</div>
	</div>
	<div class="page-content">
		<div class="content-block-title"><?php o($kategori->kategori) ?></div>
		<div class="list-block">
			<ul>
				<li>
					<a href="app/home/kategori/<?php o($kategori->id_kategori) ?>" class="item-link item-content">
						<div class="item-inner"> 
							<div class="item-title">Semua <?php o($kategori->kategori) ?></div>
						</div>
					</a>
				</li>
				<?php foreach($all_sub_kategori as $sub_kategori) : ?>
				<li>
					<a href="app/home/kategori_sub/<?php o($sub_kategori->id_kategori_sub) ?>" class="item-link item-content">
						<div class="item-inner"> 
							<div class="item-title"><?php o($sub_kategori->kategori_sub) ?></div>
						</div>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>