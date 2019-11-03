
<div data-page="faq" class="page">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="left"><a href="#" class="back link icon-only"><i class="icon icon-back"></i></a></div>
			<div class="center">FAQ</div>
			<div class="right"><a href="#" class="link open-panel icon-only"><i class="icon icon-bars"></i></a></div>
		</div>
	</div>
	<div class="page-content">
		<div class="content-block-title">Frequently Asked Question</div>
		<div class="list-block accordion-list">
			<ul>
				<?php foreach($faqs as $faq) : ?>
				<li class="accordion-item">
					<a href="#" class="item-link item-content">
						<div class="item-inner"> 
							<div class="item-title"><?php o($faq->question) ?></div>
						</div>
					</a>
					<div class="accordion-item-content">
						<div class="content-block text-justify">
							<?php o($faq->answer) ?>
						</div>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>