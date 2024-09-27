    <?= $this->include('Default/elements/header') ?>

    <?= $this->include('Default/elements/menu') ?>

    <?= $this->include('Default/elements/banners') ?>

    <!-- //banner-slider-->
	<section class="w3l-bottom-grids-6">
		<div class="bottom-grids-info ">
			<div class="container py-lg-5">
            <?= $page->content ?>
			</div>
		</div>
	</section>
	<section class="w3l-content-with-photo-6">
		<div class="contente-photo-hny-info pb-5">
			<div class="container py-lg-5">
            <?= $blocks['section2'] ?>

		</div>
		</div>
	</section>
	<section class="w3l-gallery-6">
		<!--/gallery-->
		<div class="gallery-content-6 py-5">
			<div class="container py-lg-5">
            <?= $blocks['section1'] ?>
			</div>
		</div>
		<!--//gallery-->

	</section>
	
	<section class="w3l-newsletter">
		<!-- /form-25-section -->
		<div class="form-25-mian py-5">
			<div class="container py-lg-5">
            <?= $blocks['section3'] ?>
			</div>
		</div>
	</section>
	<section class="w3l-content-4">
		<!-- /content-6-section -->
		<div class="content-4-main py-5">
			<div class="container py-lg-5">
            <?= $blocks['section5'] ?>
			</div>
		</div>
	</section>
	<section class="w3l-feature-with-photo-1">
		<div class="feature-with-photo-hny py-5">
		<div class="container">
		<?= $blocks['section6'] ?>

		</div>
		</div>
	</section>
	<!-- //form-25-section -->
	<section class="w3l-companies-hny-6" style="background: url(/templates/Default/assets//images/bg_3.jpg) no-repeat center;background-attachment: fixed;">
		<!-- /grids -->
		<div class="cusrtomer-layout py-5">
			<div class="container pt-lg-5">
            <?= $blocks['section4'] ?>

		</div>
		</div>
		<!-- //grids -->
	</section>


<section class="w3l-companies-hny-6" style="background-color: #e1e1e1;"><!-- /grids -->
   <div class="container py-5">
    <?= $blocks['section7'] ?>
	</div>
    </div>
    <!-- //grids --></section>
	
	
	
        <?= $this->include('Default/elements/footer') ?>
    