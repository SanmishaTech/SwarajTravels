    <?= $this->include('Default/elements/header') ?>
    <?= $this->include('Default/elements/menu') ?>

    <img class="img-fluid w-100" src="/<?= $page->featured_image?>" alt="<?= $page->title ?>">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $page->title ?></li>
    </ol>
    </nav>
    <section class="w3l-contact-section-form w3l-content-4">
		<!-- /content-6-section -->
		<div class="content-4-main py-5 contact-sec-inner">
			<div class="container py-lg-5">
				<div class="content-info-in row">

					<div class="content-left col-lg-8 pr-lg-3">
                    <?= $page->content ?> 
					</div>

					<div class=" col-lg-4 pl-lg-4">
                    <?= $blocks['more-info'] ?>
					</div>

					
					<div class=" col-lg-12 pl-lg-4 mt-5" id="enquiryform">
					<div class="contact-form-mainv">
					<span class="sub-title">Enquire Now</span>
					<h3 class="hny-title mb-3">Keep In Touch With Us.</h3>
					
					<?= $this->include('Webly\Core\Views\Elements\flash') ?>
					<form action="/form/enquiry" method="post" enctype="multipart/form-data">
					<?= csrf_field() ?>
					<?php $validation =  \Config\Services::validation(); ?>
						<div class="row">
						<input name="tour-name" type="hidden" placeholder="tour-name" value="<?= $page->title ?>" readonly/>
							<div class="col-lg-12 form-group">
								<input name="name" placeholder="name" value="<?= old('name') ?>" />
								<span class="help-block"><?= validation_show_error('name') ?></span>
							</div>
							<div class="col-lg-6 form-group">
							<input name="email" placeholder="email" value="<?= old('email') ?>" />
						<span class="help-block"><?= validation_show_error('email') ?></span>
							</div>
							<div class="col-lg-6 form-group">
							<input name="mobile" placeholder="mobile" value="<?= old('mobile') ?>" />
						<span class="help-block"><?= validation_show_error('mobile') ?></span>
							</div>
							<div class="col-lg-12 form-group">
								<textarea name="message"   placeholder="Message" class="textarea form-control rounded-0 p-3" rows="2" cols="30"><?= old('message') ?></textarea>
							</div>
							</div>
							<div class="col-lg-12 form-group">
							<div class="form-submit text-center mt-4">
								<button type="submit" class="btn submit">Submit</button>
							</div>
						</div>
					</form>
					</div>

				</div>

			</div>
		</div>
	</section>
	<a   id="myBtn"  href="#enquiryform" title="Enquiry">Enquiry</a>

	<!-- //feature with photo1 -->
        <?= $this->include('Default/elements/footer') ?>