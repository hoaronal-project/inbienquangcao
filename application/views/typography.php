<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('partials/_breadcrumb'); ?>
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('partials/_breadcrumb'); ?>
<section id="services" class="page-section">
	<div class="container">
		<div class="mixed-grid pad general-section">
			<div class="filter-menu">
				<ul class="nav black works-filters text-center" id="filters">
					<li class="filter active" data-filter=".all">Những dịch vụ chúng tôi cung cấp</li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="masonry-grid grid-col-3 black">
				<div class="grid-sizer"></div>
				<?php foreach ($typographys as $item): ?>
					<div class="grid-item all">
						<div class="grid">
							<img src="<?php echo base_url(); ?><?php echo $item->image_big; ?>" width="400" height="273" alt="Recent Work"
								 class="img-responsive" />
							<div class="figcaption">
								<h4><?php echo $item->title; ?></h4>
								<!-- Image Popup-->
								<a href="<?php echo base_url(); ?><?php echo $item->image_big; ?>" data-rel="prettyPhoto[portfolio]">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo base_url(); ?>chi-tiet-du-an/<?php echo $item->id; ?>">
									<i class="fa fa-link"></i>
								</a></div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
