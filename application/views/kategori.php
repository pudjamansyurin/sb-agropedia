<div data-page="kategori" class="page">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="left">
				<a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a>
			</div>
			<div class="center">Kategori</div>
			<div class="right">
				<a href="user/pg/pencarian" class="link"><i class="icon material-icons">search</i></a>
				<a href="user/pg/filter" class="link"><i class="icon material-icons">tune</i></a>
			</div>
		</div>
	</div>
	<?php getBottomToolbar('kategori'); ?>
	<div class="page-content  hide-bars-on-scroll">									
		<div class="kategori-block">
			<div class="row no-gutter">
				<?php foreach($all_kategori as $kategori) : ?>
				<div class="col-50 tablet-50">
					<div class="card margin-3">
						<a href="app/kategori/<?php o($kategori->id_kategori) ?>" class="link">
							<div class="card-content">
								<div class="card-content-inner">
									<div><?php o($kategori->icon) ?></div>
									<span class="text-md"><?php o($kategori->kategori) ?></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>